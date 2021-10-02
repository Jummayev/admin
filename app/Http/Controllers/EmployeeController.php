<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', ['employees' => $employees]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|max:255',
            'email' => 'required',
            'tell' =>   'required|max:9',
            'address' => 'required',
            'category' => 'required',
            'degree' => 'required',
            'pasport_seriya' => 'required|max:9',
            'description' => 'required',
            'pasport_photo' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $path = $request->file('pasport_photo')->store('pasport_photo', 'public');

        $employee = new Employee;
        $employee->full_name = $request->full_name;
        $employee->email = $request->email;
        $employee->phone = $request->tell;
        $employee->address = $request->address;
        $employee->category = $request->category;
        $employee->degree = $request->degree;
        $employee->pasport_seriya = $request->pasport_seriya;
        $employee->description = $request->description;
        $employee->pasport_photo = $path;
        $employee->save();
        return redirect()->route('employee.index')->with('success', 'Employee has been created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employee.show', ['employee' => $employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'full_name' => 'required|max:255',
            'email' => 'required',
            'tell' =>   'required|max:9',
            'address' => 'required',
            'category' => 'required',
            'degree' => 'required',
            'pasport_seriya' => 'required|max:9',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('images', 'public');
            $employee->image = $path;
        }

        $employee->full_name = $request->full_name;
        $employee->email = $request->email;
        $employee->phone = $request->tell;
        $employee->address = $request->address;
        $employee->category = $request->category;
        $employee->degree = $request->degree;
        $employee->pasport_seriya = $request->pasport_seriya;
        $employee->description = $request->description;
        $employee->save();
        return redirect()->route('employee.index')->with('success', 'Employee has been created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('status-delete', 'employee deleted successfully!');
    }
}
