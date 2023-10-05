<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id', 'status', 'pament_method',
         'pament_status', 'pament_id', 'total_price','address'
     ];

     public function user(){
        return $this->belongsTo(User::class);
     }



}
