<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\InputBag;
use App\Models\Unit;
use App\Models\BuildMall;

class CyberController extends Controller
{
    public function button(Request $request)
    {
        var_dump ('----look info----');die();
        ///$jsonData = json_decode($request->getContent(), true);

        ///$jsonData === null ? throw new  \Exception('not valid format json data') : null;

        /*
        $new_unit = new Unit;
        $new_unit->unitname = $jsonData["unitname"];
        $new_unit->secret_key = $jsonData["secret_key"];

        $new_unit->save();
        */

        $bmall = BuildMall::find(10);

        return response()->json($bmall);
        
    }

    public function gate()
    {
        var_dump ('---take this api---');die();
    }
}
