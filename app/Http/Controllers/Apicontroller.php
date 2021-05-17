<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apimodel;

class Apicontroller extends Controller
{
    public function get(Request $req){
        if($req->id){
        $result = Apimodel :: find($req->id);
        if($result){
            return $result;
        }else{
            return ["result"=>"Not found"];
        }        
        }else     
        return Apimodel:: all();
    }

    public function post(Request $req){        
        $apimodel = new Apimodel;
        $result = $apimodel->insert($req->input());
        if($result){
            return ["result"=>"Data posted"];
        }else{
            return ["result"=>"Not Posted"];
        }
    }
    public function put(Request $req){
        $apimodel = new Apimodel;
        $data= $apimodel->find($req->id)->update($req->input());
        if($data){
            return ["result"=>"Data updated"];
        }else{
            return ["result"=>"Not updated"];
        }
    }
    public function delete(Request $req){
        $apimodel = new Apimodel;
        $data = $apimodel->find($req->id)->delete();
        if($data){
            return ["result"=>"Data Deleted"];
        }else{
            return ["result"=>"Not Deleted"];
        }
    }

    public function search($name){
        $apimodel = new Apimodel;
        $data = $apimodel->where('name', 'LIKE', '%'.$name.'%')->get();
        if($data){
            return $data;
        }else{
            return ["result"=>"Not Found"];
        }
    }
}
