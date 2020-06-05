<?php
namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class HomeController extends Controller
{
    function getHomeAdmin(){
        return view ('admin.homeadmin');
    }
}
