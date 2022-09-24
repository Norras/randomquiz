function showcheckbox(button){
    var labels=document.querySelectorAll("label>input");

    if (button.getAttribute("value")=="Sélectionner"){
        labels.forEach(function(label){
            label.style.display="block";
        });

        document.querySelector("#selectall").style.display="block";
        button.setAttribute("value","Annuler");
    } else {
        labels.forEach(function(label){
            label.style.display="none";
        });
        document.querySelector("#selectall").style.display="none";
        button.setAttribute("value","Sélectionner");
    }


}

function selectall(){
    
}