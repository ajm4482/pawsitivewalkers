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
        $tsql = "INSERT INTO SalesLT.Customers (CustomerID, NameStyle, Title, FirstName, MiddleName, LastName, Suffix, CompanyName, SalesPerson, EmailAddress, Phone,PasswordHash,PasswordSalt,rowguid,ModifiedDate) VALUES (Rosco Jenkins,S,SOU,NULL,BikeDude,adventure-workspamela,some@email,10294-19293-1,lqocjpqoiqj398qEEQa,13iakwl,aj020maij,2005-08-01 00:00)";
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
