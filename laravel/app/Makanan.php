<?php

namespace CieRasaLoom;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $table = 'makanan';

    public $primaryKey = 'makanan_id';

    public $timestamps = false;
}
