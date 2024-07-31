<?php

namespace App\Http\Controllers;

use App\Models\Commerce;
use Illuminate\Http\Request;

class CommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $commerces = Commerce::all();
        // return view('commerces.index', compact('commerces'));
        return view('pages.wirausaha.index', compact('commerces'));
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

        $commerce = Commerce::findOrFail($id);

        return view('pages.wirausaha.show', compact('commerce'));
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
