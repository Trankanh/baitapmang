<?php    //0 1 2 3 4 5 
       //5 1 7 2 9 3 
    function solon_sobe($mang)
    {
        if(is_array($mang))
        {
            $min = $mang[0];
            $max = $mang[0];

            $x = count($mang);
            for ($i = 0; $i < $x ; $i++)
            {
                if(is_int($mang[$i]))
                {
                    if($min > $mang[$i])
                        $min=$mang[$i];
                    if($max < $mang[$i])
                        $max=$mang[$i];       
                }
                else
                   return fasle;
            }
            return [$min, $max];
        }
        else return fasle;
    }
    function in_mang($mang)
    {
        foreach ($mang as $key => $value) 
        {
             echo $value.'-----';
        }   
    }

    $ds = array(1,6,8,2,5,14,3,6);
    solon_sobe($ds);
    in_mang(solon_sobe($ds));
?>