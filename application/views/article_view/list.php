<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guestbook</title>
</head>
<body>
	<form action="" method="POST">
		name: <input type="text" name="name" placeholder="Your nickname">
		<br>
		message:
		<br>
		<textarea name="content"></textarea>
		<input type="submit" value="Submit">
	</form>
	<hr>
	<table border="1">
		<tbody>
<?php foreach ($articles as $article) { ?>
			<tr>
				<td><?php echo $article['name']; ?></td>
				<td><?php echo $article['content']; ?></td>
				<td><?php echo $article['createtime']; ?></td>
			</tr>
<?php } ?>
		</tbody>
	</table>
</body>
</html>
