<?php
	$displayMessages = 10;
	$displayIndex=0;
	$db = new SQLite3('db/db.sqlite');
	$results = $db->query("SELECT * FROM (SELECT * FROM inbox ORDER BY UpdatedInDB DESC LIMIT 0,${displayMessages}) ORDER BY UpdatedInDB ASC");
	while($row = $results->fetchArray()) {

		echo "<div class='panel panel-default'>";
			echo "<div class='panel-body'>";
				echo "<div class=\"thumbnail sms col-md-1\">";
					echo "<img src=\"assets/images/msg.png\" alt=\"sms\">";
				echo "</div>";
				$splitted = explode(" ", $row['UpdatedInDB']);
				echo "<span class=\"sms\">";
				echo $row['TextDecoded'];
				echo "</span>";
				echo "<br />";
				echo "<span class=\"timestamp\">" . $splitted[1] . "</span> ";
			echo "</div>";
		echo "</div>";
		$displayIndex++;
	}

	$db->close();

?>
