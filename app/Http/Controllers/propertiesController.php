<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Property;
use App\Models\Location;

class propertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $properties = Property::with('location')->orderBy('pid', 'desc')->get();
        return view('admin.properties.index', ['properties' => $properties]);
    }

    public function search(Request $request)
    {
        if (isset($_GET['searchText'])) {
            $searchText = $_GET['searchText'];
            $properties = Property::Where('location', 'LIKE', '%' . $searchText . '%');
            return view('admin.properties.index', ['properties' => $properties]);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        return view('admin.properties.add-edit', ['locations' => $locations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new Property;
        $p->location = $request->location;
        $p->price = $request->price;
        $p->area = $request->area;
        $p->type = $request->type;
        $p->baths = $request->baths;
        $p->rooms = $request->rooms;
        $p->stories = $request->stories;
        $p->description = $request->description;
        $p->save();
        return redirect('properties/create');
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
    public function edit($pid)
    {
        $properties = Property::find($pid);
        $locations = Location::all();
        // return view('admin.properties.edit',['properties'=>$properties]);
        return view('admin.properties.add-edit', ['properties' => $properties, 'locations' => $locations]);
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
        $p = Property::find($pid);
        $p->location = $request->location;
        $p->price = $request->price;
        $p->area = $request->area;
        $p->type = $request->type;
        $p->baths = $request->baths;
        $p->rooms = $request->rooms;
        $p->stories = $request->stories;
        $p->description = $request->description;
        $p->save();
        return redirect('properties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Property::find($id);
        $p->delete();
        return redirect('properties');
    }
}
