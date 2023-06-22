<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'requesttype',
        'companyname',
        'email',
        'phonenumber',
        'admin_id',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);

    }
}
