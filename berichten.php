<?php
	$displayMessages = 10;
	$displayIndex=0;
	$db = new SQLite3('db/db.sqlite');
	$results = $db->query("SELECT * FROM (SELECT * FROM inbox ORDER BY UpdatedInDB DESC LIMIT 0,${displayMessages}) ORDER BY UpdatedInDB ASC");
	while($row = $results->fetchArray()) {
		if ($displayIndex < $displayMessages - $bigMessages) {
			echo "<div class='message to'>";

		}else{
			echo "<div class='message big'>";
		}
		$splitted = explode(" ", $row['UpdatedInDB']);
		echo "<span class=\"sms\">";
		echo $row['TextDecoded'];
		echo "</span>";
		echo "<br />";
		echo "<span class=\"timestamp\">" . $splitted[1] . "</span> ";
		echo "</div>";
		$displayIndex++;
	}

	$db->close();

?>
