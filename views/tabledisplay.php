<?php
$rquery = mysql_query('SELECT * FROM bugs');
		echo '<table >';
		echo '<tr><th>ID</th><th>Description</th><th>Project</th><th>category</th><th>Priority</th><th>Assigned To</th><th>Status</th></tr>';
		while($row = mysql_fetch_assoc($rquery))
		{
			
			echo '<tr id=content><td id="cid">'.$row['ID'].'</td><td id="cdescription"><a id="mouse">'
			.$row['description'].'</a></td><td id="cproject">'.$row['project'].'</td><td id="ccategory">'
			.$row['category'].'</td><td id="cpriority">'.$row['priority'].'</td><td id="cassignedto">'.
			$row['assigned_to'].'</td><td id="cstatus">'.$row['status'].'</td></tr>';
		}
		echo '</table>';
?>