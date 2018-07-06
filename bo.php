<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css" />
  <meta charset="utf-8">
  <title>Единое окно - все ссылки в одном месте!</title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <!-- Добавляем стили Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Добавляем js Bootstrap -->
  <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="bootstrap/js/clock.js"></script>
</head>
<body>
<style>
  body {
    background-image: url(assets/icons/back.jpg);
    background-attachment:fixed;
    background-size:cover;
  }
</style>



<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-danger text-white mt-3 rounded mybtn">
  <a href="#" class="lin">Вернуться<br><img class="img-fluid" src="assets/icons/logo.png"></a>


   <div class="collapse.show navbar-collapse" id="navbarSupportedContent">


	<div class="col-sm-12 text-right">
	<div  class="row">
	<div id="doc_time" class="col-sm-12">
		 <script type="text/javascript">
 clock();
</script>
</div></div>
	<div class="row">
<div class="col-sm-12">
 <?php $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo ' IP-адрес: '.$_SERVER['REMOTE_ADDR'] ?>
<br></div></div>
	<div class="row">
	<div class="col-sm-12">
 Имя компьютера:
	<script language="javascript">
var net = new ActiveXObject("WScript.Network");
document.write(net.ComputerName);
</script>
</div></div>
 
</div>


  </div>
</nav>
  <div class="row mx-auto">
    <div class="col-md-12 bg-success text-white mt-1 rounded mybtn">
      <strong>Основные</strong>
    </div>
  </div>
  <div class="row mx-auto">



    <div class="col-sm-3 m-0">
      <a class="tile red m-1 p-3 rounded mybtn text-center" href="https://mail.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/mail.png" alt="" />
        <div class="row "><div class="col-sm-12  m-0 text-center">Почта</div></div>
      </a>
    </div>

    <div class="col-sm-3 m-0">
      <a class="tile blue m-1 p-3 rounded mybtn text-center" href="https://ufo.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/UFO.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">UFO</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile orange m-1 p-3 rounded mybtn text-center" href="https://otclick.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/review.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Отклик</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile purple m-1 p-3 rounded mybtn text-center" href="https://servicedesk.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/support.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Портал самообслуживания</div></div>
      </a>
    </div>
  </div>



  <div class="row mx-auto">

    <div class="col-sm-3 m-0">
      <a class="tile green m-1 p-3 rounded mybtn text-center" href="https://ts.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/kvorum.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Кворум</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile red m-1 p-3 rounded mybtn text-center" href="https://intranet.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/intranet.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Интранет портал</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile purple m-1 p-3 rounded mybtn text-center" href="https://mop.npflg.ru" target="_blank">

        <img class="icon" src="assets/icons/lukoil.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Лукойл Гарант</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile red m-1 p-3 rounded mybtn text-center" href="https://salesportal.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/salesportal.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">SalesPortal</div></div>
      </a>
    </div>
  </div>

  <div class="row mx-auto">

    <div class="col-sm-3 m-0">
      <a class="tile blue m-1 p-3 rounded mybtn text-center" href="https://life.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/kab.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Личный кабинет</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile ser m-1 p-3 rounded mybtn text-center" href="https://pay.best2pay.net/hcfb/" target="_blank">

        <img class="icon" src="assets/icons/box.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Модуль оплаты ВОХ</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile green m-1 p-3 rounded mybtn text-center" href="https://homer.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/homer.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Web-client</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile blue m-1 p-3 rounded mybtn text-center" href="https://e-learning.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/lerning.png" alt="" />
        <div class="row align-items-center"><div class="col-sm-12  m-0 text-center">Портал обучения</div></div>
      </a>
    </div>
  </div>
  <div class="row mx-auto">
    <div class="col-md-12 bg-success text-white rounded mybtn">
      <strong>Дополнительные</strong>
    </div>
  </div>
  <div class="row mx-auto">



    <div class="col-sm-3 m-0">
      <a class="tile purple m-1 p-3 rounded mybtn text-center" href="http://os-1043.homecredit.ru:8080/group/time-rating" target="_blank">

        <img class="icon" src="assets/icons/timer.png" alt="" />
        <div class="row align-items-center"><div class="col-sm-12  m-0 text-center">Таймер</div></div>
      </a>
    </div>

    <div class="col-sm-3 m-0">
      <a class="tile blue m-1 p-3 rounded mybtn text-center" href="https://equifax.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/Equefax.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Equifax</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile orange m-1 p-3 rounded mybtn text-center" href="http://report.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/otchentost.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Портал отчетности</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile purple m-1 p-3 rounded mybtn text-center" href="https://od.apwebsites.homecredit.ru/od_portal/service_recovery.aspx" target="_blank">

        <img class="icon" src="assets/icons/recovery.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Service Recovery</div></div>
      </a>
    </div>
  </div>
  <div class="col-sm-3 m-0">
    <a class="tile red m-1 p-3 rounded mybtn text-center" href="http://os-0058:8080/RealtyRegistry/" target="_blank">

      <img class="icon" src="assets/icons/regedit.png" alt="" />
      <div class="row"><div class="col-sm-12  m-0 text-center">Реестр объектов</div></div>
    </a>
  </div>
  <div class="row mx-auto">
    <div class="col-md-12 bg-success text-white rounded mybtn">
      <strong>Проверка данных клиента</strong>
    </div>
  </div>
  <div class="row mx-auto">

    <div class="col-sm-3 m-0">
      <a class="tile green m-1 p-3 rounded mybtn text-center" href="https://www.nalog.ru" target="_blank">

        <img class="icon" src="assets/icons/FNS.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">ФНС</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile red m-1 p-3 rounded mybtn text-center" href="https://2gis.ru" target="_blank">

        <img class="icon" src="assets/icons/2gis.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">2ГИС</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile green m-1 p-3 rounded mybtn text-center" href="http://services.fms.gov.ru" target="_blank">

        <img class="icon" src="assets/icons/FMS.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">ФМС</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile red m-1 p-3 rounded mybtn text-center" href="http://fssprus.ru/" target="_blank">

        <img class="icon" src="assets/icons/FSSP.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">ФССП</div></div>
      </a>
    </div>
  </div>
  <div class="row mx-auto">
    <div class="col-md-12 bg-success text-white rounded mybtn">
      <strong>Порталы банка</strong>
    </div>
  </div>
  <div class="row mx-auto">

    <div class="col-sm-3 m-0">
      <a class="tile blue m-1 p-3 rounded mybtn text-center" href="https://ib.homecredit.ru" target="_blank">

        <img class="icon" src="assets/icons/internetbank.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Интернет банк</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile orange m-1 p-3 rounded mybtn text-center" href="https://market.homecredit.ru/" target="_blank">

        <img class="icon" src="assets/icons/market.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Market Place</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile purple m-1 p-3 rounded mybtn text-center" href="https://www.homecredit.ru/" target="_blank">

        <img class="icon" src="assets/icons/web_logo.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Сайт банка</div></div>
      </a>
    </div>
    <div class="col-sm-3 m-0">
      <a class="tile ser m-1 p-3 rounded mybtn text-center" href="https://polza.homecredit.ru/" target="_blank">

        <img class="icon" src="assets/icons/lk_polza.png" alt="" />
        <div class="row"><div class="col-sm-12  m-0 text-center">Личный кабинет Польза</div></div>
      </a>
    </div>
  </div>
  <div class="row mx-auto">



    <div class="col-sm-3 m-0">
      <a class="tile ared m-1 p-3 rounded mybtn text-center" href="https://налоговыйвычет.онлайн/" target="_blank">

        <img class="icon" src="assets/icons/NDFL.png" alt="" />
        <div class="row align-items-center"><div class="col-sm-12  m-0 text-center">НДФЛка.ру</div></div>
      </a>
    </div>
  </div>

</div>




</body>
</html>
