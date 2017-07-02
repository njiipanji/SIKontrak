<?php

namespace SIKontrak\Http\Controllers;

use Illuminate\Http\Request;
use SIKontrak\Kontrak;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kontraks = Kontrak::All();

        return view('home', compact('kontraks'));
    }

    public function tambahData()
    {
        $tipes = ['Barang', 'Jasa'];
        return view('formTambah', compact('tipes'));
    }

    public function simpanData(Request $request)
    {
        $this->validate($request,[
            'kontrakNomor' => 'required',
            'kontrakNama' => 'required',
            'kontrakPihak' => 'required',
            'kontrakTipe' => 'required',
            'kontrakMulai' => 'required',
            'kontrakSelesai' => 'required',
        ]);

        Kontrak::create([
            'kontrak_nomor' => $request->kontrakNomor,
            'kontrak_nama_perjanjian' => $request->kontrakNama,
            'kontrak_nama_pihak' => $request->kontrakPihak,
            'kontrak_tipe' => $request->kontrakTipe,
            'kontrak_mulai' => $request->kontrakMulai,
            'kontrak_selesai' => $request->kontrakSelesai,
            'kontrak_deskripsi' => $request->kontrakDeskripsi,
        ]);

        return redirect('/')->with('alert-success', 'Data kontrak berhasil ditambah / diperbaharui.');
    }

    public function lihatData($id)
    {
        $kontrak = Kontrak::findOrFail($id);

        return view('formEdit', compact('kontrak'));
    }

    public function updateData(Request $request, $id)
    {
        Kontrak::findOrFail($id);

        $this->validate($request,[
            'kontrakNomor' => 'required',
            'kontrakNama' => 'required',
            'kontrakPihak' => 'required',
            'kontrakTipe' => 'required',
            'kontrakMulai' => 'required',
            'kontrakSelesai' => 'required',
        ]);

        Kontrak::find($id)->update([
            'kontrak_nomor' => $request->kontrakNomor,
            'kontrak_nama_perjanjian' => $request->kontrakNama,
            'kontrak_nama_pihak' => $request->kontrakPihak,
            'kontrak_tipe' => $request->kontrakTipe,
            'kontrak_mulai' => $request->kontrakMulai,
            'kontrak_selesai' => $request->kontrakSelesai,
            'kontrak_deskripsi' => $request->kontrakDeskripsi,
        ]);

        return redirect('/')->with('alert-success', 'Data kontrak berhasil diubah.');
    }

    public function hapusData($id)
    {
        Kontrak::findOrFail($id);
        Kontrak::find($id)->delete();

        return redirect('/')->with('alert-success', 'Data kontrak berhasil dihapus.');
    }

    public function perbaharuiKontrak($id)
    {
        $kontrak = Kontrak::findOrFail($id);

        return view('formBaru', compact('kontrak'));
    }
}