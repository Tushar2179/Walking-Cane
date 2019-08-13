<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>A Simple Responsive Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  
      <link rel="stylesheet" href="style3.css">

  
</head>

<body>

  <header class="header">
  <ul>
    <li class="cor-1"></li>
    <li class="cor-2"></li>
    <li class="cor-3"></li>
    <li class="cor-4"></li>
    <li class="cor-5"></li>
  </ul>
  </header>
<div class="wrap">
  

    <div class="blog">
  <div class="conteudo">
    <div class="post-info">
      Posted by <?php echo $dept ?>
    </div>
    <img src="http://imgs.abduzeedo.com/files/perfect_office/408/cj707decoskaff_08.jpg">
    <h1> <?php echo "".$row["jobname"] ?> </h1>
    <hr>
    <p>
      <?php 
            echo "".$row["about"]."<br>";
        ?>
    </p>
     <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <a href="#" class="continue-lendo">Read more →</a>
  </div>
    <div class="conteudo">
    <div class="post-info">
      Posted by Michael
    </div>
    <img src="https://designculture.com.br/wp-content/uploads/2013/07/14.-flat-design.jpg">
    <h1> Lorem Ipsum Dolor </h1>
    <hr>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
     <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
      <a href="#" class="continue-lendo">Read more →</a>
  </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

</body>

</html>
