function Calcul() { 
    var jour=parseFloat(document.form1.jours.value); 
    if (document.getElementById("a").checked) 
    prime=450 ;
    else if (document.getElementById("b").checked)
     prime=300; 
     else  (document.getElementById("c").checked) 
     prime=225; 
     if (document.getElementById("d").checked) 
     PrimeTotale=jour*prime; 
    else if (document.getElementById("e").checked) 
    PrimeTotale=(prime/2)*jour; 
    else if (document.getElementById("f").checked)  
    PrimeTotale=(prime/3)*jour; 
    else if (document.getElementById("g").checked && jour<=7) 
    PrimeTotale=(prime/9)*jour;  
    else  (document.getElementById("g").checked && jour>7) 
    PrimeTotale=(prime/3)*jour;  
    let Timbre=parseFloat(document.form1.timbre.value); 
    let Depenses=parseFloat(document.form1.depenses.value); 
   let FraisMission=PrimeTotale +Timbre+Depenses; 
    document.form1.mission.value=FraisMission;
}  
function calcul2(){ 
    let Transport=parseFloat(document.form1.transport.value);  
    let FraisMission=parseFloat(document.form1.mission.value);
    document.form1.montant.value=Transport+FraisMission;
} 
function imprimer(){ 
    window.print();
}