<?php
	 function sap_xep($mang)
    {
        $x = count($mang);
        for ($i = 0; $i < $x - 1; $i++)
        {
                 
            for ($j = $i + 1; $j < $x; $j++)
            {
                if ($mang[$i] == $mang[$j])
               
                    unset($mang[$j]); //loai bo cac phan tu trung lap trong mang              
            }      
        }
        foreach ($mang as $key => $value) 
        {
             echo '  '.$value;
        } 

    }
    
    $ds = array(1,6,8,2,5,14,3,6);
    sap_xep($ds);

?>