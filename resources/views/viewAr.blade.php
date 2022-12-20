@extends('layouts.app')
@section('content')
<table>  
    <tr>
<td>{{$cd->nom}}</td><td>  :اللقب  </td></tr>      
 

<tr><td>{{$cd->prenom}}</td><td> :الاسم </td></tr>                
     

<tr><td> {{$cd->naissance}}</td><td>   :ناريخ الولادة  </td></tr> 
 
<tr><td> {{$cd->carte}}</td><td>  :رقم بطاقة التعريف  </td></tr> 

<tr><td> {{$cd->postule}}</td><td>  :لمسلمة ب   </td></tr>  

<tr><td> {{$cd->date}}</td><td>  :بتاريخ  </td></tr> 

<tr><td> {{$cd->national}}</td><td> :الجنسية  </td></tr> 

<tr><td> {{$cd->effectuer}}</td><td>في القيام بالمامورية</td></tr>

<tr><td> {{$cd->theme}}</td><td>موضوع المامورية</td></tr>

<tr><td> {{$cd->aller}}</td><td>تاريخ الذهاب</td></tr>   
 
<tr><td> {{$cd->retour}}</td><td>تاريخ الاياب</td></tr>   
   
<tr><td>{{$cd->moyen}}</td><td>وسيلة نقل</td></tr> 
 

<tr> 
<td> {{$cd->fonction}}


</td><td>:الخطة الوظيفية</td> 

<tr> <td> {{$cd->transport}}</td><td> تكاليف النقل</td></tr> 
<tr><td> {{$cd->timbre}}</td> <td>ختم السفر</td></tr>
<tr><td> {{$cd->depenses}}</td><td>نفقات</td></tr> 
<tr><td> {{$cd->jours}}</td><td>عدد الأيام</td></tr>

<tr><td>  {{$cd->charge}}

</td><td>المساعدة المالية</td></tr>

<tr><td> {{$cd->mission}} </td><td>تكاليف المهمة</td></tr>
<tr><td> {{$cd->montant}} </td><td>مبالغ المهمة</td></tr> 



</table> 
@endsection