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