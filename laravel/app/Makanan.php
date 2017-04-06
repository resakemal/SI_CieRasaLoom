<?php

namespace CieRasaLoom;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $table = 'makanan';

    public $primarykey = makanan_id;

    public $timestamps = false;
}
