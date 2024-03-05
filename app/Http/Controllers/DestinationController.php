<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10; 
        $currentPage = $request->page ?? 1; 
        $offset = ($currentPage - 1) * $perPage; 
        
        $destination = Destination::offset($offset)->limit($perPage)->get();
        $totalPages = ceil(Destination::count() / $perPage);
        return view('destination.index', ['destinations' => $destination, 'currentPage' => $currentPage, 'totalPages' => $totalPages]);
    }

    public function create()
    {
        return view('destination.create');
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
            'edu_image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        $destination = new Destination();

        $destination->category = $request->category;
        $destination->country = $request->country;
        $destination->about = $request->about;
        $destination->why_study = $request->why_study;
        $destination->required_docs = $request->required_docs;
        $destination->process = $request->process;
        $destination->universities = $request->universities;
        if ($request->hasFile('edu_image')) {
            $edu_imageFile = $request->file('edu_image');
            $edu_imagePath = time() . '_' . $edu_imageFile->getClientOriginalName();
            $edu_imageFile->move(public_path('edu_images'), $edu_imagePath);
            $destination->edu_image = 'edu_images/' . $edu_imagePath;
        }
        if ($destination->save()) {
            return redirect()->route('destination.create');
        }
    }
    public function edit($id)
    {

        if ($destinations = Destination::find($id)) {

            return view('destination.edit', ['destination' => $destinations]);
        }
    }
    public function update(Request $request, $id)
      {
        $request->validate([
            'category' => 'required',
            'country' => 'required',
            'about' => 'required',
            'why_study' => 'required',
            'required_docs' => 'required',
            'process' => 'required',
            'universities' => 'required',
            'edu_image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        $destination = Destination::find($id);
        $destination->category = $request->category;
        $destination->country = $request->country;
        $destination->about = $request->about;
        $destination->why_study = $request->why_study;
        $destination->required_docs = $request->required_docs;
        $destination->process = $request->process;
        $destination->universities = $request->universities;
        if ($request->hasFile('edu_image')) {
            $edu_imageFile = $request->file('edu_image');
            $edu_imagePath = time() . '_' . $edu_imageFile->getClientOriginalName();
            $edu_imageFile->move(public_path('edu_images'), $edu_imagePath);
            if ($destination->edu_image) {
                $oldedu_imagePath = public_path($destination->edu_image);
                if (file_exists($oldedu_imagePath)) {
                    unlink($oldedu_imagePath);
                }
            }
            $destination->edu_image = 'edu_images/' . $edu_imagePath;
        }
        if ($destination->save()) {
            return redirect()->route('destination.create');
        }
    }
}
