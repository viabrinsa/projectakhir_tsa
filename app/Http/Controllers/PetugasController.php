<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('petugas/berandapetugas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahreservasi()
    {
        return view('petugas/tambahreservasipetugas');
    }

    public function registersewa()
    {
        return view('petugas/registersewa');
    }
    public function reservasipetugas()
    {
        $data = Reservasi::all();
        return view('petugas/datareservasipetugas', ['data' => $data]);
    }
    public function detailreservasipetugas($id_reservasi)
    {
        $reservasi = Reservasi::find($id_reservasi);
        return view('petugas/detailreservasipetugas', ['reservasi' => $reservasi]);
    }
    public function carireservasiptg(Request $request)
	{
		// menangkap data pencarian
		$carireservasiptg = $request->carireservasiptg;
 

		$data = Reservasi::all('nama_pesan')
		->where('nama_pesan','like',"%".$carireservasiptg."%");
 

		return view('petugas/datareservasipetugas', ['data' => $data]);
 
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
