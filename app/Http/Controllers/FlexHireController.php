<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flexhire;

class FlexHireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flexhire = Flexhire::all();
        return $flexhire;
//        return view('flexhire.index',compact('flexhire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('flexhire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $flexhire= new Flexhire;
        $flexhire ->user_id = Sentinel::getUserId();
        $flexhire->organisation_name =$request->organisation_name;
        $flexhire->organisation_size = $request->organisation_size;
        $flexhire->organisation_type = $request->organisation_type;
        $flexhire->Physical_Address = $request->Physical_Address;
        $flexhire->email =$request ->email;
        $flexhire->key_qualification = $request->key_qualification;
        $flexhire->Qualification_Description =$request->Qualification_Description;
        $flexhire->experience = $request->experience;
        $flexhire->Responsibilities =$request->Responsibilities;
        $flexhire->skills =$request->skills;
        $flexhire->minSal = $request->minSal;
        $flexhire->maxSal = $request->maxSal;
        $flexhire->Frequency_Rate =$request->Frequency_Rate;
        $flexhire->start_date= $request->start_date;
        $flexhire->end_date =$request->end_date;

        $flexhire->save();*/

        Flexhire::create($request->all());
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
