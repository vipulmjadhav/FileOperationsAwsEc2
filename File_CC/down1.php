<?php

function decrypt($str, $offset) 
{
    $decrypted_text = "";
    $offset = $offset % 26;
    if($offset < 0) 
    {
        $offset += 26;
    }
    $i = 0;
    
    while($i < strlen($str))
    {
        $c = strtoupper($str{$i}); 
        
        if(($c >= "A") && ($c <= 'Z')) 
        {
            if((ord($c) - $offset) < ord("A")) 
            {
                $decrypted_text .= chr(ord($c) - $offset + 26);
            } 
            else 
            {
            $decrypted_text .= chr(ord($c) - $offset);
            }
        
        }
         
        else 
        {
          $decrypted_text .= " ";
      	}
      	
      $i++;
    }
    
    return $decrypted_text;
}


if(!empty($_GET['file']))
{
    $fileName = basename($_GET['file']);
	#echo $fileName;
		
    $filePath = 'uploads/'.$fileName;
	#echo $filePath;

    if(!empty($fileName) && file_exists($filePath))
    {
	$FileData = file_get_contents($filePath);
	$temp = fopen("temp.txt","w");
	shell_exec("chmod 777 temp.txt");
	
	$demofile = "test.txt";
	
	$offset = 3;
	$decr = decrypt($FileData, $offset);
	echo $decr;
	fwrite($temp, $decr); 
	fclose($temp);
	
	header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        shell_exec("rm temp.txt");
        exit;
    }
    
    else
    {
        echo 'The file does not exist.';
    }


}
?>
