<?php

namespace CieRasaLoom;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';

    public $primaryKey = 'nama_barang';

    public $timestamps = false;

    public function pesanan() {
		return $this->belongsTo('App\Pesanan');
	}
}
