<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

use DB;

class DashboardController extends Controller
{
    public function dashboardMain()
    {

        $products = DB::table('prod1')
            ->select('prod1_id','prod1_product','prod1_code','prod1_price1','prod1_title1','prod1_title2','prod1_text1','prod1_image1','prod1_image2','prod1_order','prod1_enable','created_at','updated_at','prod1_token')
            ->get();


        return Inertia::render('Dashboard', ['products' => $products]);
        
    }
}
