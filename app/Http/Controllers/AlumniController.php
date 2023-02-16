<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ika.create', [
            'body' => Alumni::find(1)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alumni::create($request);

        return view('/ika')->with('success', 'Program Has Has Been Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    // public function edit(Alumni $alumni)
    // {
    //     return view('ika.create', [
    //         'proker' => $alumni
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {

        // $conn = mysqli_connect('localhost','root', '', 'alumni');
        // mysqli_query($conn, "UPDATE alumnis SET body = '$request->body' WHERE id = '1' ");

        $request->session()->flash('success', 'Program Kerja Has Been Updated!');

        $validatedData = $request->validate([
            'body' => 'required'
        ]);

        Alumni::find(1)->update($validatedData);

        return view('ika.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni)
    {
        //
    }

    public function programkerja()
    {
        return view('ika.programkerja', [
            'proker' => Alumni::find(1)
        ]);
    }
}
