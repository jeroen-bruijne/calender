<!DOCTYPE html>
<head>
  <title>Edit</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
<ul class="menu">
<li class="menu" style="float:left"><img src="../logo.png" alt="logo" href="index.php" /></li>
<li class="menu"><a href="../Calendar/index.php">Calendar</a></li>
<li class="menu"><a href="../Edit/form.html">Add Birthday</a></li>
<li class="menu"><a href="../Edit/edit.php">Edit Birthday</a></li>
<li class="menu"><a href="../Edit/delete.php">Delete Birthday</a></li>
</ul>

</head>
<body>
  
  <p>Wijzig hieronder verjaardag/naam </p>
  
  <form method="post" action="php/edit.php">
  
  <label for="oname">Oude Naam:</label>
  <input type="text" id="oname" name="oname" />
  <br />

  <label for="nname">Nieuwe Naam:</label>
  <input type="text" id="nname" name="nname" />
  <br />

  <label for="ndate">Nieuwe Verjaardag: </label>
  <input type="date" id="ndate" name="ndate" /><br />
  <br />

  <input type="submit" name="submit" value="Submit" style="border : solid 1px #000000; border-radius : 3px; moz-border-radius : 3px; -webkit-box-shadow : 0px 0px 2px rgba(0,0,0,1.0); -moz-box-shadow : 0px 0px 2px rgba(0,0,0,1.0); box-shadow : 0px 0px 2px rgba(0,0,0,1.0); font-size : 20px; color : #ffffff; padding : 1px 17px; background : #5f6166; background : -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5f6166), color-stop(100%,#00060a)); background : -moz-linear-gradient(top, #5f6166 0%, #00060a 100%); background : -webkit-linear-gradient(top, #5f6166 0%, #00060a 100%); background : -o-linear-gradient(top, #5f6166 0%, #00060a 100%); background : -ms-linear-gradient(top, #5f6166 0%, #00060a 100%); background : linear-gradient(top, #5f6166 0%, #00060a 100%); filter : progid:DXImageTransform.Microsoft.gradient( startColorstr='#5f6166', endColorstr='#00060a',GradientType=0 );">  
  </form> 


<br /><?php include "php/showAll.php"; ?>



</body>
</html>