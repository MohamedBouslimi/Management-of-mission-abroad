<?php

namespace App\Http\Controllers;
use App\Models\adminmodel;
use Illuminate\Http\Request;

class adminform extends Controller
{
    function indexAdmin(){ 
        return view('/fraisAdmin');
    }  
    function datasave(Request $request){  
       
        $fraisM=$request->input('fraisM');
        $fraisT=$request->input('fraisT');  
    
        $isInsertSuccress=adminmodel::insert([ 
            'fraisM'=>$fraisM,'fraisT'=>$fraisT
        ]);    
        if ($isInsertSuccress) { return ('<script>alert("Les frais sont été enregistrée")</script>');}
        else { return'<script>alert("enregistrement a echouée")</script>'; } 
           
    
    }  
    function datashow(){  
        $showdata=adminmodel::all(); 
        
        return view('/data_admin',['showdata'=>$showdata]);
    }  
    function editpage($id){ 
        //return $id; 
               $showdata = adminmodel::find($id); 
               //return $getdata; 
               return view('/editdata',compact('showdata'));
            }  
            
            function updatedataform(Request $request,$id){ 
                $fraisM=$request->input('fraisM');
                $fraisT=$request->input('fraisT');  
            
                $isUpdateSuccess=adminmodel::where('id',$id)->update([ 
                    'fraisM'=>$fraisM,'fraisT'=>$fraisT
                ]);   
                if ($isUpdateSuccess) {return ("<script>alert('la modification a été success')</script>");} 
    else{return "<script>alert('la modification n a pas été success')</script>";}   


} 

function removindex($id){  
    return view('deletefrais',['id'=>$id]); 

}   

function removedata($id){ 

    $isdeletesuccess=adminmodel::where('id',$id)->delete(); 
    if ($isdeletesuccess) echo'<h1>la mission a été supprimée</h1>' ;
    else echo'<h1>la suppression a échoué</h1>';
      
    }      

}