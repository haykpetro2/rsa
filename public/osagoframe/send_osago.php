<?

  $_POST['key'] = 'gg';
  $_POST['domain']='halk-insurance.ru';
  
  if( $curl = curl_init() ) {
  $ch = curl_init('https://kaskometr.ru/kalculyator_osago/result');
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);                                                                  
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
                                                                      
 
    $result = curl_exec($ch);
	
	echo $result;
  }