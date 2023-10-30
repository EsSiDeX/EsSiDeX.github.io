<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Живой поиск</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="ui/jquery-ui.css">
	<link rel="stylesheet" href="style.css">
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

	<div class="container content">
<form class="form-horizontal" method="post" id="form">
	<div class="form-group">
		<label for="date" class="col-sm-2 control-label">Поиск</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="search" name="search" placeholder="Поиск...">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-6">
			<button type="submit" id="submit" class="btn btn-primary">Отправить</button>
			<div></div>
		</div>
	</div>
</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="ui/jquery-ui.js"></script>

	<script>
$(function(){

	$("#search").autocomplete({
		source: 'search.php',
		minLength: 1,
		select: function( event, ui ){
			window.location = 'search.php?search=' + encodeURIComponent(ui.item.value);
		}
	});

});
	</script>

</body>
</html>