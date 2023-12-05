<?php

namespace App\Http\Controllers;

use App\Models\programdata;
use Illuminate\Http\Request;

class ProgramdataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Get data from DB in here and pass it to the view
    
        return view('programs.programdata', []);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(programdata $programdata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(programdata $programdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, programdata $programdata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(programdata $programdata)
    {
        //
    }
}
