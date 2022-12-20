<?php

namespace App\Http\Controllers;

use App\Models\adminmodel;
use App\Models\registrations;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;

class formcrud extends Controller
{
    function index(){  
       

        return view('/form');
    } 
    function DataInsert(Request $request){  
       
         $nom=$request->input('nom');
         $prenom=$request->input('prenom');
         $naissance=$request->input('naissance');
         $carte=$request->input('carte');
         $postule=$request->input('postule');
         $date = $request->input('date'); 
         $national=$request->input('national');
         $effectuer=$request->input('effectuer');
         $theme=$request->input('theme');
         $aller=$request->input('aller'); 
         $retour=$request->input('retour');
         $moyen=$request->input('moyen'); 
         $fonction=$request->input('fonction');
         $transport=$request->input('transport');
         $timbre=$request->input('timbre');
         $depenses=$request->input('depenses'); 
         $jours=$request->input('jours');
         $charge=$request->input('charge'); 
         $mission=$request->input('mission');
         $montant=$request->input('montant');  
         $last_id=adminmodel::all()->max('id');
        $fraisM=DB::table('adminmodels')->where('id', $last_id)->value('fraisM');
        $fraisT=DB::table('adminmodels')->where('id', $last_id)->value('fraisT');
       
        
        if($fraisM>=$mission &&  $fraisT>=$transport ) {  

        $fraisM= $fraisM-$mission; 
        $fraisT=$fraisT-$transport;
       $isInsertSuccress=registrations::insert([ 
        'nom'=>$nom,'prenom'=>$prenom,'naissance'=>$naissance,'carte'=>$carte, 
        'postule'=>$postule,'date'=>$date,'national'=>$national,'effectuer'=>$effectuer,
        'theme'=>$theme,'aller'=>$aller,'retour'=>$retour,'moyen'=>$moyen,'fonction'=>$fonction,'transport'=>$transport, 
        'timbre'=>$timbre,'depenses'=>$depenses,'jours'=>$jours,'charge'=>$charge,'mission'=>$mission,'montant'=>$montant
    ]);  
      
    $isUpdateSuccess=adminmodel::where('id',$last_id)->update([ 
        'fraisM'=>$fraisM,'fraisT'=>$fraisT
    ]);   
    
        if ($isInsertSuccress &&  $isUpdateSuccess ) { return ('<script>alert("La mission a été enregistrée")</script>');}
    }   
   
    else { return'<script>alert("L enregistrement a échoué!!")</script>'; }
       
       
      
     }     

     function data(){  
        $getdata=registrations::all(); 
        
        return view('/data',['getdata'=>$getdata]);
    } 

    function update($id){ 
//return $id; 
       $getdata = registrations::find($id); 
       //return $getdata; 
       return view('/DataUpdate',compact('getdata'));
    } 
    function dataupdateIndex(Request $request,$id){  

    $id=$request ->id; 
    $nom=$request->input('nom');
    $prenom=$request->input('prenom');
    $naissance=$request->input('naissance');
    $carte=$request->input('carte');
    $postule=$request->input('postule');
    $date = $request->input('date'); 
    $national=$request->input('national');
    $effectuer=$request->input('effectuer');
    $theme=$request->input('theme');
    $aller=$request->input('aller'); 
    $retour=$request->input('retour');
    $moyen=$request->input('moyen'); 
    $fonction=$request->input('fonction');
    $transport=$request->input('transport');
    $timbre=$request->input('timbre');
    $depenses=$request->input('depenses'); 
    $jours=$request->input('jours');
    $charge=$request->input('charge'); 
    $mission=$request->input('mission'); 
    $montant=$request->input('montant');  

    
    $isUpdateSuccess=registrations::where('id',$id)->update([ 
    'nom'=>$nom,'prenom'=>$prenom,'naissance'=>$naissance,'carte'=>$carte, 
    'postule'=>$postule,'date'=>$date,'national'=>$national,
    'effectuer'=>$effectuer,'theme'=>$theme,'aller'=>$aller,
    'retour'=>$retour,'moyen'=>$moyen,'fonction'=>$fonction,'transport'=>$transport, 
    'timbre'=>$timbre,'depenses'=>$depenses,'jours'=>$jours,'charge'=>$charge,'mission'=>$mission,'montant'=>$montant
    ]); 
    if ($isUpdateSuccess) {return ("<script>alert('la modification a été success')</script>");} 
    else{return "<script>alert('la modification n a pas été success')</script>";} 
}
       
function deletindex($id){  
    return view('deletepage',['id'=>$id]); 


} 

function deletedata($id){ 

$isdeletesuccess=registrations::where('id',$id)->delete(); 
if ($isdeletesuccess) echo'<h1>la mission a été supprimée</h1>' ;
else echo'<h1>la suppression a échoué</h1>';
  
}      
        
function afficher(registrations $cd,$id){
    $cd =registrations::find($id);
    return view('view',compact('cd'));
} 
function viewArab(registrations $cd,$id){
    $cd =registrations::find($id);
    return view('viewAr',compact('cd'));
} 


}