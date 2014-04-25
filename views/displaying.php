<html>
	<head>
		<title>Page for Updating</title>
	</head>
	<body>
		<form action="" method="post" name="update">
			<table >
				<tr id=content>
					<td>id:</td>
					<td><input type="text" name="id" value=<? echo $row['ID'] ?> ></td>
				</tr>
				<tr>
					<td>description</td>
					<td id="cdescription"><a id="mouse"><input type="text" name="cdescription" value=<? echo $row['description'] ?> ></a></td>
				</tr>
				<tr>
					<td>project</td>
					<td id="cproject"><input type="text" name="project" value=<? echo $row['project']  ?> ></td>
				</tr>
				<tr>
					<td>category</td>
					<td id="ccategory"><input type="text" name="category" value=<? echo $row['category'] ?> ></td>
				</tr>
				<tr>
					<td>prioirity</td>
					<td id="cpriority"><input type="text" name="priority" value=<? echo $row['priority'] ?> ></td>
				</tr>
				<tr>
					<td>assigned</td>
					<td id="cassignedto"><input type="text" name="assgn" value=<? echo $row['assigned_to'] ?> ></td>
				</tr>
				<tr>
					<td>status</td>
					<td id="cstatus"><input type="text"  name="status" value=<? echo $row['status'] ?> ></td>
				</tr>
			</table><br>
			<input type="submit" name="update"/>
		</form>
	</body>
</html>