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
        $flexjob = FlexJob::create($request->all());
        if ($request->hasFile('CV')){
            $cv = $request->file('CV');
            $filename = time() . '.' . $cv->getClientOriginalExtension();
            File:: make($filename)->save( public_path('/uploads/resume/' . $filename ) );
            $flexjob->CV =$filename;
            $flexjob->save();
            return redirect(route('flexjobs.index'))->with(['message' => 'Your Flex job Request was received. Our Team will get back to You.']);
        }
        return redirect()->back()->with(['error'=>'There Was a problem Lodging your Request. Kindly Try Again.']);
    }
//        if (FlexJob::create($request->all()))
//            return redirect(route('flexjobs.index'))->with(['message' => 'Your Flex job Profile was received Thank you for registering with us']);
//        else {
//            return redirect()->back()->with([
//                'error' => 'There was a problem storing your job kindly try again.']);
//        }
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
