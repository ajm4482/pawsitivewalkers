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
        $sql = "INSERT INTO dbo.Dog (ID,Name,Count,Time1,Time2,Time3,Time4,Time5,Time6,TimeDiff,Notes,Kennel,Image) VALUES (Rosco Jenkins,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
        $stmt= sqlsrv_query( $conn, $sql );
if( $stmt === false ) {
    if( ($errors = sqlsrv_errors() ) != null) {
        foreach( $errors as $error ) {
            echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
            echo "code: ".$error[ 'code']."<br />";
            echo "message: ".$error[ 'message']."<br />";
        }
    }
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
