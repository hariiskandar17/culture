<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Replice;
use App\Lokasi;
use App\TypePlace;
use App\Deskripsi;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        return view('home.map');
        // INSERT INTO `site_places` (`id`, `type_id`, `creator_id`, `name`, `addres`, `provinsi`, `kabupaten`, `id_kecamatan`, `id_kelurahan`, `latitude`, `longitude`, `deskripsi`, `created_at`, `updated_at`) VALUES (NULL, '1', '1', 'Gedung Sate', 'Bandung', '32', '3273', '3204010', '3204010001', '-6.895264', '107.616375', 'Lorem Ipsum', current_timestamp(), current_timestamp())
    }

    public function v2()
    {
        return view('home.v2');
        // INSERT INTO `site_places` (`id`, `type_id`, `creator_id`, `name`, `addres`, `provinsi`, `kabupaten`, `id_kecamatan`, `id_kelurahan`, `latitude`, `longitude`, `deskripsi`, `created_at`, `updated_at`) VALUES (NULL, '1', '1', 'Gedung Sate', 'Bandung', '32', '3273', '3204010', '3204010001', '-6.895264', '107.616375', 'Lorem Ipsum', current_timestamp(), current_timestamp())
    }

    public function mapData(Request $request)
    {
        $data = Lokasi::with('type', 'deskripsi')->get();
        return response()->json($data);
    }

    public function iconMap()
    {
        $data = TypePlace::get();
        return response()->json($data);
    }

    public function katData(Request $request)
    {
        $kat = $request->kat;
        $prov = $request->prov;
        if ($kat == 0) {
            $data = Lokasi::with('type', 'deskripsi')->get();
        } else {
            $data = Lokasi::with('type', 'deskripsi')->where('kat', $kat)->get();
        }
        return response()->json($data);
    }

    public function provData(Request $request)
    {
        $provinsi = $request->provinsi;
        $kat = $request->kat;
        if ($provinsi) {
            $data = Lokasi::with('type', 'deskripsi')->where([
                ['provinsi', $provinsi],
                ['kat', $kat]
            ])->get();
        } else {
            $data = Lokasi::with('type', 'deskripsi')->get();
        }
        return response()->json($data);
    }

    public function kabData(Request $request)
    {
        $kat = $request->kat;
        $provinsi = $request->provinsi;
        $kabupaten = $request->kabupaten;
        $data = Lokasi::with('type', 'deskripsi')->where([
            ['provinsi', $provinsi],
            ['kabupaten', $kabupaten],
            ['kat', $kat]
        ])->get();
        return response()->json($data);
    }
    public function kecData(Request $request)
    {
        $kat = $request->kat;
        $provinsi = $request->provinsi;
        $kabupaten = $request->kabupaten;
        $kecamatan = $request->kecamatan;
        $data = Lokasi::with('type', 'deskripsi')->where([
            ['provinsi', $provinsi],
            ['kabupaten', $kabupaten],
            ['kecamatan', $kecamatan],
            ['kat', $kat]
        ])->get();
        return response()->json($data);
    }
}
