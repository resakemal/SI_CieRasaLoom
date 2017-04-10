<?php

namespace CieRasaLoom;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    public $primaryKey = 'pesanan_id';

    public function setUpdatedAt($value)
	{
	    // Do nothing.
	}

    public function getUpdatedAtColumn() {
	    return null;
	}

	public function pemasok() {
		return $this->belongsTo('App\Pemasok');
	}

	public function barang() {
		return $this->hasMany('App\Barang');
	}
}
