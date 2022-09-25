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
    if (select.value=='nouvelle'){
        input.style.display="block";
        select.style.display="none";
        input2.style.display="block";
    }
}