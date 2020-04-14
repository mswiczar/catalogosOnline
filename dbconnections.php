<?php
function dbconnect ()
{
		if (isset($GLOBALS['db_cap']))
		{
		
		}
		else
		{
        	$GLOBALS['db_cap'] = mysql_connect("XXX","XXXX","XXXX",FALSE);
        	if (!mysql_select_db("XXXX",$GLOBALS['db_cap']))
        	{
                die(mysql_error());
       		}
       	}
}

?>
