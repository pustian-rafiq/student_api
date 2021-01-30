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
        //using Sql prepared statement
       // $query = "SELECT * FROM details";
        //$data = DB::select($query);
        //return $request->header();

        // using query builder ---select all rows
        // $data = DB::table('details')->get();
        // return $data;

        // using query builder ---select one rows
        // $data = DB::table('details')->find(2);
        // return $data->name;

          // using query builder ---select one or two column----using pluck method
          $data = DB::table('details')->pluck('name','roll');
          return $data;
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
            return "Data Not inserted";
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

    public function detailsUpdate(Request $request){

        $id = $request->input("id");
        $city = $request->input("city");
        $phn = $request->input("phn");


        $sql = "UPDATE `details` set `city`=?, `phn`=? where `id`=?";
        $result = DB::update($sql,[$city,$phn,$id]);
        if ($result) {
            return "Data Updated Successfully";
        }else{
            return "Data Not Updated";
        }
    }


}
