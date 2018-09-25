<?php

namespace App\Http\Controllers;

use App\Skillset;
use Illuminate\Http\Request;

class SkillsetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Skillset::all();
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
     * @param  \App\Skillset  $skillset
     * @return \Illuminate\Http\Response
     */
    public function show(Skillset $skillset)
    {
        return $skillset;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skillset  $skillset
     * @return \Illuminate\Http\Response
     */
    public function edit(Skillset $skillset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skillset  $skillset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skillset $skillset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skillset  $skillset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skillset $skillset)
    {
        //
    }
}
