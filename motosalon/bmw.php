<?php
session_start();
    require_once 'vendor/connect.php';
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link  rel='stylesheet' href="style.css">
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="fony">
<div id="moto" class="featur text-centerd ">
		
			<div class="container fonun">
					
					<div class="cole feat">
						<div class="card" style="width: 18rem;">
  <img src="images/m-b.jpg" class="imgy" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php $name = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM name WHERE id_name = 4"));
  	  $_SESSION['name'] = [ "brand" => $name['brand'], "model" => $name['model'] ]; ?><?= $_SESSION['name']['brand'] .' '. $_SESSION['name']['model']?></h5>
    <p class="card-text">Тут може бути додаткова інформація.</p>
    <a href="bmw1.php" class="btn btn-primary" target="_self"><?php $tovar = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM tovar WHERE id_tovar = 4")); $_SESSION['tovar'] = [ "price" => $tovar['price'] ]; ?><?= $_SESSION['tovar']['price'] ?>$</a>
  </div>
</div>
					</div>
				<!-- 	<div class="cole feat">
						<div class="card" style="width: 18rem;">
  <img src="images/m-y6.jpg" class="imgy" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div> -->
					
</div>

</div>
<div id="tel" class="pre-footer">
    <div class="sotliv">
        <!-- <base target="_blank"> -->
                    <div class="sot">
                        <a href="https://twitter.com/i/flow/login" target="_blank"><img title=""class="sotimg" src="images/tv4.png" alt="Twitter" />    </a>
                    </div>
                    <div class="sot" >
                        <a href="https://uk-ua.facebook.com/" target="_blank"><img title=""class="sotimg" src="images/fe1.png" alt="Facebook" /></a>
                    </div>
                    <div class="sot">
                        <a href="https://www.instagram.com/accounts/login/" target="_blank"><img title=""class="instimg" src="images/in5.png" alt="Instagram" /></a>
                    </div>
                </div>
    <div class="container">
        
        <div class="container-inner">
            <div class="row" id="rowq">
                <div id=rw class="col-sm-col-sm-6 col-lg-3">

                    <div class="sp-column">
                        <div class="sp-module">
                            <div class="custom">
    <p>
        <span class="white" style="font-size: 16pt;">
        <strong >м. Львів<br><br></strong>
        </span>
         <span class="white" style="font-size: 14pt;">вул. Городецька<br></span>
         <span class="white" style="font-size: 14pt;">тел.<a class="tel" href="tel:+380683910161" target="_self">+380 68 391-01-61</a> </span>
    </p>
<div>
    <span class="white" style="font-size: 14pt;">Пн - Пт: 10:00 - 18:00</span><br>
    <span class="white" style="font-size: 14pt;">Сб - Нд: вихідні</span>
    </div>
<p>&nbsp;</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>