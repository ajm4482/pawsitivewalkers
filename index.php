<!DOCTYPE html>
<html lang = "en-US">
 <?php
 	function OpenConnection()
{
    try
    {
        echo "1";
        $serverName = "tcp:pawsitivedogs.database.windows.net,1433";
        $connectionOptions = array("Database"=>"Pawsitive",
            "Uid"=>"andymedina11@pawsitivedogs.database.windows.net", "PWD"=>"HackTX1!");
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        echo "2";
        if($conn == false)
        {
            echo "Saub connection is false"
            die(FormatErrors(sqlsrv_errors()));
        }
    }
    catch(Exception $e)
    {
        echo("Error!");
    }
}
function ReadData()
{
    try
    {
        echo "3";
        $conn = OpenConnection();
        $tsql = "SELECT [CompanyName] FROM SalesLT.Customer";
        $getProducts = sqlsrv_query($conn, $tsql);
        if ($getProducts == FALSE)
        {
            echo "dieee";
            die(FormatErrors(sqlsrv_errors()));
        }
        $productCount = 0;
        echo "4";
        while($row = sqlsrv_fetch_array($getProducts, SQLSRV_FETCH_ASSOC))
        {
            echo($row['CompanyName']);
            echo("<br/>");
            $productCount++;
        }
        echo "5";
        sqlsrv_free_stmt($getProducts);
        sqlsrv_close($conn);
    }
    catch(Exception $e)
    {
        echo("Error!");
    }
}
echo "6";
ReadData();
echo "7";
?>
 </body>
</html>
