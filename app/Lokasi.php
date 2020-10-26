<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
  protected $fillable = ['lokasi', 'id', 'id_kategori', 'name', 'alamat', 'provinsi', 'kabupaten', 'kecamatan',  'latitude', 'longitude'];


  public function type()
  {
      return $this->hasOne(lokasi::class, 'id', 'type_id');
  }

  public function deskripsi()
    {
        return $this->hasOne(Deskripsi::class, 'id_lokasi', 'id');
    }

    public function detail($id)
    {
        return $this->hasOne(Deskripsi::class, 'id_lokasi', $id);
    }
}
