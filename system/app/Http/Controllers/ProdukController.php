<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
    function index(){
        $data['list_products'] = Produk::all();
        return view('produk.index', $data);
    }
    function create(){
        return view('produk.create');
    }
    function store(){
        $produk = new Produk;
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('pc')->with('success', 'Data Berhasil ditambahkan');
    }
    function show($produk){
        $data['produk'] = Produk::find($produk);
        return view('produk.show', $data);
    }
    function edit(Produk $produk){
        $data['produk'] = $produk;
        return view('produk.edit', $data);
    }
    function update(Produk $produk){
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('pc')->with('success', 'Data Berhasil diubah');
    }
    function destroy(Produk $produk){
        $produk->delete();

        return redirect('pc')->with('danger', 'Data Berhasil dihapus');
    }
}