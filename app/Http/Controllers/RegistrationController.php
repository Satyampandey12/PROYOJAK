<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;  
use App\VRegistration;  
use App\PRegistration;  

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vr = new VRegistration;
        $vr->enroll_number = $request->enroll_number;
        $vr->name = $request->name;
        $vr->fname = $request->fname;
        $vr->course = $request->course;
        $vr->year = $request->year;
        $vr->email = $request->email;
        $vr->dept = $request->dept;
        $vr->save(); 
       
       return redirect()->intended('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function save(Request $request){
    
        
        $pr = new PRegistration;
        $pr->enroll_number = $request->enroll_number;
        $pr->name = $request->name;
        $pr->fname = $request->fname;
        $pr->course = $request->course;
        $pr->year = $request->year;
        $pr->email = $request->email;
        $pr->field = $request->field;
        $pr->save();

        return redirect()->intended('/');
    }

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
