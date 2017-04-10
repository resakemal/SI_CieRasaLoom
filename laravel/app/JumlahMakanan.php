<?php

namespace CieRasaLoom;

use Illuminate\Database\Eloquent\Model;

class JumlahMakanan extends Model
{
    protected $table = 'jumlah_makanan';

    public $primaryKey = 'transaksi_id';

    public $timestamps = false;

    public function transaksi() {
		return $this->belongsTo('App\Transaksi');
	}

	public function infomakanan() {
		return $this->belongsTo('App\Makanan');
	}
}
