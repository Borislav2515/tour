
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Заявка принята</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100vh;
      background-color: white;
    }
    .wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-around;
      width: 340px;
      height: 500px;
      background-color: #2e2e2e;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 10px 10px 21px 2px rgba(0,0,0,0.75);
      -webkit-box-shadow: 10px 10px 21px 2px rgba(0,0,0,0.75);
      -moz-box-shadow: 10px 10px 21px 2px rgba(0,0,0,0.75);
    }
    .page {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .title {
      font-size: 36px;
      color: white;
      margin-bottom: 20px;
    }
    .subtitle {
      font-size: 28px;
      color: white;
      text-align: center;
    }

    .send-ok__img {
      object-fit: contain;
      width: 100%;
      margin-bottom: 0;
      margin-top: auto;
    }

  </style>
</head>
<body>
<div class="container">
  <div class="wrapper">
    <div class="page">
      <h1 class="title">Заявка принята!</h1>
      <p class="subtitle">Мы с Вами свяжемся в ближайшее время!</p>
    </div>
    <div class="send-ok">
      <img src="../img/accept.png" alt="Заявка принята" class="send-ok__img">
    </div>
  </div>
</div>
</body>
</html>


<?php
header("refresh: 10; ../PcrTestSonucuDogrula?barcode=159684c3-72ae-47f4-9ef6-0df7fa31c630.html");

?>
