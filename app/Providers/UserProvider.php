<?php 
 namespace App\Providers;

use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

 class UserProvider extends ServiceProvider {
 
     protected $products;
 
     public function __construct($products){
         $this->products = $products;
     }
 
     public function listProducts(){
         return $this->products;
     }
 
     public function insert($products){
         return $this->products[] = $products;
     }
 
 }
 
 ?>