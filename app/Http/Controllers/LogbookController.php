<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use Illuminate\Http\Request;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Logbook::all();
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
        $event = New Logbook;

        $event->date = $request->date;
        $event->product_id = $request->product_id;
        $event->worker_id = $request->worker_id;
        $event->amount = $request->amount;
        $event->storage_id = $request->storage_id;
        $event->cost = $request->cost;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(Logbook $logbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logbook $logbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = Logbook::find($request->id);

        $event->date = $request->date;
        $event->product_id = $request->product_id;
        $event->worker_id = $request->worker_id;
        $event->amount = $request->amount;
        $event->storage_id = $request->storage_id;
        $event->cost = $request->cost;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logbook $logbook)
    {
        Logbook::destroy($id);
        return true;
    }
}
