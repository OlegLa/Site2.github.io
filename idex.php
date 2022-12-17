<?
$client_ip = ( !empty($HTTP_SERVER_VARS['REMOTE_ADDR']) ) ? $HTTP_SERVER_VARS['REMOTE_ADDR'] : ( ( !empty($HTTP_ENV_VARS['REMOTE_ADDR']) ) ? $HTTP_ENV_VARS['REMOTE_ADDR'] : getenv('REMOTE_ADDR') );
 
  if ($fp = @fopen("./connects.txt", 'ab'))  {
    fwrite($fp, Date("Y-m-d H:i:s").' '. $_SERVER['REQUEST_URI'].' '.$client_ip."\n");
    fclose($fp);
  }
  ?>
  