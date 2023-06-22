<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member_Assignment extends Model
{
    use HasFactory;

    protected $table = 'members_assignments';

    protected $fillable = [
        'member_id',
        'assignment_id',
    ];
     public function member()
    {
        return $this ->belongsTo(Member::class,'member_id');
    }

    public function assignment()
    {
        return $this ->belongsTo(Assignment::class,'assignment_id');
    }
}
