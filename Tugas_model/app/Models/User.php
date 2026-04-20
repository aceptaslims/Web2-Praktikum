<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    protected $table = 'users';
    
    protected $primaryKey = 'npm';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'npm',
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    public function loans(): HasMany
    {
        return $this->hasMany(Loan::class, 'user_npm', 'npm');
    }
}