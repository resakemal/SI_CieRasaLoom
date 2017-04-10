<?php

namespace CieRasaLoom;

use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model
{
    protected $table = 'pemasok';

    public $primarykey = pemasok_id;

    public $timestamps = false;

    public function daftarpesanan() {
		return $this->hasMany('App\Pesanan');
	}
}
