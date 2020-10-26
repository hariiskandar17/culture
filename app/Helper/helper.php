<?php

use App\Comment;
use App\Deskripsi;
use Illuminate\Support\Facades\DB;

// Ini id nya manual dari database bisi poho
// bisi si raja api wilayah na update
function Prov($id)
{
    $hasil = DB::table('provs')->where('id_prov', $id)->first();
    return $hasil->name;
}

function Kab($id, $kab)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://x.rajaapi.com/poe",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    // curl_close($curl);
    $token = json_decode($response, true);

    // $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://x.rajaapi.com/MeP7c5ne" . $token['token'] . "/m/wilayah/kabupaten?idpropinsi=$id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    $hasil = json_decode($response, true);

    foreach ($hasil['data'] as $hs) {
        if ($kab == $hs['id']) {
            $result = $hs['name'];
        }
    }
    return $result;
}

function Kec($id, $kab)
{
    $int = (int)$kab;
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://x.rajaapi.com/poe",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    // curl_close($curl);
    $token = json_decode($response, true);

    // $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://x.rajaapi.com/MeP7c5ne" . $token['token'] . "/m/wilayah/kecamatan?idkabupaten=" . $id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    $hasil = json_decode($response, true);

    foreach ($hasil['data'] as $hs) {
        if ($int == $hs['id']) {
            $result = $hs['name'];
        }
    }
    return $result;
}

function Bisa($id)
{
  $data = Deskripsi::where('id_lokasi',$id)->get();
  return $data;
}
