<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
<script src="assets/onclick.js"></script>
<script src="assets/uploads/upload.js"></script>

</head>
<body>
    <div class="form-div">
<form action="#" method="post" enctype="multipart/form-data">
  <label for="first name">First name:</label><br>
  <input type="text" id="first_name" name="first_name" size="30"><br><br>
  <label for="last name">Last name:</label><br>
  <input type="text" id="last_name" name="last_name" size="30"><br><br>
  <label for="number">Number:</label><br>
  <input type="text" id="m_number" name="m_number" size="30"><br><br>
  <input type="file" name="upload_file" id="upload_file"><br><br>
  <input type="submit" value="upload" class="upload-file-button"> <br><br>
  <input type="submit" value="Submit" class="submit">
</form>
</div>
</body>
</html>