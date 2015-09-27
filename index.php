<!DOCTYPE html>
<html lang = "en-US">
 <?php
 	function OpenConnection()
{
    try
    {
        echo "1";
        $serverName = "tcp:pawsitivedogs.database.windows.net,1433";
        $connectionOptions = array("Database"=>"PawsitiveDogs",
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
        echo "622";
        $conn = OpenConnection();
        $sql = "INSERT INTO dbo.Dog VALUES (Rosco Jenkins,10)";
        $stmt= sqlsrv_query( $conn, $sql );
        if(!$stmt)
        {
            echo "Error: Doesn't Query";
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
