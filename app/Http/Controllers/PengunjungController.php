<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Reservasi;
use App\Models\Status;
use App\Models\Galeri;
use App\Models\Artikel;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengunjung/berandapengunjung');
    }

    public function jenispaket()
    {
        $prm = Promo::all();
        $pkt = Paket::all();
        return view('pengunjung/jenispaketpengunjung', ['prm' => $prm], ['pkt'=>$pkt]);
    }

    public function galeri()
    {
        $data = Galeri::all();
        return view('pengunjung/galeripengunjung', ['data' => $data]);
    }

    public function artikel()
    {
        $data = Artikel::all();
        return view('pengunjung/artikelpengunjung', ['data' => $data]);
    }

    public function beranda()
    {
        return view('pengunjung/berandapengunjunglgn');
    }

    public function jenispaketlgn()
    {
        $prm = Promo::all();
        $pkt = Paket::all();
        return view('pengunjung/jenispaketpengunjunglgn', ['prm' => $prm], ['pkt'=>$pkt]);
    }

    public function galerilgn()
    {
        $data = Galeri::all();
        return view('pengunjung/galeripengunjunglgn', ['data' => $data]);
    }

    public function artikellgn()
    {
        $data = Artikel::all();
        return view('pengunjung/artikelpengunjunglgn', ['data' => $data]);
    }

    public function reservasi()
    {
        $paket = Paket::all(); //mendapatkan data dari tabel paket
        $promo = Promo::all(); //mendapatkan data dari tabel promo
        $status = Status::all(); //mendapatkan data dari tabel status
        return view('pengunjung/reservasi', ['paket' => $paket, 'promo' => $promo, 'status' => $status]);
    }

    public function storereservasi(Request $request)
    {
        $rules = [
            'nama_pesan' => 'required|string|max:25',
            'tgl_pesan' => 'required',
            'id_paket' => 'required',
            'id_promo' => 'required',
            'jumlah_pesan' => 'required|int|max:25'
        ];

        Reservasi::create([
            'nama_pesan' => $request->input('nama_pesan'),
            'tgl_pesan' => $request->input('tgl_pesan'),
            'id_paket' => $request->get('id_paket'),
            'id_promo' => $request->get('id_promo'),
            'jumlah_pesan' => $request->input('jumlah_pesan'),

        ]);

        return redirect('history')->with('success', 'Data Berhasil Disimpan');
    }

    public function history()
    {
        $data = Reservasi::all();
        return view('pengunjung/history', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
