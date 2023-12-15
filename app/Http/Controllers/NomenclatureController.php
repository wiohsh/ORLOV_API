<?php

namespace App\Http\Controllers;

use App\Models\Nomenclature;
use Illuminate\Http\Request;

class NomenclatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Nomenclature::all();
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
        $event = New Nomenclature;

        $event->nameing = $request->nameing;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(Nomenclature $nomenclature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nomenclature $nomenclature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = Nomenclature::find($request->id);

        $event->nameing = $request->nameing;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nomenclature $nomenclature)
    {
        Nomenclature::destroy($id);
        return true;
    }
}
