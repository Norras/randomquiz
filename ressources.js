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
function change(){
    document.getElementById('displayquestions').submit();
}
function ajaxdelete(){
    if (confirm('Voulez-vous vraiment supprimer toutes les questions ?')){
        var xhr=new XMLHttpRequest();
        xhr.open('POST','deleteallfiles.php');
        xhr.onload=function(){
            alert(xhr.response);
        };
        xhr.send(new FormData(deleteform));
    }
}
function ajaxpost(){
    var xhr=new XMLHttpRequest();
    xhr.open('POST','write.php');
    xhr.onload=function(){
        alert(xhr.response);
    };
    xhr.send(new FormData(submitquiz));
}

function showcheckbox(button){
    var labels=document.querySelectorAll("label>input");

    if (button.getAttribute("value")=="Sélectionner"){
        labels.forEach(function(label){
            label.style.display="block";
        });
        document.querySelector("#deletebutton").style.display="block";
        document.querySelector("#selectall").style.display="block";
        button.setAttribute("value","Annuler");
    } else {
        labels.forEach(function(label){
            label.style.display="none";
        });
        document.querySelector("#selectall").style.display="none";
        document.querySelector("#deletebutton").style.display="none";
        button.setAttribute("value","Sélectionner");
    }


}

function selectall(button){
    
    if (button.getAttribute("value")=="Tout sélectionner"){
        var checkboxes=document.querySelectorAll("input[type=checkbox]");
        checkboxes.forEach(function(checkbox){
            checkbox.checked=true;
        });
        button.setAttribute("value","Tout déselectionner");
    } else {
        var checkboxes=document.querySelectorAll("input[type=checkbox]");
        checkboxes.forEach(function(checkbox){
            checkbox.checked=false;
        });
        button.setAttribute("value","Tout sélectionner");
    }

}