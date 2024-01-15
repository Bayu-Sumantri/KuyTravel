<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel_packages;
use App\Models\TravelController;
use RealRashid\SweetAlert\Facades\Alert;

class TravelControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travel = Travel_packages::orderBy('title', 'asc')->simplePaginate(3);
        $total_user = Travel_packages::count();
        return view('admin_master.admin_sup.travel_create.list_travel', compact('travel', 'total_user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_master.admin_sup.travel_creaate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // dd ($request);
                // dd ($request ->file('thumbnail'));
                $data = $request->validate([
                    'title' =>  ['required','string','max:255'],
                    'slug' =>  ['required','string','max:1000'],
                    'thumbnail' => ['required', 'array', 'min:1'],
                    'thumbnail.*' => ['file', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
                    'location' =>  ['required','max:255'],
                    'about' =>  ['required','max:255'],
                    'featured_event' =>  ['required','max:255'],
                    'language' =>  ['required','max:255'],
                    'foods' =>  ['required','max:255'],
                    'departure_date' =>  ['required','max:255'],
                    'duration' =>  ['required','max:255'],
                    'type' =>  ['required','max:255'],
                    'price' =>  ['required','max:255'],
                ]);


               $data = Travel_packages::create([
                    "title"     => $request->title,
                    "slug"     => $request->slug,
                    "location"     => $request->location,
                    "about"     => $request->about,
                    "featured_event"     => $request->featured_event,
                    "language"     => $request->language,
                    "foods"     => $request->foods,
                    "departure_date"     => $request->departure_date,
                    "duration"     => $request->duration,
                    "type"     => $request->type,
                    "price"     => $request->price,
                ]);

                $images = $request->file('thumbnail');
                foreach ($images as $image) {
                    $imagePath = $image->store('thumbnail');

                    // dd($imagePath);

                    $data->images()->create([
                        'thumbnail' => $imagePath,
                    ]);
                }

                Alert::success('Berhasil', 'Success Make a Travel Packages');

                return redirect(route('Travel.index'))->with('success', "successfully uploaded your anime");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
