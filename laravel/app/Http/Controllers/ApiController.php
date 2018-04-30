<?php

namespace App\Http\Controllers;
use App\ListElement;
use Illuminate\Http\Request;
class ApiController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function getList(){
        $list = ListElement::all()->pluck('element');
        return $list;
    }
    public function addToList(Request $request){
        $getParams = $request->all();
        $element = new ListElement($getParams);
        $element->save();
        var_dump($element);
    }
}