<?php

namespace App\Http\Controllers\Api;

use App\Food;
use Foo\DataProviderIssue2833\FirstTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class FoodController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth')->except(['index','show']);
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

        $res['keys'] = $foods->get()->map(function ($values){
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
    }
}
