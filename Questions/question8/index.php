<?php
// Set the maximum file size (3MB)
$maxFileSize = 3 * 1024 * 1024;  // 3MB in bytes

// Set allowed image file types
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

// Directory where uploaded images will be stored
$uploadDir = 'uploads/';

// Create the uploads directory if it doesn't exist
if (!is_dir($uploadDir)) {
  mkdir($uploadDir, 0777, true);
}

// Initialize error and success messages
$errorMsg = '';
$successMsg = '';

// Handle the file upload
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
  $image = $_FILES['image'];
  $imageTmpName = $image['tmp_name'];
  $imageName = basename($image['name']);
  $imageType = mime_content_type($imageTmpName);
  $imageSize = $image['size'];

  // Validate file type
  if (!in_array($imageType, $allowedTypes)) {
    $errorMsg = 'Only JPEG, PNG, and GIF images are allowed.';
  }
  // Validate file size
  elseif ($imageSize > $maxFileSize) {
    $errorMsg = 'The file size exceeds the maximum limit of 3MB.';
  }
  // If validation passes, move the file to the upload directory
  else {
    $uploadPath = $uploadDir . $imageName;
    if (move_uploaded_file($imageTmpName, $uploadPath)) {
      $successMsg = 'Image uploaded successfully!';
    } else {
      $errorMsg = 'There was an error uploading the image.';
    }
  }
}

// Get the list of uploaded images
$images = glob($uploadDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Gallery</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;
    }

    .gallery img {
      width: 200px;
      height: auto;
      margin: 10px;
    }

    .upload-form {
      margin-bottom: 20px;
    }

    .upload-form input[type="file"] {
      padding: 10px;
    }

    .error-msg,
    .success-msg {
      color: red;
      font-weight: bold;
    }

    .success-msg {
      color: green;
    }
  </style>
</head>

<body>

  <h1>Simple Image Gallery</h1>

  <!-- Display success or error messages -->
  <?php if ($errorMsg): ?>
    <div class="error-msg"><?php echo $errorMsg; ?></div>
  <?php endif; ?>
  <?php if ($successMsg): ?>
    <div class="success-msg"><?php echo $successMsg; ?></div>
  <?php endif; ?>

  <!-- Image upload form -->
  <div class="upload-form">
    <form action="index.php" method="post" enctype="multipart/form-data">
      <label for="image">Choose an image to upload:</label>
      <input type="file" name="image" id="image" required>
      <button type="submit">Upload</button>
    </form>
  </div>

  <h2>Uploaded Images</h2>

  <!-- Display the images in a grid -->
  <div class="gallery">
    <?php foreach ($images as $image): ?>
      <div class="gallery-item">
        <img src="<?php echo $image; ?>" alt="Image">
      </div>
    <?php endforeach; ?>
  </div>

</body>

</html>