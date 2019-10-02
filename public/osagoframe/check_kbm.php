<?

  $_POST['key'] = 'gg';
  //$_POST['domain']=$_SERVER['SERVER_NAME'];
  
  if( $curl = curl_init() ) {
  $ch = curl_init('http://calc.kasko10.ru/check_kbm.php');          
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);                                                                  
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
                                                                      
 
    $result = curl_exec($ch);
	
	echo $result;
  }