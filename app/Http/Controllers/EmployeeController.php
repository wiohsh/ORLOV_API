<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Employee::all();
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
        $event = New Employee;

        $event->naming = $request->naming;
        $event->name = $request->name;
        $event->post = $request->post;
        $event->gender_id = $request->gender_id;
        $event->salary = $request->salary;
        $event->surname = $request->surname;
        $event->patronymic = $request->patronymic;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = Employee::find($request->id);

        $event->naming = $request->naming;
        $event->name = $request->name;
        $event->post = $request->post;
        $event->gender_id = $request->gender_id;
        $event->salary = $request->salary;
        $event->surname = $request->surname;
        $event->patronymic = $request->patronymic;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Employee::destroy($id);
        return true;
    }
}
