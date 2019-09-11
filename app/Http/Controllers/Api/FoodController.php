<?php

namespace App\Http\Controllers\Api;

use App\Food;
use Foo\DataProviderIssue2833\FirstTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use JD\Cloudder\Facades\Cloudder;

class FoodController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
//        $foods = Food::join('food_categories', 'foods.category_id', '=', 'foods.id')->get();
        $data = Input::all();
        Log::info($data);
        $foods = Food::with('category');
        $results = $data['results'] ?? false;
        $page = ($data['page'] ?? 1) - 1;

        $res['totalCount'] = $foods->count();

        $res['keys'] = $foods->get()->map(function ($values) {
            return $values->id;
        });

        $foods->skip($page * $results)->take($results);

        $res['foods'] = $foods->get();

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'name' => 'required',
//            'category' => 'required',
//            'calo' => 'required',
//            'protein' => 'required',
//            'dietary_fiber' => 'required',
//            'carbohydrate' => 'required',
//            'total_fat' => 'require',
//            'vitamins' => 'require',
//            'minerals' => 'require',
//            'images' => 'require'
//        ], [
//            'name.required' => 'Please input dish name',
//            'category.required' => 'Please select dish category!',
//            'calo.required' => 'Please input calo',
//            'protein.required' => 'Please input proteint',
//            'dietary_fiber.required' => 'Please input carbohydrate',
//            'carbohydrate.required' => 'Please input dietary fiber',
//            'total_fat.required' => 'Please input fat intaket',
//            'vitamins.required' => 'Please input vitamins!',
//            'minerals.required' => 'Please input minerals!',
//            'images.required' => 'Please input minerals!',
//        ]);

        $food = new food();
        $food->name = $request->get('name');
        $food->category = $request->get('category');
        $food->calo = $request->get('calo');
        $food->protein = $request->get('protein');
        $food->dietary_fiber = $request->get('dietary_fiber');
        $food->carbohydrate = $request->get('carbohydrate');
        $food->total_fat = $request->get('total_fat');
        $food->vitamins = join(',', $request->get('vitamins'));
        $food->minerals = join(',', $request->get('minerals'));
        $image = $request['$image']['file']['thumbUrl'];
        Cloudder::upload($image, null);
        $result = Cloudder::getResult();
        $image_id = $result['public_id'] . '.' . $result['format'];
        $food->image = $image_id;
        $food->save();
        return $food;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Food::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        return Food::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        Food::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Food::find($id)->update(['status' => -1]);
    }
}
