<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Paket;
use App\Models\Promo;
use App\Models\Artikel;
use App\Models\Galeri;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Storage;

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
    //petugas
    public function tampilpetugas()
    {
        $data = Admin::all();
        return view('admin/datapetugas', ['data' => $data]);
    }

    public function createpetugas()
    {
        return view('admin/tambahpetugas');
    }
    public function storepetugas(Request $request)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpg,jpeg,png'
        ];

        $file = $request->file('foto');
        $image_name = $file->getClientOriginalName();

        if ($file) {
            $image_name = $file->store('images', 'public');
        }

        Admin::create([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'no_hp' => $request->input('no_hp'),
            'role' => $request->input('role'),
            'foto' => $image_name
        ]);

        return redirect('datapetugas')->with('success', 'Data Berhasil Disimpan');
    }

    public function editpetugas($id)
    {
        $petugas = Admin::find($id);
        return view('admin/editpetugas', compact('petugas'));
    }
    public function updatepetugas(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'email' => 'required|string',
            'no_hp' => 'required|string',
            'role' => 'required|string',
            'foto' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $petugas = Admin::find($id);
        $file = $request->file('foto');
        $foto = '';

        if ($file) {
            $foto = $file->store('images', 'public');

            if (Storage::exists('public/' . $petugas->foto)) {
                Storage::delete('public/' . $petugas->foto);
            }
        }

        if (!empty($request->file('foto'))) {
           Admin::where('id_admin_petugas', $id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'role' => $request->role,
                'foto' => $foto
          
            ]);
        } else {
            Admin::where('id_admin_petugas', $id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'role' => $request->role,
                'foto' => $foto
          
            ]);
        }

        return redirect('datapetugas')->with('success', 'Data Berhasil Diubah');
    }
    public function destroypetugas($id)
    {
        Admin::where('id_admin_petugas', $id)->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }

    //paket
    public function tampilpaket()
    {
        $data = Paket::all();
        return view('admin/datajenispaket', ['data' => $data]);
    }

    public function createpaket()
    {
        return view('admin/tambahjenispaket');
    }
    public function storepaket(Request $request)
    {
        $rules = [
            'nama_paket' => 'required|string|max:255',
            'deskripsi_paket' => 'required|string|max:255',
            'harga_weekday' => 'required|string|max:255',
            'harga_weekend' => 'required|string|max:255',
            'gambar_paket' => 'required|image|mimes:jpg,jpeg,png'
        ];

        $file = $request->file('gambar_paket');
        $image_name = $file->getClientOriginalName();

        if ($file) {
            $image_name = $file->store('images', 'public');
        }

        Paket::create([
            'nama_paket' => $request->input( 'nama_paket'),
            'deskripsi_paket' => $request->input('deskripsi_paket'),
            'harga_weekday' => $request->input('harga_weekday'),
            'harga_weekend' => $request->input('harga_weekend'),
            'gambar_paket' => $image_name
        ]);

        return redirect('datajenispaket')->with('success', 'Data Berhasil Disimpan');
    }

    public function editpaket($id)
    {
        $paket = Paket::find($id);
        return view('admin/editjenispaket', compact('paket'));
    }
    public function updatepaket(Request $request, $id)
    {
        $this->validate($request, [
            'nama_paket' => 'required|string',
            'deskripsi_paket' => 'required|string',
            'harga_weekday' => 'required|string',
            'harga_weekend' => 'required|string',
            'gambar_paket' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $paket = Paket::find($id);
        $file = $request->file('gambar_paket');
        $gambar_paket = '';

        if ($file) {
            $gambar_paket = $file->store('images', 'public');

            if (Storage::exists('public/' . $paket->gambar_paket)) {
                Storage::delete('public/' . $paket->gambar_paket);
            }
        }

        if (!empty($request->file('gambar_paket'))) {
           Paket::where('id_paket', $id)->update([
                'nama_paket' => $request->nama_paket,
                'deskripsi_paket' => $request->deskripsi_paket,
                'harga_weekday' => $request->harga_weekday,
                'harga_weekend' => $request->harga_weekend,
                'gambar_paket' => $gambar_paket
          
            ]);
        } else {
            Paket::where('id_paket', $id)->update([
                'nama_paket' => $request->nama_paket,
                'deskripsi_paket' => $request->deskripsi_paket,
                'harga_weekday' => $request->harga_weekday,
                'harga_weekend' => $request->harga_weekend,
                'gambar_paket' => $gambar_paket
          
            ]);
        }

        return redirect('datajenispaket')->with('success', 'Data Berhasil Diubah');
    }

    // public function destroypaket($id)
    // {
    //     Paket::where('id_paket', $id)->delete();
    //     return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    // }

    //promo
    public function tampilpromo()
    {
        $data = Promo::all();
        return view('admin/datapromo', ['data' => $data]);
    }
    public function createpromo()
    {
        return view('admin/tambahpromo');
    }
    public function storepromo(Request $request)
    {
        $rules = [
            'nama_promo' => 'required|string|max:255',
            'deskripsi_promo' => 'required|string|max:255',
            'potongan' => 'required|string|max:255',
            'gambar_promo' => 'required|image|mimes:jpg,jpeg,png'
        ];

        $file = $request->file('gambar_promo');
        $image_name = $file->getClientOriginalName();

        if ($file) {
            $image_name = $file->store('images', 'public');
        }

        Promo::create([
            'nama_promo' => $request->input('nama_promo'),
            'deskripsi_promo' => $request->input('deskripsi_promo'),
            'potongan' => $request->input('potongan'),
            'gambar_promo' => $image_name
            
        ]);

        return redirect('datapromo')->with('success', 'Data Berhasil Disimpan');
    }

    public function editpromo($id)
    {
        $promo = Promo::find($id);
        return view('admin/editpromo', compact('promo'));
    }
    public function updatepromo(Request $request, $id)
    {
        $this->validate($request, [
            'nama_promo' => 'required|string',
            'deskripsi_promo' => 'required|string',
            'potongan' => 'required|string',
            'gambar_promo' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $promo = Promo::find($id);
        $file = $request->file('gambar_promo');
        $gambar_promo = '';

        if ($file) {
            $gambar_promo = $file->store('images', 'public');

            if (Storage::exists('public/' . $promo->gambar_promo)) {
                Storage::delete('public/' . $promo->gambar_promo);
            }
        }

        if (!empty($request->file('gambar_promo'))) {
           Promo::where('id_promo', $id)->update([
                'nama_promo' => $request->nama_promo,
                'deskripsi_promo' => $request->deskripsi_promo,
                'potongan' => $request->potongan,
                'gambar_promo' => $gambar_promo
          
            ]);
        } else {
            Promo::where('id_promo', $id)->update([
                'nama_promo' => $request->nama_promo,
                'deskripsi_promo' => $request->deskripsi_promo,
                'potongan' => $request->potongan,
                'gambar_promo' => $gambar_promo
          
            ]);
        }

        return redirect('datapromo')->with('success', 'Data Berhasil Diubah');
    }

    public function destroypromo($id)
    {
       Promo::where('id_promo', $id)->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }

    //artikel
    public function tampilartikel()
    {
        $data = Artikel::all();
        return view('admin/dataartikel', ['data' => $data]);
    }

    public function createartikel()
    {
        return view('admin/tambahartikel');
    }
    public function storeartikel(Request $request)
    {
        $rules = [
            'judul' => 'required|string|max:255',
            'isi_artikel' => 'required|string|max:255',
            'gambar_artikel' => 'required|image|mimes:jpg,jpeg,png'
        ];

        $file = $request->file('gambar_artikel');
        $image_name = $file->getClientOriginalName();

        if ($file) {
            $image_name = $file->store('images', 'public');
        }

        Artikel::create([
            'judul' => $request->input( 'judul'),
            'isi_artikel' => $request->input('isi_artikel'),
            'gambar_artikel' => $image_name
        ]);

        return redirect('dataartikel')->with('success', 'Data Berhasil Disimpan');
    }

    public function editartikel($id)
    {
        $artikel = Artikel::find($id);
        return view('admin/editartikel', compact('artikel'));
    }
    public function updateartikel(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required|string',
            'isi_artikel' => 'required|string',
            'gambar_artikel' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $artikel = Artikel::find($id);
        $file = $request->file('gambar_artikel');
        $gambar_artikel = '';

        if ($file) {
            $gambar_artikel = $file->store('images', 'public');

            if (Storage::exists('public/' . $artikel->gambar_artikel)) {
                Storage::delete('public/' . $artikel->gambar_artikel);
            }
        }

        if (!empty($request->file('gambar_artikel'))) {
        Artikel::where('id_artikel', $id)->update([
                'judul' => $request->judul,
                'isi_artikel' => $request->isi_artikel,
                'gambar_artikel' => $gambar_artikel
        
            ]);
        } else {
            Artikel::where('id_artikel', $id)->update([
                'judul' => $request->judul,
                'isi_artikel' => $request->isi_artikel,
                'gambar_artikel' => $gambar_artikel
        
            ]);
        }

        return redirect('dataartikel')->with('success', 'Data Berhasil Diubah');
    }

    public function destroyartikel($id)
    {
        Artikel::where('id_artikel', $id)->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }

    //galeri
     public function tampilgaleri()
     {
         $data = Galeri::all();
         return view('admin/datagaleri', ['data' => $data]);
     }
 
     public function creategaleri()
     {
         return view('admin/tambahgaleri');
     }
     public function storegaleri(Request $request)
     {
         $rules = [
             'gambar_galeri' => 'required|image|mimes:jpg,jpeg,png'
         ];
 
         $file = $request->file('gambar_galeri');
         $image_name = $file->getClientOriginalName();
 
         if ($file) {
             $image_name = $file->store('images', 'public');
         }
 
         Galeri::create([
             'gambar_galeri' => $image_name
         ]);
 
         return redirect('datagaleri')->with('success', 'Data Berhasil Disimpan');
     }
 
     public function editgaleri($id)
     {
         $galeri = Galeri::find($id);
         return view('admin/editgaleri', compact('galeri'));
     }
     public function updategaleri(Request $request, $id)
     {
         $this->validate($request, [
             'gambar_galeri' => 'required|image|mimes:jpg,png,jpeg',
         ]);
 
         $galeri = Galeri::find($id);
         $file = $request->file('gambar_galeri');
         $gambar_galeri = '';
 
         if ($file) {
             $gambar_galeri = $file->store('images', 'public');
 
             if (Storage::exists('public/' . $galeri->gambar_galeri)) {
                 Storage::delete('public/' . $galeri->gambar_galeri);
             }
         }
 
         if (!empty($request->file('gambar_galeri'))) {
         Galeri::where('id_galeri', $id)->update([
                 'gambar_galeri' => $gambar_galeri
         
             ]);
         } else {
             Galeri::where('id_galeri', $id)->update([
                 'gambar_galeri' => $gambar_galeri
         
             ]);
         }
 
         return redirect('datagaleri')->with('success', 'Data Berhasil Diubah');
     }
 
     public function destroygaleri($id)
     {
         Galeri::where('id_galeri', $id)->delete();
         return redirect()->back()->with('success', 'Data Berhasil Dihapus');
     }

     //resevasi
    public function reservasiadm()
    {
        $data = Reservasi::all();
        return view('admin/datareservasiall', ['data' => $data]);
    }
    public function detailreservasi($id_reservasi)
    {
        $reservasi = Reservasi::find($id_reservasi);
        return view('admin/detailreservasi', ['reservasi' => $reservasi]);
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 

		$data = Reservasi::all('nama_pesan')
		->where('nama_pesan','like',"%".$cari."%");
 

		return view('admin/datareservasiall', ['data' => $data]);
 
	}
    //laporan
    public function carilaporan(Request $request)
	{
		// menangkap data pencarian
		$carilaporan = $request->carilaporan;
 

		$data = Reservasi::all('tgl_pesan')
		->where('tgl_pesan','like',"%".$carilaporan."%");

		return view('admin/datalaporan', ['data' => $data]);
 
	}
    //penyewa
    public function datapenyewa()
    {
        return view('admin/datapenyewa');
    }
    public function datalaporan()
    {
        return view('admin/datalaporan');
    }

    public function store(Request $request)
    {
        //
    }


    public function editprofil()
    {
        return view('admin/editprofiladmin');
    }
    public function ubahpw()
    {
        return view('admin/ubahpwadmin');
    }



}
