<?php

namespace App\Http\Controllers;
use App\Hire;
use Sentinel;
use Illuminate\Http\Request;

class HireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hires= Hire::paginate(5);
        return view('hire.index',compact('hires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if (Hire::create($request->all())){
          return redirect('/success')->with('message','Your Job posting was Successfull Thank You for your continued use of this Service');

      }else{
          return redirect()->back()->with([
              'error'=>'There was a problem storing your job kindly try again.']);

      }
        /*$hire= new Hire($request->all());

        $user = Sentinel::getUser()->getUserId();*/

        /*'organisation_name' == $request->organisation_name;
        'organisation_size' == $request->organisation_size;
        'organisation_type' == $request->organisation_type;
        'Physical_Address' == $request->Physical_Address;
        'email' == $request ->email;
        'key_qualification' == $request->key_qualification;
        'Qualification_Description' == $request->Qualification_Description;
        'experience' == $request->experience;
        'Responsibilities' == $request->Responsibilities;
        'skills' == $request->skills;
        'minSal' == $request->minSal;
        'maxSal' == $request->maxSal;
        'start_date' == $request->start_date;*/

            /*$user->Hire()->save($hire);

            return redirect('/success')->with('message','Your Job posting was Successfull Thank You
            for your continued use of this Service');*/


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hire =Hire::findOrFail($id);
        return view('hire.show',compact('hire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hire =Hire::findOrFail($id);
        return view('hire.show',compact('hire'));
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
        $hire =Hire::findOrFail($id);
        if ($hire->update($request->all())){
            return redirect('/hire')->with(['message'=>'Your Hire post was successfuly updated']);
        }else{
            return redirect('/hire')->with(['error'=>'There was a problem updating you Hire Post']);
        }
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
