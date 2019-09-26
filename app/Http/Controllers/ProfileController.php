<?php

namespace App\Http\Controllers;

use App\Address;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('profile-user', ['user' => $user]);
    }


    public function profileAddress()
    {
        $user = Auth::user();
        return view('profile-address', ['user' => $user]);
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
     * @return string
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'huyen' => 'required',
            'tinh' => 'required',
            'xa' => 'required',
            'address' => 'required',
        ], [
            'huyen.required' => 'The province field is required.',
            'tinh.required' => 'The districts field is required.',
            'xa.required' => 'The wards field is required.',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $name = $request->get('name');
        $phone = $request->get('phone');
        $profile_id = $request->get('profile_id');
        $tinh = explode('--', $request->get('tinh'));
        $huyen = explode('--', $request->get('huyen'));
        $xa = explode('--', $request->get('xa'));
        $address = $request->get('address');


        Log::info($request);
        $slug = $tinh[0] . '/' . $huyen[0] . '/' . $xa[0];
        $addressTxt = $address . ', ' . $xa[1] . ', ' . $huyen[1] . ', ' . $tinh[1];

        $reAddress = Address::create([
            'profile_id' => $profile_id,
            'name' => $name,
            'phone' => $phone,
            'slug' => $slug,
            'addressTxt' => $addressTxt

        ]);

        return "success";
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
//        $profile = Profile::update
        $profile = Profile::find($id);
        $profile->update($request->all());


//        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd($id);
        Address::whereId($id)->update(['status' => 0]);

        return redirect()->back();
    }
}
