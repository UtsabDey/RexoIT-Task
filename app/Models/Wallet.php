<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $table = 'wallets';

    protected $fillable = [
        'user_id', 'salary_amount', 'cash_amount', 'status'
    ];
}
