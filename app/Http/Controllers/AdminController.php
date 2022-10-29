<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin/berandaadmin');
    }

    public function profiladmin()
    {
        return view('admin/profiladmin');
    }
    public function datapetugas()
    {
        return view('admin/datapetugas');
    }
    public function datapenyewa()
    {
        return view('admin/datapenyewa');
    }
    public function datareservasijrk()
    {
        return view('admin/datareservasijrk');
    }
    public function datareservasiapl()
    {
        return view('admin/datareservasiapl');
    }
    public function datareservasistr()
    {
        return view('admin/datareservasistr');
    }
    public function jenispaket()
    {
        return view('admin/jenispaket');
    }
    public function promo()
    {
        return view('admin/promo');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createpetugas()
    {
        return view('admin/tambahpetugas');
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
    public function editprofil()
    {
        return view('admin/editprofiladmin');
    }
    public function ubahpw()
    {
        return view('admin/ubahpwadmin');
    }
    public function editpetugas()
    {
        return view('admin/editpetugas');
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
