<?php

namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
class ExampleController extends Controller
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

    public function testConn(){
        $dbname = DB::Connection()->select("SELECT * FROM details");
        return $dbname;
    }
}
