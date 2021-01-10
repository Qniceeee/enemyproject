<?php

namespace App\Http\Controllers;

class PageController extends Controller
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

    public function onRun()
    {
    echo 'ok';
    }
    public function welcome()
    {
    echo 'This is main page';
    }


}
