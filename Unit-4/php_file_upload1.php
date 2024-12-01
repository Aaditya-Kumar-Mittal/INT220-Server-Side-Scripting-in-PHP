<?php
if (isset($_POST['upload'])) {
  $files = $_FILES['file'];

  $fileName = $files['name'];
  $fileSize = $files['size'];
  $fileTmpLoc = $files['tmp_name'];
  $fileError = $files['error'];

  $f = explode('.', $fileName);
  $fileExt = strtolower(end($f));
  $allowedExt = array('jpg', 'jpeg', 'png');

  if ($fileError === 0) {
    if (in_array($fileExt, $allowedExt)) {
      if ($fileSize < 200000) {
        $fileNewName = uniqid('TEST_', false);
        $dest = 'uploads/' . $fileNewName . '.' . $fileExt;

        // Debugging the path
        echo "Destination path: $dest";

        if (move_uploaded_file($fileTmpLoc, $dest)) {
          header('Location: index.php?success=true');
          exit();
        } else {
          echo "Error moving the file.";
        }
      } else {
        echo "File size exceeded. Maximum allowed size is 200KB.";
      }
    } else {
      echo "File type not supported. Only JPG, JPEG, and PNG files are allowed.";
    }
  } else {
    echo "There was an error uploading the file. Error code: $fileError.";
  }
}
?>