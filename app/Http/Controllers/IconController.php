<?php

namespace App\Http\Controllers;

use App\Icon;
use DataTables;
use Illuminate\Http\Request;

class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('admin.icon.icon');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $model = new Icon();
      return view('admin.icon.form', compact('model'));
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
          'icon' => 'required|string|max:255',
      ]);

      $model = Icon::create($request->all());
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
        $model = Icon::findOrFail($id);
        return view('admin.icon.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $model = Icon::findOrFail($id);
      return view('admin.icon.form', compact('model'));
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
          'icon' => 'required|string|max:255',
      ]);

      $model = Icon::findOrFail($id);

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
      $model = Icon::findOrFail($id);
      $model->delete();
    }
    public function dataTable()
    {
        $model = Icon::query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layoutadmin._action', [
                    'model' => $model,
                    'url_show' => route('icon.show', $model->id),
                    'url_edit' => route('icon.edit', $model->id),
                    'url_destroy' => route('icon.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}