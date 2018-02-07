<?php
	function connect_to_db($host, $user, $pass, $database)
	{
		$mysqli = new mysqli($host, $user, $pass, $database);
		
		if ($mysqli->connect_errno) 
			return null;
		
		return $mysqli;
	}

	function run_query($link, $query) 
	{
		if (!$result = $link->query($query)) 
			return null;

		if ($result->num_rows === 0 || $result->num_rows === null) 
			return [];

		$result_array = [];

		while ($data = $result->fetch_assoc()) 
		{
			$result_array[] = $data;
		}

		return $result_array;
	}

	function close_connection($link)
	{
		$link->close();		
	}
?>