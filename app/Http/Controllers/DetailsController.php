<?php

namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
use Illuminate\Http\Request;
class DetailsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function detailsSelect(Request $request){
       // $query = "SELECT * FROM details";
        //$data = DB::select($query);
        return $request->header();
    }

    public function detailsDelete(){

    }

    public function detailsUpdate(){

    }

    public function detailInsert(){

    }
}
