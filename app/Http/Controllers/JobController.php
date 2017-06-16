<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobFormRequest;
use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=Job::paginate(10);
        return view('jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobFormRequest $request)
    {
//
        $CV = time().'.'.$request->CV->getClientOriginalExtension();
        $request->CV->move(public_path('job/resume'), $CV);
        $cover_letter = time().'.'.$request->cover_letter->getClientOriginalExtension();
        $request->cover_letter->move(public_path('job/cover'), $cover_letter);
        $job = new Job(array(
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
            'cover_letter'=>$cover_letter
        ));
        $job->save();
            return redirect(route('jobs.index'))->with(['message' => 'Your Permanent job request was received. Our Team will get back to You.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job =Job::findOrFail($id);
        return view('jobs.show',compact('job'));
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
    public function search()
    {
        return view('jobs.search');
    }

}
