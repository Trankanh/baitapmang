<?php
        //ham doi cho 2 phan tu
    // function swap($a,$b)
    // {
    //     $t = $a;
    //     $a = $b;
    //     $b = $t;
    //     //echo 'so a la:'.$a.'+'.'so b la:'.$b;
    // }
     // Sap xep mang theo thu tu tang dan, su dung thuat toan chon truc tiep
    function sap_xep($mang)
    {
        $x = count($mang);
        for ($i = 0; $i < $x - 1; $i++)
        {
            // Tìm vị trí phần tử nhỏ nhất
            $min = $i;
            for ($j = $i + 1; $j < $x; $j++)
            {
                if ($mang[$j] < $mang[$min])
                {
                    $min = $j;
                }
            }
        $temp = $mang[$i];
        $mang[$i] = $mang[$min];
        $mang[$min] = $temp;
        }

        echo 'So nho nhat la:'.$mang[0].'<br>'.'so lon nhat la:'.array_pop($mang).'<br>';
        printf('Mang moi la:  ');
        $ds = array($mang[0],array_pop($mang));
        foreach ($ds as $key => $value) 
        {
             echo '  '.$value;
        }  
    }
    $ds = array(1,6,8,2,5,14,3,6);
    sap_xep($ds);
?>