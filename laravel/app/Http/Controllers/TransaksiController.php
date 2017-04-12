<?php

namespace CieRasaLoom\Http\Controllers;

use Illuminate\Http\Request;
use CieRasaLoom\Transaksi;
use CieRasaLoom\JumlahMakanan;
use CieRasaLoom\Makanan;

class TransaksiController extends Controller
{
    public function addtransaksi(Request $request){
    	$transaksi = new Transaksi;

	    $transaksi->total_harga = $request->total_harga;
	    $transaksi->save();

	    return view('addtransaksi');
    }

    public function addItem(){
        $makanan = Makanan::where('makanan_id',Input::get('id'))->first();
        return json_encode($makanan);
    }

    public function addmakanan(Request $request) {
    	$makanan = new Makanan;
    	$makanan->nama_makanan = $request->nama_makanan;
    	$makanan->harga = $request->harga;

    	$makanan->save();
    	return view('addtransaksi');
    }

    public function daftar(Request $request) {
    	$inputs = Transaksi::whereDate('created_at',$request->tanggal)->orderBy('created_at')->get();
    	return view('daftartransaksi', compact('inputs',$inputs));
    }
}
