<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function index()
    {
        $product=Product::paginate(8);
        return view('home.index',compact('product'));
    }


    public function redirect()
    {    
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else{
            return view('home.index');
        }
    }
    
    public function category()
    {
        return view('home.category');
    }
    public function cart()
    {
        return view('home.cart');
    }
    public function checkout()
    {
        return view('home.checkout');
    }
    public function confirmation()
    {
        return view('home.confirmation');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function tracking()
    {
        return view('home.tracking');
    }
    public function single_product()
    {
        return view('home.single_product');
    }
}
