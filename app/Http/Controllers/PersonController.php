<?php

namespace App\Http\Controllers;

use App\person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Validator;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = person::get();
        return view('q2.index')->with('people', $people);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('q2.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new person();
        $person->name = $request->name;
        $person->email = $request->email;
        $person->address = $request->address;
        $person->save(); 

        Session::flash('success', 'Successfully added');
        return redirect('/q2');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = person::find($id);
        return view('q2.edit')->with('person', $person);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $person = person::find($id);
        $person->name = $request->name;
        $person->email = $request->email;
        $person->address = $request->address;
        $person->save();  

        Session::flash('success', 'Successfully updated');
        return redirect('/q2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = person::find($id);
        $person->delete(); 

        Session::flash('success', 'Successfully deleted');
        return redirect('/q2');
    }
}
