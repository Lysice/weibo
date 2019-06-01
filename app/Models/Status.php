<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Status extends Authenticatable
{
    use Notifiable;

    protected $table ='statuses';
    protected $fillable = ['content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
