<?php

namespace App\Http\Controllers\Masterdata;

use App\Models\Masterdata\Owners as Owner;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Owner::all();
        return view('masterdata.owner.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterdata.owner.create');
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
            'owner_name' => 'required',
            'provinsi_id' => 'required',
            'owner_address' => 'required',
            'gender_id' => 'required',
            'owner_telphone' => 'required',
            'owner_imageskost' => 'required',
            'owner_imagesimb' => 'required',
            'owner_deskripsi' => 'required',
            'owner_lat' => 'required',
            'owner_ing' => 'required',
            'user_id' => 'required'
        ]);

        $data = new Owner();
        $data->owner_name = $request->owner_name;
        $data->provinsi_id    = $request->provinsi_id;
        $data->owner_address  = $request->owner_address;
        $data->gender_id  = $request->gender_id;
        $data->owner_telphone  = $request->owner_telphone;
        $data->owner_imageskost = $request->owner_imageskost;
        $data->owner_imagesimb = $request->owner_imagesimb;
        $data->owner_deskripsi = $request->owner_deskripsi;
        $data->owner_lat = $request->owner_lat;
        $data->owner_ing = $request->owner_ing;
        $data->user_id = $request->user_id;
        $data->save();
        
        return redirect(route('master.owner'))->with('success', 'Data berhasil disimpan');
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
        $data = Owner::find($id);
        return view('masterdata.owner.edit', compact('data'));    
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
            'owner_name' => 'required',
            'provinsi_id' => 'required',
            'owner_address' => 'required',
            'gender_id' => 'required',
            'owner_telphone' => 'required',
            'owner_imageskost' => 'required',
            'owner_imagesimb' => 'required',
            'owner_deskripsi' => 'required',
            'owner_lat' => 'required',
            'owner_ing' => 'required',
            'user_id' => 'required'
        ]);

        $data = Owner::find($id)->update($request->all());

        return redirect(route('master.owner'))->with('success','Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Owner::find($id);
        $data->delete();

        return redirect(route('master.owner'))->with('success','Data berhasil di hapus');
    }
}
