<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Events\eventEmail;




class emailController extends Controller
{

    public function create(){
             // find email that received request
            $email = 'kimo24775@gmail.com' ;
  
            // find data that will send 
                $data = [
        'id' => 111 ,
        'name' => 'Ahmed Kimo' ,
        'job' => 'Software Engineering' 
     ] ;

        DB::transaction(function () use($email , $data){
            event(new eventEmail($email , $data)) ;
        });
        dd ('email send successfuly') ;
    }
    
}
