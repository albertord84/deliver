<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $deliveryngs=\App\Delivering::get();
        return view('deliveryngs.index',compact('deliveryngs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deliveryngs.create');
       
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
         $deliveryng = new \App\Delivering;
         $deliveryng->client=$request->input("name");
         $deliveryng->deliverydate=$request->input("date");
         $deliveryng->source=$request->input("address1");
         $deliveryng->destiny=$request->input("address2");
         $deliveryng->save();
         return redirect()->route('deliveryngs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deliveryng = \App\Delivering::find($id);

        return view('deliveryngs.show', compact('deliveryng'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deliveryng = \App\Delivering::find($id);

        return view('deliveryngs.edit', compact('deliveryng'));

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
         $deliveryng = \App\Delivering::findOrFail($id);
         $deliveryng->client=$request->input("name");
         $deliveryng->deliverydate=$request->input("date");
         $deliveryng->source=$request->input("address1");
         $deliveryng->destiny=$request->input("address2");
         $deliveryng->save();
         return redirect()->route('deliveryngs.index');
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
