<?php
	$mysqli = new mysqli("localhost", "konkooria_ms", "!@#(*&", "konkooria_map");
	$sql = "SELECT * FROM `locations` ORDER BY dt DESC LIMIT 5";
	$result = $mysqli->query($sql);
	
	if ($result->num_rows > 0) {
		$i=1;
		while($row = $result->fetch_assoc()) {
			echo 'var test'.$i.'=L.marker(['.$row["lat"].', '.$row["lon"].'],{opacity:"'.(1-0.13*$i).'"}).addTo(layerGroup);';
			$i++;
		}
	}
?>