<?php
     function chuyen_ky_tu($mang)
    {
    	//$mang_can_ktra = array(a,e,i, o,u,y);
        $x = count($mang);
        $mang_moi = array();
        //$y = count($mang_can_ktra);
        for($i = 0; $i < $x; $i++)
        {	
        	$strlen = strlen($mang[$i]);
        	$chuoi = '';
           for($j = 0; $j < $strlen; $j++)
           {
           		
           		$char = substr($mang[$i],$j,1);
           		if(preg_match('/[aeiouy]/', $char))
           		{
           			$char = strtoupper($char);
           		}
           		$chuoi .= $char;
           }
           array_push($mang_moi,$chuoi);
        }
        return $mang_moi;
          
        
    }
    function in_mang($mang)
    {
    	
        foreach ($mang as $value) 
        {
             echo $value.'-----';
        }   
    }
    $ds = array('aaa','kanh io');
 	in_mang(chuyen_ky_tu($ds));



?>