<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_time',
        'buyin',
        'total_buyin',
        'cashout',
        'pnl',
        'amount_owned',
        'initial',
    ];

    public function users(){
        return  $this->belongsTo(User::class,'user_id');
    }
}
