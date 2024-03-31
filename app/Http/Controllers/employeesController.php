<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;

use App\Models\Employee;

class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('eid', 'desc')->get();
        return view('admin.employees.index',['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employees.add-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $e = new Employee;

        if($request->hasfile('image_path')){
            $file = $request->file('image_path');
            $ext = $file->getClientOriginalExtension();
            $filename = time().".".$ext;
            $file->move('images/employees/',$filename);
            $e->image_path = $filename;
        }
        // $e->image_path = time().".".$request->file('image_path')->getClientOriginalExtension();
        $e->first_name = $request->first_name;
        $e->last_name = $request->last_name;
        $e->dob = $request->dob;
        $e->age = $request->age;
        $e->gender = $request->gender;
        $e->cnic = $request->cnic;
        $e->hire_date = $request->hire_date;
        $e->contact_no = $request->contact_no;
        $e->address = $request->address;
        $e->save();
        return redirect('employees/create')->with('success','Hoorey');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($eid)
    {
        $employees = Employee::find($eid);
        return view('admin.employees.add-edit',['employees'=>$employees]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $eid)
    {
        $e=Employee::find($eid);


        if($request->hasfile('image_path')){

            // $image_name = $e->image_path;
            // File::delete($image_name);

            $path = public_path().'/images/employees/'.$e->image_path;
            unlink($path);

            $file = $request->file('image_path');
            $ext = $file->getClientOriginalExtension();
            $filename = time().".".$ext;
            $file->move('images/employees/',$filename);
            $e->image_path = $filename;
        }

        $e->first_name = $request->first_name;
        $e->last_name = $request->last_name;
        $e->dob = $request->dob;
        $e->gender = $request->gender;
        $e->contact_no = $request->contact_no;
        $e->address = $request->address;
        $e->save();
        return redirect('employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $e = Employee::find($id);
        if(isset($e->image_path)){
            $path = public_path().'/images/employees/'.$e->image_path;
            unlink($path);
        }
        
        $e->delete();
        return redirect('employees');
    }
}
