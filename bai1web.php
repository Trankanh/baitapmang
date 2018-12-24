<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
            
    		function solon_sobe($mang)
    		{
  
		        if(is_array($mang))
		        {

		            $min = $mang[0];
		            $max = $mang[0];

		            $x = count($mang);
		            for ($i = 0; $i < $x ; $i++)
		            {
		                if(is_numeric($mang[$i]))
		                {
		                    if($min > $mang[$i])
		                        $min=$mang[$i];
		                    if($max < $mang[$i])
		                        $max=$mang[$i];       
		                }
		                else
		                    return false;
		            }
		            return [$min, $max];
		        }
		        else 
		            return false;
    		}
    	
   			if(isset($_POST['form_click']))
            {
            	$ds = tao_mang($_POST['mang']); 	    		 
	   			var_dump(solon_sobe($ds));
            }
           ?>
    </body>
</html>