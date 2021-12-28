<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function frontend()
    {
        return view('pages/tampilan/beranda');
    }

    public function frontendtransaksi()
    {
        return view('pages/tampilan/mulaitransaksi');
    }

    public function index()
    {
        return view('pages.admin.dashboard');
    }
    public function daftar()
    {
        $tb_transaksi = Transaksi::all();
        return view('pages.admin.daftar-transaksi', ['tb_transaksi' => $tb_transaksi]);
    }

    public function create()
    {
        return view('pages.admin.tambah-transaksi');
    }

    public function store(Request $request)
    {
        $request->validate(
        [
            'nama' => 'required|string|max:225',
            'golongan' => 'required|string',
            'nik' => 'required|numeric',
            'harga' => 'required|numeric',
            'waktu' => 'required|date',
            'status' => 'required|string'
        ],
        [
            'nama.required'=>'Field harus diisi!',
            'golongan.required'=>'Field harus diisi!',
            'nik.required'=>'Field harus diisi',
            'nik.numeric'=>'Field harus berupa angka',
            'harga.required'=>'Field harus diisi',
            'harga.numeric'=>'Field harus berupa angka',
            'status.required'=>'Field harus diisi'
        ]
    );
        Transaksi::create($request->all());
        return redirect(url('daftar-transaksi'))->with('success','Data berhasil diubah');

    }

    public function edit($id)
    {
        $tb_transaksi=transaksi::where(['id' => $id]) ->first();
        return view('pages.admin.edit-transaksi', ['tb_transaksi' => $tb_transaksi]);
    }

    public function update(Request $request, $id)
    {
        $request->validate(
        [
            'nama' => 'required|string|max:225',
            'golongan' => 'required|string',
            'nik' => 'required|numeric',
            'harga' => 'required|numeric',
            'waktu' => 'required|date',
            'status' => 'required|string'
        ],
        [
            'nama.required'=>'Field harus diisi!',
            'golongan.required'=>'Field harus diisi!',
            'nik.required'=>'Field harus diisi',
            'nik.numeric'=>'Field harus berupa angka',
            'harga.required'=>'Field harus diisi',
            'harga.numeric'=>'Field harus berupa angka',
            'status.required'=>'Field harus diisi'
        ]
    );
        $tb_transaksi=transaksi::where(['id' => $id])->first();
        $tb_transaksi->update($request->all());
        return redirect(url('daftar-transaksi'));

    }

    public function destroy($id)
    {
        transaksi::where(['id'=>$id])->delete();
        return redirect(url('daftar-transaksi'));
    }
}
