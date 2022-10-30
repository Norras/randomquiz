function ajaxpost(){
    var xhr=new XMLHttpRequest();
    xhr.open('POST','write.php');
    xhr.onload=function(){
        alert(xhr.response);
    };
    xhr.send(new FormData(submitquiz));
}