<?php
$loggedIn = false;
if (isset($_COOKIES['username']) && isset($_COOKIES['userid']))
{
    
    $dbuser="s_uname";
    $dbpass="s_pwd";
    $db="db";
    
    $connect = OCILogon($dbuser, $dbpass, $db);
    if (!$connect)
    {
        echo "An error has occured connecting to the database";
        exit;
    }
    $query = "SELECT Emp_ID FROM Employee WHERE Emp_Name = '".$username."'";
    
    $result = OCIParse($connect, $query);
    
    if(!$result)
    {
        echo "An error occurred in parsing the sql string '$query'.\n";
        exit;
    }
    $r = OCIExecute($result);
    if(! $r)
    {
        echo "An error occurred in executing the sql '$query'.\n";
        exit;
    }
    $count = OCIRowCount($result);
    
    if ($count == 1)
    {
        $pass = "";
        while ($row = oci_fetch_array($result))
        {
            $pass = $row[0];
        }
        $test = md5($pass);
        
        if ($test == $_COOKIES['security'])
        {
            $loggedIn = true;
        }
    }
}
if (!$loggedIn)
{
    header("Location: {Staff_Login.php}");
}
?>