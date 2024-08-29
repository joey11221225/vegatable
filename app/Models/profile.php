<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone_number',
        'address',
        'city',
        'state',
        'zip_code',
    ];

    // 定义反向一对一关联
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
