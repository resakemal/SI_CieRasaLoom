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

	    $transaksi->total_harga = 0;
	    $transaksi->save();

	    $jumlah = new JumlahMakanan;
	    $id = Transaksi::latest()->first()->transaksi_id;
	    $jumlah->transaksi_id = $id;
	    $jumlah->makanan_id = $request->makanan_id;
	    $jumlah->jumlah_makanan = $request->jumlah;

	    $jumlah->save();

	    return view('addtransaksi');
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
