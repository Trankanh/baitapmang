<?php
	 function loai_bo($mang)
    {
    	$mang_moi = [];
        $x = count($mang);
        for ($i = 0; $i < $x; $i++)
        {
            if(!in_array($mang[$i],$mang_moi))
            {
             	array_push($mang_moi,$mang[$i]);
            }
                          
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
    $ds = array(1,6,8,2,5,14,3,6);
 	in_mang(loai_bo($ds));

?>