<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{   
    // Home Page
    public function index(){
        return view("pages.welcome");
    }

    // About Page
    public function about(){
        return view("pages.about");
    }

    // Contact Page
    public function contact(){
        return view("pages.contact");
    }


    // Products Pages
    public function p_head_stones(){
        $items = [
            ["title"=>"Demo Title","img"=>"images/products/head-stones/Heaadstone 2.jpeg","p_not"=>"₹155","p_live"=>"₹155"],
            ["title"=>"Demo Title","img"=>"images/products/head-stones/Headstone 4.jpeg","p_not"=>"₹155","p_live"=>"₹155"],
            ["title"=>"Demo Title","img"=>"images/products/head-stones/Headstone 3.jpeg","p_not"=>"₹155","p_live"=>"₹155"],
            ["title"=>"Demo Title","img"=>"images/products/head-stones/Headstone 1.jpeg","p_not"=>"₹155","p_live"=>"₹155"],
        ];
        return view("pages.products.head_stones",[
            "title"=>"Head Stones",
            "items"=>$items,
        ]);
    }
    public function p_stone_funriture(){
        $items = Product::where("category","stone-furniture")->get();
        return view("pages.products.stone_furniture",[
            "items"=> $items,
        ]);
    }
    public function p_stone_laying(){
        $items = Product::where("category","stone-laying")->get();
        return view("pages.products.stone_laying",[
            "items"=> $items,
        ]);
    }
    public function p_granite_fence_poles(){
        $items = Product::where("category","granite-fence-poles")->get();
        return view("pages.products.granite_fence_poles",[
            "items"=> $items,
        ]);
    }
    public function p_wash_basins(){
        $items = Product::where("category","wash-basins")->get();
        return view("pages.products.wash_basins",[
            "items"=> $items,
        ]);
    }
}
