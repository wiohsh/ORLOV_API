<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;

class StoragesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Storage::all();
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
        $event = New Storage;

        $event->nameing = $request->nameing;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(Storage $storage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Storage $storage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Storage $storage)
    {
        $event = Storage::find($request->id);

        $event->nameing = $request->nameing;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Storage $storage)
    {
        Storage::destroy($id);
        return true;
    }
}
