<?php

namespace App\Http\Controllers;

use App\Artikel;
use DataTables;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('admin.artikel.artikel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $model = new Artikel();
      return view('admin.artikel.form', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = request()->validate([
          'title' => 'required|max:255',
          // 'slug' => 'required|max:255',
          'status' => 'required',
          'body' => 'required'
      ]);
      // $data['slug'] = \Str::slug($request->title);
      $model = Artikel::create($data);
      // dd($model);
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
      $model = Artikel::findOrFail($id);
      return view('admin.artikel.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $model = Artikel::findOrFail($id);
      return view('admin.artikel.form', compact('model'));
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
        'title' => 'required|max:255',
        // 'slug' => 'required',
        'status' => 'required',
        'body' => 'required'
      ]);

      $model = Artikel::findOrFail($id);

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
      $model = Artikel::findOrFail($id);
      $model->delete();
    }
    public function dataTable()
    {
        $model = Artikel::query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layoutadmin._action', [
                    'model' => $model,
                    'url_show' => route('artikel.show', $model->id),
                    'url_edit' => route('artikel.edit', $model->id),
                    'url_destroy' => route('artikel.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
