<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Input::all();
        Log::info($data);
        $results = $data['results'] ?? false;
        $sortField = $data['sortField'] ?? false;
        $sortOrder = $data['sortOrder'] ?? false;
        $filterDate = json_decode($data['filterDate'] ?? '{}', true);
        $filters = [json_decode($data['filters'] ?? '{}', true)][0];
//        Log::info('filter' ,$filters);
        $page = ($data['page'] ?? 1) - 1;


        $users = User::join('profiles as profile', 'profile.user_id', '=', 'users.id');

        if(!empty($filterDate)){
//            Log::info(gettype($filterDate));
            $users->where([
                ['create_at', '>=', $filterDate['start']],
                ['create_at', '<=', $filterDate['end']]
            ]);
        }

        if (!empty($filters)) {
//            Log::info($filters);
            foreach ($filters as $key => $values) {

                if (!empty($values)) {
                    if ($key === 'status' || $key === 'gender') {
                        $users->whereIn($key , $values);
                    } else {
                        foreach ($values as $value) {
                            $users->where($key, 'like', '%' . $value . '%');
                        }
                    }
                }
            }
        }

        if ($sortField) {
            $users->orderBy($sortField, $sortOrder);
        }

        $res['totalCount'] = $users->count();

        $users->skip($page * $results)->take($results);


        $res['users'] = $users->get();

        return response(json_encode($res));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
