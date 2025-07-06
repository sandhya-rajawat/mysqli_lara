<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    function query()
    {
        // return DB::select("SELECT * FROM demotable");
        // return DB::table("demotable")->get();
        // return 'this is my query run right now';
        //         $result=DB::table('demotable')->insert([
        // 'id'=>3,
        // 'name'=>"priyanka",
        // "city"=>"bikaner"
        // $result = DB::table('demotable')->where('name', 'sandhya')->update(['city'=> 'Jodhpur']);
        $result = DB::table('demotable')->where('name', 'sandhya')->delete();
        if ($result) {
            echo "your Data delete Successfull";
        } else {
            echo "Somthing error";
        }
    }
}
