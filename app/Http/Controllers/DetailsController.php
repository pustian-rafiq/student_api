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
    public function detailCreate(Request $request){
        $name = $request->input("name");
        $roll = $request->input("roll");
        $city = $request->input("city");
        $phn = $request->input("phn");
        $class = $request->input("class");

        $sql = "INSERT INTO `details` (`name`, `roll`, `city`, `phn`, `class`) VALUES (?,?,?,?,?)";
        $result = DB::insert($sql,[$name,$roll,$city,$phn,$class]);
        if ($result) {
            return "Data inserted Successfully";
        }else{
            return "Data Not insertedgit";
        }


    }
    public function detailsDelete(Request $request){

        $id = $request->input("id");
        $sql = "DELETE FROM `details` where `id`=?";
        $result = DB::delete($sql, [$id]);
        if ($result) {
            return "Data Deleted Successfully";
        }else{
            return "Data Not Deleted";
        }

    }

    public function detailsUpdate(){

    }


}
