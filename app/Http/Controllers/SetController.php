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
        $set = Set::where('type',1)->get();

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
        return view('detail-set');
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
