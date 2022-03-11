<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"></form>
    <div class="container" style="margin-top: 5px;">
        <label for="main">main heading:<input type="text" name="main_heading" id="main_heading" required></label>
        <label for="w3review">Prescription:</label>
        <textarea id="prescription" name="prescription" rows="2" cols="30" required>
        </textarea><br>
        <label for="content">Content:</label><br>
        <textarea name="content" id="content" cols="30" rows="10" style="width: 70%;" required></textarea><br>
        <input type="button" value="submit">
     </div>
</form>
</body>
</html>