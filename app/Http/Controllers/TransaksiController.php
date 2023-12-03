<?php

namespace App\Http\Controllers;

use App\Models\obat;
use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function tampiltransaksi()
    {
        $data = obat::all();
        return view('tampil_beli', compact('data'));
    }

    public function addtocart(Request $request, $id)
    {
        $obat = obat::find($id);

        $jumlah = $request->jumlah;
        $harga = $obat->harga;
        $total_harga = $jumlah * $harga;

        $data = transaksi::create([
            'nama_pembeli' => $request->nama_pembeli,
            'alamat' => $request->alamat,
            'noHP' => $request->noHP,
            'jumlah' => $request->jumlah,
            'total_harga' => $total_harga,
            'id_obat' => $request->id,
        ]);
        return redirect('/tampilt');
    }

    public function beli($id)
    {
        $data = obat::find($id);
        return view('beli', compact('data'));
    }

    public function riwayat()
    {
        $data = transaksi::all();
        return view('riwayat', compact('data'));
    }

    function multi($id){
        {
            $data = transaksi::find($id);
            $data->delete();
            return redirect('/riwayat');
        } 
    }
}
