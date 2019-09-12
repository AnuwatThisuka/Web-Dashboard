<html>
<?php
session_start();
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "sncdashboard";
$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strSQL = "SELECT * FROM `login` WHERE Username = '".mysqli_real_escape_string($objCon,$_POST['Username'])."' 
	and Password = '".mysqli_real_escape_string($objCon,$_POST['password'])."'";
    $objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			header("location:Login.php");
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ADMIN")
			{
				header("location:admin.php");
				echo "แอดมินนะจ๊ะ";
				echo "แอดแอด";
			}
			else
			{
                header("location:Home.php");
                //echo "เดกกะโปก";
			}
	}
	mysqli_close($objCon);
	?>
</html>