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
    
      <div class="container fonu">
        <div class="se" style="text-align: center;"><h1 ><?php $name = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM name WHERE id_name = 5"));
      $_SESSION['name'] = [ "brand" => $name['brand'], "model" => $name['model'] ]; ?><?= $_SESSION['name']['brand'] .' '. $_SESSION['name']['model']?></h1></div>
         <div class="har">
            <div>
              <h3 class="su">Характеристики</h3>
            </div>
            <div>
            <h4 class="si">Двигун:</h4>
            <p>
              <?php $motor = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM motor WHERE id_motor = 5"));
      $_SESSION['motor'] = [ "cylinder" => $motor['cylinder'], "power" => $motor['power'], "fuel" => $motor['fuel'], "obiem" => $motor['obiem'], "max_torque" => $motor['max_torque'], "max_speed" => $motor['max_speed'] ]; ?>
             <span class="sa">Кількість циліндрів: <?= $_SESSION['motor']['cylinder'] ?></span> <br>
             <span class="sa">Потужність: <?= $_SESSION['motor']['power'] ?> л.с.</span> <br>
             <span class="sa">Паливо: <?= $_SESSION['motor']['fuel'] ?></span> <br>
             <span class="sa">Об'єм: <?= $_SESSION['motor']['obiem'] ?> cm<sup><small>3</small></sup></span> <br>
             <span class="sa">Макс. обертальний момент: <?= $_SESSION['motor']['max_torque'] ?> Hm</span><br>
             <span class="sa">Максимальна шв. : <?= $_SESSION['motor']['max_speed'] ?> км/г</span>
            </p></div>
            <div>
            <h4 class="si">Габарити:</h4>
            <p>
             <?php $size = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM size WHERE id_size = 5"));
      $_SESSION['size'] = [ "height" => $size['height'], "width" => $size['width'], "length" => $size['length'], "F_t_v" => $size['F_t_v'], "weight" => $size['weight'], "іeat_h" => $size['іeat_h'], "perm_mass" => $size['perm_mass'] ]; ?>
             <span class="sa">Висота: <?= $_SESSION['size']['height'] ?> мм</span> <br>
             <span class="sa">Ширина: <?= $_SESSION['size']['width'] ?> мм</span> <br>
             <span class="sa">Довжина: <?= $_SESSION['size']['length'] ?> мм</span> <br>
             <span class="sa">Об'єм паливного бака: <?= $_SESSION['size']['F_t_v'] ?> л</span> <br>
             <span class="sa">Споряджена маса: <?= $_SESSION['size']['weight'] ?> кг</span><br>
             <span class="sa">Висота по сидінню: <?= $_SESSION['size']['іeat_h'] ?> мм</span><br>
             <span class="sa">Макс. допустима маса: <?= $_SESSION['size']['perm_mass'] ?> кг</span>
            </p></div>
                        <div>
            <h4 class="si">Трансмісія:</h4>
            <p>
              <?php $trasm = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM trasm WHERE id_trasm = 5"));
      $_SESSION['trasm'] = [ "gearbox" => $trasm['gearbox'], "drive_type" => $trasm['drive_type'], "n_gears" => $trasm['n_gears'], "brakes_p" => $trasm['brakes_p'], "brakes_z" => $trasm['brakes_z'] ]; ?>
             <span class="sa">Коробка передач: <?= $_SESSION['trasm']['gearbox'] ?></span> <br>
             <span class="sa">Тип приводу: <?= $_SESSION['trasm']['drive_type'] ?></span> <br>
             <span class="sa">Кількість передач: <?= $_SESSION['trasm']['n_gears'] ?></span> <br>
             <span class="sa">Передні гальма: <?= $_SESSION['trasm']['brakes_p'] ?></span><br>
             <span class="sa">Задні гальма: <?= $_SESSION['trasm']['brakes_z'] ?></span>
            </p></div>
             </div>
            <div class="cole1 feat">

           <img class="litimg" src="images/m-y6.jpg" >
          
          </div>
         
          
          <div class="cnop"><a href="#" style="font-size: 1.8em;" class="btn btn-success">
            <?php $tovar = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM tovar WHERE id_tovar = 5")); $_SESSION['tovar'] = [ "price" => $tovar['price'] ]; ?><?= $_SESSION['tovar']['price'] ?>$</a></div>
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