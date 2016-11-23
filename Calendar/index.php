<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<head>
<title>Calendar</title>
<link type="text/css" rel="stylesheet" href="stylo.css"/>
<ul class="menu">
<li class="menu"><a href="index.php">Calendar</a></li>
<li class="menu"><a href="../Edit/form.html">Add Birthday</a></li>
<li class="menu"><a href="../Edit/edit.php">Edit Birthday</a></li>
<li class="menu"><a href="../Edit/delete.php">Delete Birthday</a></li>
</ul>
<script src="jquery.min.js"></script>
</head>
<body>

<div id="calendar_div">
	<?php echo getCalender(); ?>
</div>

</body>
</html>
