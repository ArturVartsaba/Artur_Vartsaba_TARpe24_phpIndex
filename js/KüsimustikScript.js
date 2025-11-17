//checkbox valikud
function valiAnsambel() {
    let abba=document.getElementById("abba");
    let the=document.getElementById("the");
    let system=document.getElementById("system");
    let dogs=document.getElementById("dogs");
    let vastus=document.getElementById("vastus");

    let valik="";

    if(abba.checked){
        valik+=abba.value+", ";
    }
    if(the.checked){
        valik+=the.value+", ";
    }
    if(system.checked){
        valik+=system.value+", ";
    }
    if(dogs.checked){
        valik+=dogs.value+", ";
    }

    vastus.innerHTML="Sinu valitud muusikud:" + valik;
    vastus.style.color="red";
}

function kirjutaArvamus(){
    let arvamus=document.getElementById("arvamus");
    let arvamusVastus=document.getElementById("arvamusVastus");

    arvamusVastus.innerHTML="Sinu arvamus: "+arvamus.value;
    arvamusVastus.style.color="red";
}

function kirjutaTunnid(){
    let tundiVastus=document.getElementById("tundiVastus");
    let tundi=document.getElementById("tundi")

    tundiVastus.innerHTML="Sa kuulad muusikat " + tundi.value + " tundi pأ¤evas";
    tundiVastus.style.color="red";
}

function valiRaadioKuulamine(){
    let raadioVastus=document.getElementById("raadioVastus");
    let jah=document.getElementById("jah");
    let ei=document.getElementById("ei");

    if(jah.checked){
        raadioVastus.innerHTML="Raadio kuulamine: jah";
    }
    else if(ei.checked){
        raadioVastus.innerHTML="Raadio kuulamine: ei";
    }
    raadioVastus.style.color="red";
}