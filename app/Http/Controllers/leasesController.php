<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lease;
use App\Models\Property;
use App\Models\Employee;

class leasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leases = Lease::orderBy('pid', 'desc')->get();
        return view('admin.leases.index', ['leases' => $leases]);
    }

    public function search(Request $request)
    {
        if (isset($_GET['searchText'])) {
            $searchText = $_GET['searchText'];
            $leases = Lease::Where('location', 'LIKE', '%' . $searchText . '%');
            return view('admin.leases.index', ['leases' => $leases]);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $leases = Lease::all();
        $employees = Employee::all();
        $properties = Property::all();

        return view('admin.leases.add-edit', [
            'leases' => $leases,
            'employees' => $employees,
            'properties' => $properties
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eid = Employee::where('first_name', 'LIKE', $request->eid)->pluck('eid')->first();
        // $pid = Property::where('pid','LIKE',$request->pid)->pluck('pid')->first();
        // $pid = explode("-",$request->pid);
        $l = new Lease;
        $l->eid = $eid;
        $l->pid = $request->pid;
        $l->duration = $request->duration;
        $l->lease_start = $request->lease_start;
        $l->lease_expire = $request->lease_expire;
        $l->rent = $request->rent;
        $l->description = $request->description;
        $l->save();
        return redirect('leases/create');
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
    public function edit($lid)
    {
        $leases = Lease::find($lid);
        $employees = Employee::all();
        $properties = Property::all();

        // $properties = Property::find($leases->pid);

        // $locations = Location::all();
        // return view('admin.leases.edit',['leases'=>$leases]);
        return view('admin.leases.add-edit', [
            'leases' => $leases,
            'employees' => $employees,
            'properties' => $properties
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pid)
    {
        $p = Lease::find($pid);
        $p->location = $request->location;
        $p->price = $request->price;
        $p->area = $request->area;
        $p->type = $request->type;
        $p->baths = $request->baths;
        $p->rooms = $request->rooms;
        $p->stories = $request->stories;
        $p->description = $request->description;
        $p->save();
        return redirect('leases');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Lease::find($id);
        $p->delete();
        return redirect('leases');
    }
}
