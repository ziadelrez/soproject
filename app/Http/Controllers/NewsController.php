<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


     public function getindex()
    {
       
        // $data=[]; // method 2 to pass data to view page
        // $data['name']='Ziad Ezzedin El Rez';
        // $data['phone']='03495685';

        //method 3 to pass data to view page

      //$obj = new \stdClass();

        // $obj -> name = 'Ziad El Rez - Lebanon';
        // $obj -> phone = '009613495685';

     // return view('welcome',$data); // ->with(['data'=>'Ziad El Rez','phone'=>'03495685']); pass parameters to view page

        //  return view('welcome',compact('obj')); // ->with(['data'=>'Ziad El Rez','phone'=>'03495685']); pass parameters to view page

        $data=['a'=>'Ziad','b'=>'El Rez','c'=>'Lebanon'];
         //return view('welcome')->with(['name'=>'Ziad El Rez','phone'=>'03495685']); //pass parameters to view page
         return view('welcome',compact('data'));//->with('data',$data); //pass array of variables parameters to view page


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
        //
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
