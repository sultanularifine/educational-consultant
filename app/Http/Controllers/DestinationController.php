<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    //
    public function index()
    {
        return view('destination.store');
    }
    public function viewDest(Request $request, $id)
    {
        $search = $request->input('search', '');
    
        if ($search != "") {
            $destinations = Destination::where('country', 'LIKE', "$search%")->get();
        } else {
            $destinations = Destination::where('country', $id)->get();
        }
    
        return view('destination.viewDest', compact('destinations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'country' => 'required',
            'about' => 'required',
            'why_study' => 'required',
            'required_docs' => 'required',
            'process' => 'required',
            'universities' => 'required',

        ]);
        $destination = new Destination();

        $destination->category = $request->category;
        $destination->country = $request->country;
        $destination->about = $request->about;
        $destination->why_study = $request->why_study;
        $destination->required_docs = $request->required_docs;
        $destination->process = $request->process;
        $destination->universities = $request->universities;

        if ($destination->save()) {
            return redirect()->route('destination.index');
        }
    }
}
