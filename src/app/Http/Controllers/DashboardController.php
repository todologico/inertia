<?php
namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Prod1;


class DashboardController extends Controller
{
    public function dashboardMain(Request $request)
    {
        
        $products = Prod1::all();
   
        return Inertia::render('Dashboard', ['products' => $products]);

    }
}
