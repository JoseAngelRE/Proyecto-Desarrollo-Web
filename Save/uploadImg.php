<?php
session_start();

$message = ''; 
$errorMessage = true;
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // sanitize file-name
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'gif', 'png');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      
      // directory in which the uploaded file will be moved
      $uploadFileDir = '../imagenesUsuarios/';
      if (!file_exists($uploadFileDir)) {
        mkdir($uploadFileDir, 0777);
      }
      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $errorMessage = false;
      }
      else 
      {
        $message = 'Error al mover el archivo. Consulte con el administrador de la pagina.';
      }
    }
    else
    {
      $message = 'Formato de archivo incorrecto. Formatos de imagen aceptados: ' . implode(', ', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'Error en la carga del archivo. Por favor revice el siguiente error.<br>';
    $message .= 'Upload File error:' . $_FILES['uploadedFile']['error'];
  }
}
$_SESSION['message'] = $message;
if(!$errorMessage){
  echo  "<script type='text/javascript'>";
  echo "window.opener.location.reload();";
  echo "window.close();";
  echo "</script>";
}else{
  header("Location: ../pags/subirImg.php");
}