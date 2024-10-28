<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_siswa',
        'kelas',
        'umur',
        'nama_orangtua',
        'nomor_hp',
        'package_id',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
