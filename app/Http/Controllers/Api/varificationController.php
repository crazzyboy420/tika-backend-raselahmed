<?php


namespace App\Http\Controllers\Api;

use App\Models\person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class varificationController extends Controller
{
public function varify(request $request){
    $people = person::where('id_no',$request->id)->first();
    return $people;
}
}

