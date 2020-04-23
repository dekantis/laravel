<?php


namespace App\Http\Controllers\Cms\Countries;


use App\Http\Controllers\Controller;

use App\Models\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }
    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $city = Country::find($id);
        $city->name = $request->get('name');
        $city->continent_name = $request->get('continent_name');
        $city->save();

        return redirect('/countries')->with('success', 'Страна обновлена!');
    }
}
