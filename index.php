<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" >
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" /></a>
        <p class = "write">Автомойка для машин, улица автомоечная, 67</p>
      </div>
    </nav>  

    <section class="contact">
        <div class="row" >
          <div class="col-md-12">
            <div class = "container" id = "formPlace" margin-top = "100px">

              <h2>Оставьте отзыв о нашем сервисе!</h2>
              
          <form id = "mailForm">
          <input type="text"  id = "hidden" value = <?php echo (int)$_GET['id']; ?>>
          С какой проблемой вы столкнулись?<br>
          <input type="checkbox" name = "trouble" id = "ch1" class = "check" value = "1"> <label for="ch1">Слабое давление воды                     </label><br>
          <input type="checkbox" name = "trouble" id = "ch2" class = "check" value = "2"> <label for="ch2">Плохо пенится пена                     </label><br>
          <input type="checkbox" name = "trouble" id = "ch3" class = "check" value = "3"> <label for="ch3">Слабая пена                            </label><br>
          <input type="checkbox" name = "trouble" id = "ch4" class = "check" value = "4"> <label for="ch4">В боксе грязно                         </label><br>
          <input type="checkbox" name = "trouble" id = "ch5" class = "check" value = "5"> <label for="ch5">Не работает карта лояльности               </label><br>
          <input type="checkbox" name = "trouble" id = "ch6" class = "check" value = "6"> <label for="ch6">Не могу рассчитаться банковской картой или телефоном </label><br>
          <input type="checkbox" name = "trouble" id = "ch7" class = "check" value = "7"> <label for="ch7">Неприветливый администратор                </label><br>
          <input type="checkbox" name = "trouble" id = "ch8" class = "check" value = "8"> <label for="ch8">У администратора нет разменных денег         </label><br>
          <input type="checkbox" name = "trouble" id = "ch9" class = "check" value = "9"> <label for="ch9">Другое                             </label><br>
          <br>Примечание
            <textarea id="message" name="message" class = "form-control"></textarea>
          <br>Имя
            <input type="text" class="form-control" id="name" name="name" value="">
          <br>Номер телефона
            <input type="text" class="form-control" id="phone" name="phone" value="">
          <br>
          
          <button type = "button" id = "sendMail" class = "btn btn-success">Отправить</button>
          </form>
          <div id = "errorMess"></div>
          </div>

          </div>

        </div>
      </div>
    </section>

    <footer class="gradient">
      <div class="container-fluid text-center">
        <span>Talwors Inc. 2021</span>
      </div>
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/formMail.js"></script>  
  </body>
</html>
