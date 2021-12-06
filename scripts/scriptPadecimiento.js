function desplegarObesidad(valor){
    document.getElementById("fichaObesidad").style.display='block';
    document.getElementById("fichaHipertension").style.display='none';
    document.getElementById("fichaAnemia").style.display='none';
    document.getElementById("fichaGota").style.display='none';
    document.getElementById("fichaDiabetes").style.display='none';
    document.getElementById("fichaCardio").style.display='none';
    limpiar();
    document.getElementById("1").style.backgroundColor="#f5b3ae";

}
function desplegarHipertension(){
    document.getElementById("fichaObesidad").style.display='none';
    document.getElementById("fichaHipertension").style.display='block';
    document.getElementById("fichaAnemia").style.display='none';
    document.getElementById("fichaGota").style.display='none';
    document.getElementById("fichaDiabetes").style.display='none';
    document.getElementById("fichaCardio").style.display='none';

    limpiar();
    document.getElementById("3").style.backgroundColor="#f5b3ae";
    
}
function desplegarAnemia(){
    document.getElementById("fichaObesidad").style.display='none';
    document.getElementById("fichaHipertension").style.display='none';
    document.getElementById("fichaAnemia").style.display='block';
    document.getElementById("fichaGota").style.display='none';
    document.getElementById("fichaDiabetes").style.display='none';
    document.getElementById("fichaCardio").style.display='none';
    limpiar();
    document.getElementById("6").style.backgroundColor="#f5b3ae";
}
function desplegarGota(){
    document.getElementById("fichaObesidad").style.display='none';
    document.getElementById("fichaHipertension").style.display='none';
    document.getElementById("fichaAnemia").style.display='none';
    document.getElementById("fichaGota").style.display='block';
    document.getElementById("fichaDiabetes").style.display='none';
    document.getElementById("fichaCardio").style.display='none';

    limpiar();
    document.getElementById("2").style.backgroundColor="#f5b3ae";
    
}
function desplegarDiabetes(){
    document.getElementById("fichaObesidad").style.display='none';
    document.getElementById("fichaHipertension").style.display='none';
    document.getElementById("fichaAnemia").style.display='none';
    document.getElementById("fichaGota").style.display='none';
    document.getElementById("fichaDiabetes").style.display='block';
    document.getElementById("fichaCardio").style.display='none';
    limpiar();
    document.getElementById("4").style.backgroundColor="#f5b3ae";
    
}
function desplegarCardio(){
    document.getElementById("fichaObesidad").style.display='none';
    document.getElementById("fichaHipertension").style.display='none';
    document.getElementById("fichaAnemia").style.display='none';
    document.getElementById("fichaGota").style.display='none';
    document.getElementById("fichaDiabetes").style.display='none';
    document.getElementById("fichaCardio").style.display='block';


    limpiar();
    document.getElementById("5").style.backgroundColor="#f5b3ae";
    
}

function limpiar(){
   var botones=document.getElementById("flex-container").childNodes;

   for (const boton of botones) {
       console.log(boton)
       if(boton.nodeType==1){
       boton.style.backgroundColor="white";
       }
  
       
   }
}