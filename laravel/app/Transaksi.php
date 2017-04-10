<?php

namespace CieRasaLoom;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    public $primaryKey = 'transaksi_id';

    public function setUpdatedAt($value)
	{
	    // Do nothing.
	}

    public function getUpdatedAtColumn() {
	    return null;
	}

	public function makanan() {
		return $this->hasMany('App\JumlahMakanan');
	}
}
