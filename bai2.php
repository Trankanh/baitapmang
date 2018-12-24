<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="POST">
            Nhập vào mảng: <input type="text" name="mang" value=""/> 
            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
    </form>
    <?php

    function tao_mang($str)
    {
        $mang = explode(",",$str);
        print_r($mang);
        return $mang;
    }
     function loai_bo($mang)
    {
        $mang_moi = array();
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
    
   if(isset($_POST['form_click']))
    {
        $ds = tao_mang($_POST['mang']);
        var_dump(loai_bo($ds));
    }

?>
</body>
</html>