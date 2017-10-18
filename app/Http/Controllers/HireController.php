<?php

namespace App\Http\Controllers;
use App\Hire;
use Sentinel;
use Illuminate\Http\Request;
use function view;

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

        $this->validate($request,[
        'organisation_name'=>'required',
        'organisation_size'=>'required',
        'organisation_type'=>'required',
        'Physical_Address'=>'required',
        'email'=>'required|email',
        'key_qualification'=>'required|max:255',
        'Qualification_Description'=>'required|max:255',
        'experience'=>'required',
        'Responsibilities'=>'required|max:255',
        'skills'=>'required|max:255',
        'minSal'=>'numeric|nullable',
        'maxSal'=>'numeric|nullable',
        'start_date'=>'required|date'
    ]);

        $hire = new Hire($request->all());

        $request->user()
            ->hires()->save($hire);

      if (Hire::create($request->all())){
          return redirect('/success')->with('message','Your Job posting was Successfull Thank You for your continued use of this Service');

      }else {
          return redirect()->back()->with([
              'error' => 'There was a problem storing your job kindly try again.']);
      }


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

    public function pricing(){
        return view('hire.pricing');
    }
}
