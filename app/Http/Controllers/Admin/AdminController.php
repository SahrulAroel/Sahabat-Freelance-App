<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flashsale;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $products = Product::count();
        $users = User::count();
        $flashsales = Flashsale::count();  // Assuming you have a FlashSale model


        return view('pages.admin.index', compact('products', 'users', 'flashsales'));
    }
}
