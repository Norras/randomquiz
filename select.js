function selectchap(){
    var select=document.querySelector(".submitselect");
    var input=document.querySelector("#newchapter");
    const regexp=/(.*)(addnewchap)/;
    var value=select.value.match(regexp);
    if (value!=null){
        input.style.display="block";
        select.style.borderRadius="0px";
    } else {
        input.style.display="none";
        select.style.borderRadius="0px 6px 6px 0px";
    }
}

function selectsub(){
    var select=document.querySelector(".submitselect");
    var input=document.querySelector("#newmatiere");
    var input2=document.querySelector("#newchapter");
    var button=document.querySelector("#getback");
    if (select.value=='newfromnew'){
        button.style.display="block";
        input.style.display="block";
        select.style.display="none";
        input2.style.display="block";

    }
}

function backbutton(){
    var select=document.querySelector(".submitselect");
    var input=document.querySelector("#newmatiere");
    var button=document.querySelector("#getback");
    var input2=document.querySelector("#newchapter");
    input2.style.display="none";
    button.style.display="none";
    select.style.display="block";
    input.style.display="none";
    select.value="";
}