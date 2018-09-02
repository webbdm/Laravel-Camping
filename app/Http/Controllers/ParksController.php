<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Park;

class ParksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parks = Park::all();

        return $parks;
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
        Park::create([
            'name'=> request('name'),
            'description'=> request('description')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Park  $park
     * @return \Illuminate\Http\Response
     */
    public function show(Park $park)
    { 
        return $park;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Park  $park
     * @return \Illuminate\Http\Response
     */
    public function edit(Park $park)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Park  $park
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $park = Park::findOrFail($id);
        $park->update($request->all());

        return response()->json($park, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Park  $park
     * @return \Illuminate\Http\Response
     */
    public function destroy(Park $park)
    {
        //
    }
}
