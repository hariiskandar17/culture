<?php

namespace App\Http\Controllers;

use App\culture;
use DataTables;
use Illuminate\Http\Request;

class LokasiBudayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.culture.culture');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $model = new Culture();
      return view('admin.culture.form', compact('model'));
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
          'name' => 'required|string|max:255',
          'alamat' => 'required|string|max:255',
          'latitude' => 'required|string|max:255',
          'longitude' => 'required|string|max:255',
          'deskti' => 'required|string|max:255',
      ]);

      $model = Culture::create($request->all());
      return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\culture  $culture
     * @return \Illuminate\Http\Response
     */
    public function show(culture $culture)
    {
        $model = Culture::findOrFail($id);
        return view('admin.culture.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\culture  $culture
     * @return \Illuminate\Http\Response
     */
    public function edit(culture $culture)
    {
    $model = Culture::findOrFail($id);
     return view('admin.culture.form', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\culture  $culture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, culture $culture)
    {
      $this->validate($request, [
        'name' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'latitude' => 'required|string|max:255',
        'longitude' => 'required|string|max:255',
        'deskti' => 'required|string|max:255' . $id
      ]);

      $model = Culture::findOrFail($id);

      $model->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\culture  $culture
     * @return \Illuminate\Http\Response
     */
    public function destroy(culture $culture)
    {
      $model = Culture::findOrFail($id);
      $model->delete();
    }
    public function dataTable()
    {
        $model = culture::query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('admin.layoutadmin._action', [
                    'model' => $model,
                    'url_show' => route('culture.show', $model->id),
                    'url_edit' => route('culture.edit', $model->id),
                    'url_destroy' => route('culture.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
