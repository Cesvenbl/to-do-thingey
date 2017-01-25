<!DOCTYPE html>
<?php 
include 'dbscript.php';
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<link href="https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps" rel="stylesheet">
	<title>
		To Do List
	</title>
</head>
<body>
	<div class="jumbotron">
		<h1 id="title">Todo List</h1>
	</div>
	<div id="toDOborder">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4">
				<form>
				<textarea id="task" name="task" placeholder="To-do item here"></textarea><button type="submit" id="add" class="ui-btn ui-icon-plus ui-btn-icon-left knapp">Add to list</button>
				</form>
			</div>
			
			<div>
				<p><?php 
				while ($row = $stmt -> fetch()) { ?>
					<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4">
						<hr id="linje"><p><?php print($row[0])?><button id="remove" class="ui-btn ui-icon-minus ui-btn-icon-left knapp">Remove from list</button></p>
					</div>
				<?php } ?>
				</p>
			</div>
		</div>
	</div>
</body>
</html>