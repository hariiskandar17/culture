<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function artikel(Request $request)
    {
        $val = $request->val;
        $data = DB::table('articles')->where('title', 'LIKE', "%{$val}%")->orWhere('body', 'LIKE', "%{$val}%")->get();
        return $data;
    }
}
