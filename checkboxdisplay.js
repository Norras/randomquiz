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