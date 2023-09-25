<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use Illuminate\Http\Request;


class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp= Emp::get();
        return view('dashboard',compact('emp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "DONE" ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Emp::create([
            'name'=>$request->name ,
            'title'=>$request->title ,
            'age'=>$request->age ,
            'job'=>$request->job ,
            'phone'=>$request->phone ,

        ]) ;
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function show(Emp $emp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $upEmp =Emp::findorFail($id) ;
        return view('update',compact('upEmp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $up=Emp::where('id',$id)->first() ;
        $up->update(
            $request->all()
        );return $this->index();}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Emp::destroy($id) ;

        return redirect()->back();
    }
}
