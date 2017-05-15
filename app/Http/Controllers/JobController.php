<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobFormRequest;
use Illuminate\Http\Request;
use File;
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
        $job= Job::create($request->all());

        if ($request->hasFile('CV')){
            $cv = $request->file('CV');
            $contents = time() . '.' . $cv->getClientOriginalExtension();
            File:: put('/uploads/resume', $contents);
            $job->CV =$contents;

            if ($request->hasFile('cover_letter')){
                $cover = $request->file('cover_letter');
                $contents = time() . '.' . $cover->getClientOriginalExtension();
                File:: put('/uploads/cover_letter', $contents);
                $job->cover_letter =$contents;
            }
            $job->save();
            return redirect(route('jobs.index'))->with(['message' => 'Your Permanent job request was received. Our Team will get back to You.']);
        }
    return redirect(route('jobs.index'))->with(['message' => 'Your Job profile was successfully posted.']);
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
}
