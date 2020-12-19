<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Admin::all();
        return view("Admin.index")->with("employees",$employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.addEmployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Admin();
        $employee->username = $request->username;
        $employee->password = $request->password;
        $employee->phone = $request->phone;
        $employee->name = $request->name;
        if($employee->save()){
            return redirect()->route('admin.index');
        }
        else{
            return back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $employee = Admin::where('id',$id)->first();
        return view('admin.editEmployee',$employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    public function updateEmployee(Request $request,int $id)
    {
        $employee = Admin::find($id);
        $employee->username = $request->username;
        $employee->password = $request->password;
        $employee->phone = $request->phone;
        $employee->name = $request->name;
        if($employee->save()){
            return redirect()->route('admin.index');
        }
        else{
            return back();
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        
    }

    public function deleteEmployee(int $id)
    {
        $employee = Admin::find($id);
        $employee->delete();
        return redirect()->route('admin.index');
    }
}
