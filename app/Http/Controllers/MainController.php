<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Client;
use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $sections = Section::all();
        $cars = Car::all();
        $clients = Client::all();
        $brands = Brand::all();
        $products = Product::all();
        return view('frontend.main', compact('sections', 'cars', 'clients', 'brands', 'products'));
    }
}
