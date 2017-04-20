<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;


class StaticPage extends BaseController{
    function test(){
        //apel basa date

        $data = array('response' => 'Ai aici locatii');
        return view('test', ['info' => $data]);
    }

}