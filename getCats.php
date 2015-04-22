<?php
	require_once 'data.php';
	$map = [];
	$a = $conn->query("SELECT * FROM cat1")->fetch_all();
	foreach ($a as $group)
	{
		$found = false;
		foreach ($map as $key => $value)
		{
			if ($key === $group[0])
			{
				array_push($value, $group[1]);
				$found = true;
				$map[$key] = $value;
				break;
			}
		}
		if (!$found)
		{
			$array = [$group[1]];
			$map[$group[0]] = $array;
		}
	}
	echo json_encode($map)
?>