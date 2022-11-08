<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = "reservasi";
    protected $primaryKey = 'id_reservasi';
    protected $fillable = ['id_promo', 'id_status', 'id_paket', 'id_pengunjung', 'nama_pesan', 'tgl_pesan', 'jumlah_pesan', 'alasan'];

    public function paket()
    {
       return $this->belongsTo(Paket::class);
    }

    public function promo()
    {
       return $this->belongsTo(Promo::class);
    }

    public function status()
    {
       return $this->belongsTo(Status::class);
    }
}
