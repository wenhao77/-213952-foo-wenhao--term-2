<?php
	require_once("dbh.inc.php");
	require_once("database.php");

	if (empty($_GET["action"])) die("I need an action!");

	$link = connect_to_db($dbServername, $dbUsername, $dbPassword, $dbName);

	if ($link == null)
	{
		echo "ERROR: connection failed!\n";
	}
	else
	{
		switch ($_GET["action"])
		{
			case "list":
				$username =  $_GET["user"];
				$sql = "SELECT * FROM `users` WHERE `username` = '$username'";
				$users = run_query($link, $sql);

				if ($users == null)
				{
					echo "ERROR: query failed!\n";
				}
				else
				{
					$hashedPwd = hash("md5", $_GET["pwd"]);
					foreach ($users as $user)
					{
						echo "User ID: " . $user["id"] . "\n";
						echo "Username: " . $user["username"] . "\n";
						echo "Password: " . $user["password"] . "\n";
						echo "Password matches: " . ($user["password"] == $hashedPwd ? 'true' : 'false') . "\n";
					}
				}
				break;
			case "add":
				$hashedPwd = hash('EtrianOdyssey5', password_default);
				$sql = "INSERT INTO users(user_uid,  user_pwd)
				VALUES('wenhao', '$hashedpwd');";
				run_query($link, $sql);
				echo "User added!";
				break;
			case "remove":
				$sql = "DELETE FROM `users` WHERE `username` = 'Dave'";
				run_query($link, $sql);
				echo "Dave removed!!!";
				break;
		}


	}

?>
