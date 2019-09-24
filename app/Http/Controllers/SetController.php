<?php

namespace App\Http\Controllers;

use App\Set;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SetController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $set = Set::where('type', 1)->get();

        $data = [
            'sets' => $set
        ];
        return view('sets', $data);
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

        $listFood = $request->get('listFood');
        $totalValue = $request->get('totalValue');

        $set = Set::create([
            'name' => Carbon::now()->valueOf(),
            'type' => 2,
            'category_id' => 1
        ]);

        foreach ($listFood as $food) {
            $set->foods()->attach((integer)$food['id'], ['quantity' => $food['quantity']]);
        };

        $set->save();
        Log::info($totalValue);


        $data = array_merge($set->toArray(), $totalValue);


        return response(json_encode($data));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $set = Set::with('foods')->where('id', $id)->first()->toArray();
        $set['price'] = 0;
        $set['calo'] = 0;
        $set['protein'] = 0;
        $set['dietary_fiber'] = 0;
        $set['carbohydrate'] = 0;
        $set['total_fat'] = 0;

        $set['vitamins'] = '';
        $set['minerals'] = '';
        foreach ($set['foods'] as $food) {
            $set['price'] += $food['price'];
            $set['calo'] += $food['calo'];
            $set['protein'] += $food['protein'];
            $set['dietary_fiber'] += $food['dietary_fiber'];
            $set['carbohydrate'] += $food['carbohydrate'];
            $set['total_fat'] += $food['total_fat'];
            $set['vitamins'] .= ',' . $food['vitamins'];
            $set['minerals'] .= ',' . $food['minerals'];
//            $set->calo += $food->calo;
//            $set->price += $food->price;
        }

//        echo '<pre>';
//        print_r($set);
//        echo '<pre>';
        return view('detail-set', ['set' => $set]);
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
