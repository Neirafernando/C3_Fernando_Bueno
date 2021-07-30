<?php

namespace App\Http\Controllers;
use App\Models\tipomedida;
use Illuminate\Http\Request;

class tipomedidas extends Controller
{
    public function gettmed(){
        $gettmed = array();
        $gettmed[] = "Kilowatts";
        $gettmed[] = "Watts";
        $gettmed[] = "Temperatura";
        

        return $tmed;
    }



    

}
