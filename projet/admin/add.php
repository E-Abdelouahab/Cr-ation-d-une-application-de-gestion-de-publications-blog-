


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="row">
    <div class="col-md-12">
      <form action="uploads.php" method="post" enctype="multipart/form-data">
        <h1> add article </h1>
        
        <fieldset>
          
          
        
          <label for="name">title:</label>
          <input type="text" id="name" name="title">
          <label>description:</label>
          <input type="text" id="name" name="desc">
          <label>image:</label>
          <input type="file" id="name" name="image">
          
        </fieldset>
    
       
        <button type="submit">Add Post</button>
        
       </form>
        </div>
      </div>
      
</body>
</html>