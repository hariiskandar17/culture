<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{


    public function sejarah(Request $request)
    {
        $val = $request->val;
        // $data = DB::table('lokasis')->where('name', 'LIKE', "%{$val}%")->orWhere('alamat', 'LIKE', "%{$val}%")->get();
        $data = DB::table('lokasis')->where('name', 'LIKE', "%{$val}%")->get();
        $response = array();
        foreach ($data as $dt) {
            $response[] = array("value" => $dt->name, "label" => $dt->name, "ket" => $dt->id);
        }
        return response()->json($response);
    }

    public function komenData(Request $request)
    {
        $data = Comment::where('id', $request->id)->first();
        return response()->json($data);
    }
}
