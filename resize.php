<?
        include_once "dbconnections.php";
        include_once "simpleImage.php";
        dbconnect ();
		$sql= "select * from marca order by nombre";
		$result = mysql_query ($sql,$GLOBALS['db_cap']);                                                                   
		while ( $r =    mysql_fetch_assoc($result))
       		{
			$imageFUll= "img/".$r['PORTADA'];
			$target_file = "img/min-".$r['PORTADA'];
			$image = new SimpleImage();
			$image->load($imageFUll);
    			$image->scale(10);
		    	$image->save($target_file);	
		}
?>
