<?php

namespace App\Http\Controllers;

use App\Models\Genders;
use Illuminate\Http\Request;

class GendersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Genders::all();
        return $events;
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
        $event = New Genders;

        $event->gender_name = $request->gender_name;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(Gender $gender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gender $gender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = Genders::find($request->id);

        $event->gender_name = $request->gender_name;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gender $gender)
    {
        Genders::destroy($id);
        return true;
    }
}
