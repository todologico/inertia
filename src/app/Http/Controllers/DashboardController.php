<?php
namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Prod1;
use Auth;


class DashboardController extends Controller
{
    public function dashboardMain(Request $request)
    {

        $user = Auth::user();
     
        if($request->has("search")){

            $search = $request->input('search');           

            $products = Prod1::where('prod1_product','LIKE','%'.$search.'%')
                        ->orWhere('prod1_title1','LIKE','%'.$search.'%')
                        ->get();

            
        } else {
            
            $products = Prod1::all();

        }

        $something='- pasando info al componente';
   
        return Inertia::render('Dashboard', ['products' => $products,'something' => $something,'user' => $user]);

    }
}
