<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
    <link rel="stylesheet" href="team.css">
</head>
<body>
  <ul class="nav"> 
    <li><a href="team.php">Our Team</a></li>
    <li><a href="Profile.php">View</a></li>
    <li><a class="active-item" href="Create.php">Create</a></li>      
  </ul>
<form method="POST" action="Profile.php" class="form-create" enctype="multipart/form-data">
  <h1 style="font-family: Arial, Helvetica, sans-serif; position: relative ; top: 10px;">Create</h1>
    <input type="text" id="name" name="name" placeholder="Enter your name:" required><br>
    <textarea name="about" rows="6" cols="40" placeholder="Write About yourself:"></textarea><br>
    <label for="image" class="lbl-upload">Upload your file:</label>
    <input type="file" id="image" name="image" required><br>
    
    <input type="submit" value="Submit" class="submitbtn">
</form>
</body>
</html>