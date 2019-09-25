<?php

namespace App\Http\Controllers\Api;

use App\Food;
use App\Set;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use JD\Cloudder\Facades\Cloudder;

class SetController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Input::all();

        $results = $data['results'] ?? 10;
        $nameSearch = $data['name'] ?? false;
        $sortField = $data['sortField'] ?? false;
        $sortOrder = $data['sortOrder'] ?? false;
        $page = ($data['page'] ?? 1) - 1;

        $sets = Set::with(['category','foods']);

        $res['totalCount'] = $sets->count();

        if ($nameSearch) {
            $sets->where('name', 'like', '%' . $nameSearch[0] . '%');
        }

        if ($sortField) {
            $sets->orderBy($sortField, $sortOrder);
        }

        $res['keys'] = $sets->get()->map(function ($values) {
            return $values->id;
        });

        $sets->skip($page * $results)->take($results);

        $res['sets'] = $sets->get();

        return response($res);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foods =  $request->get('foods');

        $price = 0;
        foreach ($foods as $food1) {
            $food = Food::find($food1['id']);
            $price += $food['quantity'] * $food['price'];
        };

        Log::info($request->get('category_id'));
        $set = Set::create([
            'name' =>  $request->get('name'),
            'type' => 1,
            'category_id' => (int)$request->get('category_id'),
            'price' => $price
        ]);

        foreach ($foods as $food){
            $set->foods()->attach($food['id'], ['quantity' => $food['quantity']]);
        }

        $image = $request['image']['file']['thumbUrl'];
        Cloudder::upload($image, null);
        $result = Cloudder::getResult();
        $image_id = $result['public_id'] . '.' . $result['format'];
        $set->image = $image_id;


        $set->save();
//
        return $set->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $set = Set::find($id);
        foreach ($set->foods as $food){
            $set->calo += $food->calo;
            $set->protein += $food->protein;
            $set->dietary_fiber += $food->dietary_fiber;
            $set->carbohydrate += $food->carbohydrate;
            $set->total_fat += $food->total_fat;
            $set->price += $food->price;
    }

        return $set;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
