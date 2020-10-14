<?php

namespace App\Http\Controllers;

use App\SitePlace;
use App\TypePlace;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        return view('home.map');
        // INSERT INTO `site_places` (`id`, `type_id`, `creator_id`, `name`, `addres`, `id_provinsi`, `id_kabupaten`, `id_kecamatan`, `id_kelurahan`, `latitude`, `longitude`, `deskripsi`, `created_at`, `updated_at`) VALUES (NULL, '1', '1', 'Gedung Sate', 'Bandung', '32', '3273', '3204010', '3204010001', '-6.895264', '107.616375', 'Lorem Ipsum', current_timestamp(), current_timestamp())
    }

    public function mapData(Request $request)
    {
        $provinsi = $request->provinsi;
        $kabupaten = $request->kabupaten;
        $kecamatan = $request->kecamatan;

        if ($provinsi) {
            $data = SitePlace::with('type')->where('id_provinsi', $provinsi)->get();
        } else {
            $data = SitePlace::with('type')->get();
        }
        return response()->json($data);
    }

    public function iconMap()
    {
        $data = TypePlace::get();
        return response()->json($data);
    }
}
