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
    if(isset($_POST['form_click']))
    {
        $ds = tao_mang($_POST['mang']);
        var_dump(chuyen_ky_tu($ds));
    }


?>
</body>
</html>