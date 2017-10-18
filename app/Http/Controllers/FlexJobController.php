<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlexJobRequest;
use Illuminate\Http\Request;
use File;
use App\FlexJob;
use Sentinel;


class FlexJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $id = Sentinel::getUser()->getUserId();
       $flexjobs= FlexJob::paginate(5);

       return view('flexjobs.index',compact('flexjobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flexjobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlexJobRequest $request)
    {
        $CV = time().'.'.$request->CV->getClientOriginalExtension();
        $request->CV->move(public_path('flexjob/resume'), $CV);
        $flexjob = new FlexJob(array(
            'user_id'=>$request->get('user_id'),
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name'),
            'email'=> $request->get('email'),
            'phone_number'=> $request->get('phone_number'),
            'key_qualification'=> $request->get('key_qualification'),
            'other_key_qualification'=>$request->get('other_key_qualification'),
            'experience'=>$request->get('experience'),
            'skills'=> $request->get('skills'),
            'profession'=> $request->get('profession'),
            'availability'=>$request->get('profession'),
            'CV' => $CV,
    ));
            $flexjob->save();
            return redirect(route('flexjobs.index'))->with(['message' => 'Your Flex job Request was received. Our Team will get back to You.']);
        }
//
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flexjob =FlexJob::findOrFail($id);
        return view('flexjobs.show',compact('flexjob'));
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
