<?php

namespace CieRasaLoom\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use CieRasaLoom\User;
use CieRasaLoom\Pemasok;
use CieRasaLoom\Pesanan;
use CieRasaLoom\Barang;

class PesananController extends Controller
{
    public function create(){
    	$inputs = User::where('type','2')->pluck('name','akun_id');
    	return view('addpesanan', compact('inputs',$inputs));
    }

    public function daftar(){
        $userid = Auth::id();
        $inputs = Pesanan::where('pemasok_id',$userid)->get();
        return view('daftarpesanan', compact('inputs',$inputs));
    }

    public function add(Request $request){
    	$pesanan = new Pesanan;

	    $pesanan->pemasok_id = $request->pemasok_id;
	    $pesanan->status = '1';
	    $pesanan->save();

        $barang = new Barang;

        $barang->pesanan_id = Pesanan::latest()->first()->pesanan_id;
        $barang->nama_barang = $request->nama_barang;
        $barang->jumlah_barang = $request->jum_barang;
        $barang->save();

	    return redirect()->action('PesananController@daftar');
    }

    public function status($pesanan_id){
        $userid = Auth::id();
        $input = Pesanan::where('pesanan_id',$pesanan_id)->first();
        $selected = $input->status;
        return view('editstatus', compact('input','selected'));
    }

    public function edit(){
        $id = Input::get('pesanan_id');
        $pesanan = Pesanan::where('pesanan_id',$id)->first();
        $pesanan->status = Input::get('status');
        $pesanan->save();
        return $this->daftar();
    }
}
