var fileobj;
function upload_file(e) {
    e.preventDefault();
    fileobj = e.dataTransfer.files[0];
    ajax_file_upload(fileobj);
}
  
function file_explorer() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
        ajax_file_upload(fileobj);
    };
}
  
function ajax_file_upload(file_obj) {
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('uploadedFile', file_obj);
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../backendcodigo/uploadImg.php");
        xhttp.onload = function() {
            if (this.readyState == 4 && xhttp.status == 200) {
                document.getElementById("errorMessage").innerHTML = this.responseText;
                eval(this.responseText);
            } 
        }
 
        xhttp.send(form_data);
    }
}