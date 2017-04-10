<?php

namespace CieRasaLoom\Http\Controllers;

use Illuminate\Http\Request;
use CieRasaLoom\Pemasok;
use CieRasaLoom\Pesanan;

class PesananController extends Controller
{
    public function create(){
    	$inputs = Pemasok::pluck('pemasok_id','nama_pemasok');
    	return view('addpesanan', compact('inputs',$inputs));
    }

    public function daftar(){
        $inputs = Pesanan::where('pemasok_id','2')->get();
        return view('daftarpesanan', compact('inputs',$inputs));
    }

    public function add(Request $request){
    	$pesanan = new Pesanan;

	    $pesanan->pemasok_id = '2';
	    $pesanan->status = '1';
	    $pesanan->save();

        $request->session()->flash('alert-success', 'Pesanan was successful added!');

	    return view('daftarpesanan');
    }

    public function status(){
        $input = Pesanan::where('pesanan_id','3')->first();
        $selected = Pesanan::where('pesanan_id','3')->first()->status;
        return view('editstatus', compact('input','selected'));
    }

    public function edit(Request $request){
        $pesanan = Pesanan::where('pesanan_id','3')->first();
        $pesanan->status = $request->status;

        $pesanan->save();
        return view('home');
    }
}
