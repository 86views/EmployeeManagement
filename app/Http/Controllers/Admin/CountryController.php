<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryStoreRequest;
use App\Http\Requests\CountryUpdateRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request)
    {

        $countries = Country::all();
        if ($request->has('search')) {
            $countries = Country::where('code', 'like', "%{$request->search}%")
                ->orWhere('name', 'like', "%{$request->search}%")->get();
        }
        return view('countries.index', compact('countries'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(CountryStoreRequest $request)
    {
        // Country::create($request->validated());
        $request->validated();
        Country::create([
            'code' => $request->input('code'),
            'name' => $request->input('name'),

        ]);

        return redirect()->route('countries.index')->with('success', 'Country Added Succesfully');
    }

    public function edit(Country $country)
    {
        // $country = Country::find($id);
        return view('countries.edit', compact('country'));
    }

    public function update(CountryUpdateRequest $request, Country $country)
    {

        $country->update($request->validated());

        // $request->validated();

        // $country = Country::where('id', $id)
        // ->update([
        //     'code'   => $request->input('code'),
        //     'name'  => $request->input('name'),

        //  ]);

        return redirect()->route('countries.index')->with('success', 'Country Update Succesfully');
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('countries.index')->with('message', 'Country Deleted Succesfully');
    }

}
