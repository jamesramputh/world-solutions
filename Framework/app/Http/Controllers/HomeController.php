<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 2015-08-14
 * Time: 5:47 PM
 */
namespace App\Http\Controllers;

 class HomeController extends Controller{
     public function __construct(){

     }

     public function showHome(){
         return view('welcome');
     }
 }