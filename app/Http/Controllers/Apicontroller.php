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
            return response()->json($result, 201);
        }else{
            return response()->json([
                "message" => "not found"
            ], 404);
        }        
        }else     
        return Apimodel:: all();
    }

    public function post(Request $req){        
        $apimodel = new Apimodel;
        $result = $apimodel->insert($req->input());
        if($result){
            return response()->json([
                "message" => "record created"
            ], 201);
        }else{
            return response()->json([
                "message" => "not created"
            ], 404);
        }
    }
    public function put(Request $req){
        $apimodel = new Apimodel;
        $data= $apimodel->find($req->id)->update($req->input());
        if($data){
            return response()->json([
                "message" => "record updated"
            ], 201);
        }else{
            return response()->json([
                "message" => "record not updated"
            ], 404);
        }
    }
    public function delete(Request $req){
        $apimodel = new Apimodel;
        $data = $apimodel->find($req->id)->delete();
        if($data){
            return response()->json([
                "message" => "record deleted"
            ], 201);
        }else{
            return response()->json([
                "message" => "record not deleted"
            ], 404);
        }
    }

    public function search($name){
        $apimodel = new Apimodel;
        $data = $apimodel->where('name', 'LIKE', '%'.$name.'%')->get();
        if($data){
            return response()->json($data, 201);
        }else{
            return response()->json([
                "message" => "record not found"
            ], 404);
        }
    }
}
