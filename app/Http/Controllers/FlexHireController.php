<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFlexHireFormRequest;
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
//
        $flexhires = Flexhire::paginate(5);
        return view('flexhire.index',compact('flexhires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return View('flexhire.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFlexHireFormRequest $request)
    {
        $flexhire = new Flexhire(array(
            'user_id'=>$request->get('user_id'),
            'organisation_name'=>$request->get('organisation_name'),
            'organisation_size'=>$request->get('organisation_size'),
            'organisation_type'=>$request->get('organisation_type'),
            'Physical_Address'=>$request->get('Physical_Address'),
            'email'=>$request->get('email'),
            'key_qualification'=>$request->get('key_qualification'),
            'Qualification_Description'=>$request->get('Qualification_Description'),
            'experience'=>$request->get('experience'),
            'Responsibilities'=>$request->get('Responsibilities'),
            'skills'=>$request->get('skills'),
            'minSal'=>$request->get('minSal'),
            'maxSal'=>$request->get('maxSal'),
            'Frequency_Rate'=>$request->get('Frequency_Rate'),
            'location'=>$request->get('location'),
            'job_type'=>$request->get('job_type'),
            'start_date'=>$request->get('start_date'),
            'end_date'=>$request->get('end_date')
        ));
        $flexhire->save();
               return redirect(route('flexhire.index'))->with(['message' => 'Your Flex Hire Job listing was received We shall get back to you shortly']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flexhire =Flexhire::findOrFail($id);
        return view('flexhire.show',compact('flexhire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flexhire =Flexhire::findOrFail($id);
        return view('flexhire.edit',compact('flexhire'));
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
       $flexhire =Flexhire::findOrFail($id);
       if ($flexhire->update($request->all())){
           return redirect('/flexhire')->with(['message'=>'Your FlexHire Post was Successfully Updated']);

       }else{
           return redirect()->back()->with(['error'=>'There were problems with updating you post. Kindly try again']);
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
