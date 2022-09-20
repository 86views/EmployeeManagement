<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StateStoreRequest;
use App\Models\Country;
use App\Models\State;

class StateController extends Controller
{
    public function index()
    {
        $states = State::all();
        return view('states.index', compact('states'));
    }

    public function create()
    {  
        $countries = Country::all();
        return view('states.create', compact('countries'));
    }

    public function store(StateStoreRequest $request )
    {
         State::create($request->validated());

         return redirect()->route('states.index')->with('success', 'States Added Succesfully');
    
    }

    public function edit(State $state)
    {
        $countries = Country::all();

        return view('states.edit', compact('state', 'countries'));
    }

    public function update(StateStoreRequest $request, State $state)
    {
        $state->update($request->validated());

        return redirect()->route('states.index')->with('success', 'States Updated Succesfully');
    }

    public function destroy(State $state)
    {
       $state->delete();

       return redirect()->route('states.index')->with('success', 'States Deleted Succesfully');
    }
}
