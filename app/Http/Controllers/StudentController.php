<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailsModel;
class StudentController extends Controller
{
    public function SelectAll(){
        $data = DetailsModel::all();
        return $data;
    }
    public function SelectByID(Request $request){
        $id = $request->input("id");
        $data = DetailsModel::where('id',$id)->get();
        return $data;
    }
}
