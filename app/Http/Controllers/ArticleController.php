<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Article::latest()->paginate(6);
        return view('article', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = $request->body;
        // domdocument() => mengenerate objek dom php
        $dom = new \domdocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');

        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name = '/' . time()  . $k . '.png';
            $path = public_path('image\img-content') . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('class', 'img-fluid');
            $img->setAttribute('src', asset('image/img-content/') . $image_name);
        }
        $content = $dom->savehtml();
        $data = request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $data['body'] = $content;
        $data['slug'] = \Str::slug($request->title);
        $data = Auth::user()->articles()->create($data);
        $article = Article::get();
        return redirect(route('article.index', compact('article')));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {

        $content = $request->body;
        $dom = new \domdocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');

        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name = '/' . time()  . $k . '.png';
            $path = public_path('image\img-content') . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('class', 'img-fluid');
            $img->setAttribute('src', asset('image/img-content/') . $image_name);
        }
        $content = $dom->savehtml();

        $data = request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $data['slug'] = \Str::slug($request->title);
        $data['body'] = $content;
        $article->update($data);
        return redirect(route('article.show', compact('article')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('article.index', compact('article')));
    }
}
