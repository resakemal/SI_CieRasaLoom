<?php

namespace CieRasaLoom\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use CieRasaLoom\User;
use CieRasaLoom\Pemasok;
use CieRasaLoom\Pesanan;

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

	    $pesanan->pemasok_id = '2';
	    $pesanan->status = '1';
	    $pesanan->save();

        $request->session()->flash('alert-success', 'Pesanan was successful added!');

	    return redirect()->action('PesananController@daftar');
    }

    public function status(){
        $userid = Auth::id();
        $input = Pesanan::where('pesanan_id',$userid)->first();
        $selected = Pesanan::where('pesanan_id',$userid)->first()->status;
        return view('editstatus', compact('input','selected'));
    }

    public function edit(Request $request){
        $userid = Auth::id();
        $pesanan = Pesanan::where('pesanan_id',$userid)->first();
        $pesanan->status = $request->status;

        $pesanan->save();
        return view('home');
    }
}
