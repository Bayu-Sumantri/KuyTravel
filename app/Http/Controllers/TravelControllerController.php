<?php

namespace App\Http\Controllers;

use App\Models\Travel_packages;
use App\Models\TravelController;
use Illuminate\Http\Request;

class TravelControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travel = Travel_packages::orderBy('title', 'asc')->simplePaginate(3);
        $total_user = Travel_packages::count();
        return view('admin_master.admin_sup.travel_creaate', compact('travel', 'total_user'));
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
