<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
<?php
  $user = "Annisa";
?>

 <div>

  <div class="header"> 
    <header>
      <h1><?php echo"Welcome $user!"; ?></h1>
      <p>how was your day?</p>
    </header>
  </div>

  <div class="left"> 
    
    <a href="index.php">Home<br></a>
    <a href="profile.php">Profile</a>
   
  </div>

  <div class="content"> 
    <h2>Videos</h2>
    <video width="320" height="240" controls>
       <source src="rickroll.mp4" type="video/mp4">
    </video>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem quidem tempore eos pariatur? Assumenda quibusdam laboriosam voluptas sit quaerat,<br> reprehenderit sunt laborum odit a cum! Reiciendis ipsam modi quia et?<br></p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque natus officiis sed nulla provident modi molestiae voluptates quos<br> nesciunt magni aut autem vitae recusandae, delectus ad obcaecati, saepe doloribus sunt!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque natus officiis sed nulla provident modi molestiae voluptates quos<br> nesciunt magni aut autem vitae recusandae, delectus ad obcaecati, saepe doloribus sunt!</p>
  </div>
    <div class="footer"> 
    <footer>
     <p>&copy; Annisa2024</p>
    </footer>
  </div>

</div>
</body>
</html>