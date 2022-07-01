<?php

namespace App\Http\Controllers\Masterdata;

use App\Models\Masterdata\Units as Unit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Unit::all();
        return view('masterdata.unit.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterdata.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'unit_name' => 'required',
            'provinsi_id' => 'required',
            'unit_address' => 'required',
            'gender_id' => 'required',
            'unit_telphone' => 'required',
            'unit_imageskost' => 'required',
            'unit_imagesimb' => 'required',
            'unit_deskripsi' => 'required',
            'unit_lat' => 'required',
            'unit_ing' => 'required',
            'user_id' => 'required'
        ]);

        $data = new Unit();
        $data->unit_name = $request->unit_name;
        $data->provinsi_id    = $request->provinsi_id;
        $data->unit_address  = $request->unit_address;
        $data->gender_id  = $request->gender_id;
        $data->unit_telphone  = $request->unit_telphone;
        $data->unit_imageskost = $request->unit_imageskost;
        $data->unit_imagesimb = $request->unit_imagesimb;
        $data->unit_deskripsi = $request->unit_deskripsi;
        $data->unit_lat = $request->unit_lat;
        $data->unit_ing = $request->unit_ing;
        $data->user_id = $request->user_id;
        $data->save();
        
        return redirect(route('master.unit'))->with('success', 'Data berhasil disimpan');
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
    public function edit($id)
    {
        $data = Unit::find($id);
        return view('masterdata.unit.edit', compact('data'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'unit_name' => 'required',
            'provinsi_id' => 'required',
            'unit_address' => 'required',
            'gender_id' => 'required',
            'unit_telphone' => 'required',
            'unit_imageskost' => 'required',
            'unit_imagesimb' => 'required',
            'unit_deskripsi' => 'required',
            'unit_lat' => 'required',
            'unit_ing' => 'required',
            'user_id' => 'required'
        ]);

        $data = Unit::find($id)->update($request->all());

        return redirect(route('master.unit'))->with('success','Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Unit::find($id);
        $data->delete();

        return redirect(route('master.unit'))->with('success','Data berhasil di hapus');
    }
}
