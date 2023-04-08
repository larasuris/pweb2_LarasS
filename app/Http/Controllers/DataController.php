<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = pemesanan::all();
        return view('table', [
            'table' =>$table
        ]);
    }
    public function simpan(request $REQUEST)
    {
        $pemesanan=pemesanan::create([
            'nama_customer' =>$REQUEST->nama_customer,
            'no_tlp'=>$REQUEST->no_tlp,
            'alamat'=>$REQUEST->alamat,
            'tgl_pesanan'=>$REQUEST->tgl_pesanan,
            'id_produk'=>$REQUEST->id_produk,
            'nama_produk'=>$REQUEST->nama_produk,
            'harga_perproduk'=>$REQUEST->harga_perproduk,
            'jumlah_produk'=>$REQUEST->jumlah_produk,
            'total_harga'=>$REQUEST->total_harga,
        ]);
       
            return redirect('tabel');
        }
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}



