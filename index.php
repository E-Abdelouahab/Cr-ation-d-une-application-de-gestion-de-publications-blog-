<?php

// session_start();
// if(empty($_SESSION['username'])){
//   header('location : login.php');
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.scss">
    <title>Document</title>
</head>
<body>
    
     <ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="admin/add.php">add post</a></li>
  <li style="float:right"><a href="logout.php">logout</a></li>
</ul>
     <main>
  
  <section class="article">
    <img src="https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" alt="home layout">
    <div class="text-intro">
    <h1>Every Design Has a Story</h1>
      <p>The pursuit of effective use of space, user well-being and functional design has contributed to the development of the contemporary interior design profession. The profession of interior design is separate and distinct from the role of interior decorator.</p>
    </div>
    <div class="text-body">
    <p>Throughout the 17th and 18th century and into the early 19th century, interior decoration was the concern of the homemaker, or an employed upholsterer or craftsman who would advise on the artistic style for an interior space. Architects would also employ craftsmen or artisans to complete interior design for their buildings.</p>
      <p>In the mid-to-late 19th century, interior design services expanded greatly, as the middle class in industrial countries grew in size and prosperity and began to desire the domestic trappings of wealth to cement their new status. Large furniture firms began to branch out into general interior design and management, offering full house furnishings in a variety of styles.</p>
        <p>This business model flourished from the mid-century to 1914, when this role was increasingly usurped by independent, often amateur, designers. This paved the way for the emergence of the professional interior design in the mid-20th century.</p>
    </div>
  </section>
  
</main>
</body>
</html>