<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel='stylesheet' href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<title></title>
</head>
<body>

<div class="container-fluid" style="background-color: #ddc7aa78;">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-6 mb-8 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
       
      </a>

      <ul class="nav col-30 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.html"  class="nav-link px-2 link-dark" target="_top">Головна</a></li>
        <li><a href="tovar.html#moto"  class="nav-link px-2 link-dark" target="CONTENT">Мотоцикли</a></li> 
        <li><a href="tovar.html#tel"  class="nav-link px-2 link-dark" target="CONTENT">Контакти</a></li>
        <!-- <li><a href="#"  class="nav-link px-2 link-dark">О нас</a></li> -->
        
      </ul>

      <div class="col-md-3 text-end">
       <ul class="nav me-lg-auto justify-content-center mb-md-0">
            <?php
              if(!$_SESSION['user']){
                echo '<li><a href="login.php" class="btn btn-outline-primary" target="_top">Увійти</a>';
                echo ' <a href="register.php" class="btn btn-danger" target="_top">Реєстрація</a></li>';
              }
              if ($_SESSION['user']) {
                echo '<li><a class="nav-link px-2 text-primary">' . $_SESSION['user']['login'] . '</a></li>';
                echo '<li><a href="vendor/logout.php" class="logout btn btn-outline-danger" target="_top">Вихід</a></li>';
              }
            ?>
          </ul>

      <!--   <a href="login.php" type="button" class="btn btn-outline-primary me-1" target="_top">Увійти</a>
        <a href="register.php" type="button" class="btn btn-danger" target="_top"a>Реєстрація</a> -->
      </div>
    </header>
  </div>
</body>
</html>