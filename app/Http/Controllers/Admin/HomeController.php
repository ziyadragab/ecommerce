<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\HomeInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   private $homeInteface;
   public function __construct(HomeInterface $home)
   {
        $this->homeInteface=$home;
   }

   public function index(){
    return $this->homeInteface->index();
   }
}
