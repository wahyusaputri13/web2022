<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveilansMalaria extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kelamin()
    {
        return $this->belongsTo(ComCodes::class, 'jenis_kelamin');
    }

    public function provinsi()
    {
        return $this->belongsTo(ComRegion::class, 'region_prop');
    }

    public function kabupaten()
    {
        return $this->belongsTo(ComRegion::class, 'region_kab');
    }

    public function kecamatan()
    {
        return $this->belongsTo(ComRegion::class, 'region_kec');
    }

    public function kelurahan()
    {
        return $this->belongsTo(ComRegion::class, 'region_kel');
    }
}
