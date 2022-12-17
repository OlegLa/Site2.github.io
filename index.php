<!DOCTYPE HTML>

<html lang="ua">
<head>
    <title>My site</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?
$client_ip = ( !empty($HTTP_SERVER_VARS['REMOTE_ADDR']) ) ? $HTTP_SERVER_VARS['REMOTE_ADDR'] : ( ( !empty($HTTP_ENV_VARS['REMOTE_ADDR']) ) ? $HTTP_ENV_VARS['REMOTE_ADDR'] : getenv('REMOTE_ADDR') );
 
  if ($fp = @fopen("./connects.txt", 'ab'))  {
    fwrite($fp, Date("Y-m-d H:i:s").' '. $_SERVER['REQUEST_URI'].' '.$client_ip."\n");
    fclose($fp);
  }
 ?>

    <div class="s1"> </div>
    <div class="s2"> </div>
    <div class="s3"> </div>
    <div class="s4"> </div>
    <div class="s5"> </div>
    <div class="s6"> </div>
    <div class="s7"> </div>
    <div class="s8"> </div>
    <div class="s9"> </div>
    <div class="s10"> </div>
    <div class="Text1">Бази відпочинку Вінницької облісті </div>
    <div class="Text2">На цьому сайті зібрані <br>найкращі бази відпочинку 
        <br>Вінницької області згідно <br>з міським рейтингом 
        <br>2020-2022 років.</div>
  <p>
    <iframe class="calendar" src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23F09300&ctz=Europe%2FKiev&showDate=1&showPrint=0&showTabs=0&showCalendars=0&showNav=0&showTz=0&showTitle=1&src=OHFpZ2FrbGpmNWwyODI3cWwxb2R2aTdhMzBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23B39DDB" 
     width="515" height="380"></iframe>
    


    <img class="base" src='img/Title.png'>
</p>
    
    <nav>
        <a href="index.html">Головна</a>
        <a href="map.html">Карта</a>
        <a href="foto.html">Фотоархів</a>
        <a href="video.html">Відеоархів</a>
        <a href="line.html">Посилання</a>
    </nav>

</body>
</html>