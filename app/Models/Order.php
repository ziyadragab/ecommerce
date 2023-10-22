<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
       'first_name',
       'last_name',
       'email',
       'phone',
       'address_one',
       'address_two',
       'country',
       'city','zip_code', 
       'user_id',
       'status', 
       'total_price'
     ];

     public function user(){
        return $this->belongsTo(User::class);
     }



}
