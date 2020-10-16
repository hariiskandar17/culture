<?php

namespace App\Http\Controllers;

use App\Lokasi;
use App\TypePlace;
use DataTables;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.lokasi.lokasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $kategori = TypePlace::get();
      $model = new Lokasi();
      return view('admin.lokasi.form')
      ->with(compact('model'))
      ->with(compact('kategori'));
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
          'name' => 'required',
          'alamat' => 'required',
          'kategori' => 'required',
          'provinsi' => 'required',
          'kabupaten' => 'required',
          'kecamatan' => 'required',
          'latitude' => 'required',
          'longitude' => 'required',
          'deskripsi' => 'required',

      ]);

      $model = Lokasi::create($request->all());
      return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $model = Lokasi::findOrFail($id);
      return view('admin.lokasi.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $kategori = TypePlace::get();
      $model = Lokasi::findOrFail($id);
      return view('admin.lokasi.form', compact('model'),compact('kategori'));
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
        'name' => 'required',
        'alamat' => 'required',
        'kategori' => 'required',
        'provinsi' => 'required',
        'kabupaten' => 'required',
        'kecamatan' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
        'deskripsi' => 'required',
      ]);

      $model = Lokasi::findOrFail($id);

      $model->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $model = Lokasi::findOrFail($id);
      $model->delete();
    }
    public function dataTable()
    {
        $model = Lokasi::query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layoutadmin._action', [
                    'model' => $model,
                    'url_show' => route('lokasi.show', $model->id),
                    'url_edit' => route('lokasi.edit', $model->id),
                    'url_destroy' => route('lokasi.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
