<html>
	<head>
		<title>Display</title>
	</head>
	<body>
		<tr>
			<th>ID</th>
			<th>Description</th>
			<th>Project</th>
			<th>category</th>
			<th>Priority</th>
			<th>Assigned To</th>
			<th>Status</th>
		</tr>
		<tr id=content>
			<td id="cid"><? echo $row['ID'] ?></td>
			<td id="cdescription"><a id="mouse"><? echo $row['description']?></a></td>
			<td id="cproject"><? echo $row['project'] ?></td>
			<td id="ccategory"><? echo $row['category'] ?></td>
			<td id="cpriority"><? echo $row['priority'] ?></td>
			<td id="cassignedto"><? echo $row['assigned_to']?></td>
			<td id="cstatus"><? echo $row['status']?></td>
		</tr>
	</body>
</html>