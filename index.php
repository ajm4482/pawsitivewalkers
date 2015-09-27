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
        echo "6";
        if($conn == false)
        {
            echo "No connection";
            die(FormatErrors(sqlsrv_errors()));
        }
        return $conn;
    }
    catch(Exception $e)
    {
        echo("Error!");
    }
}
function WriteData()
{
    try
    {
        echo "6";
        $conn = OpenConnection();
        $tsql = "INSERT INTO SalesLT.Customers (FirstName) VALUES(Rosco Jenkins,Dank,Danky)";
        if (!sqlsrv_query($conn, $tsql))
        {
            echo "dieee";
            die(FormatErrors(sqlsrv_errors()));
        }
        sqlsrv_close($conn);
    }
    catch(Exception $e)
    {
        echo("Error!");
    }
}
echo "6";
WriteData();
echo "7";
?>
 </body>
</html>
