<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PageController extends BaseController
{
    public function index()
    {
        // helper(['custom1_helper', 'custom2_helper']); //loading single helper
        helper( 'custom2_helper'); //satu load dari base controller, satu dari pagecontroller

        //calling function
        $fun1 = fun1();
        $randomstr = randomString();

        echo "fun1 :". $fun1 ."<br><br>";
        echo "randomstr :".$randomstr. "<br><br>";

        //custom22_helper functions
        $fun2 = fun2();
        $evenOrOdd = checkEven(92);

        echo "fun2:".$fun2."<br><br>";
        echo "evenOrOdd: ". $evenOrOdd."<br><br>";

        return view('index');
    }
}
