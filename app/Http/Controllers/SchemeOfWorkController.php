<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchemeOfWork;
class SchemeOfWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schemes = SchemeOfWork::all();
        return view('schemes.index',compact('schemes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('schemes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'subject' => 'required',
        ]);
        SchemeOfWork::create($request->all());
        return redirect()->route('schemes.index')->with('success','Scheme of Work created sucessfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SchemeOfWork $scheme)
    {
        return view('schemes.show',compact('scheme'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchemeOfWork $scheme)
    {
        return view('schemes.edit',compact('scheme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchemeOfWork $scheme)
    {
        $request->validate([
'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'subject' => 'required',

        ]);
        $scheme->update($request->all());
        return redirect()->route('schems.index')->with('success','Scheme of Work updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchemeOfWork $scheme)
    {
        $scheme->delete();
        return redirect()->route('schemes.index')->with('success','Scheme of Work deleted successfully');
    }
}
