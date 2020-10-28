<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SitePlace extends Model
{
    protected $fillable = ['type_id', 'creator_id', 'name', 'addres', 'id_provinsi', 'id_kabupaten', 'id_kecamatan',  'latitude', 'longitude'];


    public function type()
    {
        return $this->hasOne(TypePlace::class, 'id', 'type_id');
    }

    public function deskripsi()
    {
        return $this->hasOne(Deskripsi::class,  'id');
    }

    public function detail($id)
    {
        return $this->hasOne(Deskripsi::class, 'id_lokasi', $id);
    }
}