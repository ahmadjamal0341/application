<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\add_detail;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function store(Request $request){
         $data = new add_detail();

       
 
        
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->phone= $request->get('phone');
        $data->adress = $request->get('adress');
        $data->zip = $request->get('zip');
        $data->pic = $request->get('pic');
       
        
        $data->save();
        DB::insert($data);

 
       
 
    
        



    }




}
