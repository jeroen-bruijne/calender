<!DOCTYPE html>
<head>
  <title>Delete</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <ul>
  <li><a href="../Calendar/index.php">Calendar</a></li>
  <li><a href="form.html">Add Birthday</a></li>
  <li><a href="edit.php">Edit Birthday</a></li>
  <li><a href="delete.php">Delete Birthday</a></li>
  </ul>

</head>

<body>
<div class="container"
  <\ br>
  <p>Voer alleen de naam in die u wilt verwijderen zoals in de lijst eronder staat aangegeven.  </p>
  <p>Dus "verjaardag" laat u weg! </p>

  <form method="post" action="php/deleteDate.php">
  
  <label for="name">Naam:</label>
  <input type="text" id="name" name="name" /><br />
  <br />
  <input type="submit" name="submit" value="Submit" style="border : solid 1px #000000; border-radius : 3px; moz-border-radius : 3px; -webkit-box-shadow : 0px 0px 2px rgba(0,0,0,1.0); -moz-box-shadow : 0px 0px 2px rgba(0,0,0,1.0); box-shadow : 0px 0px 2px rgba(0,0,0,1.0); font-size : 20px; color : #ffffff; padding : 1px 17px; background : #5f6166; background : -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5f6166), color-stop(100%,#00060a)); background : -moz-linear-gradient(top, #5f6166 0%, #00060a 100%); background : -webkit-linear-gradient(top, #5f6166 0%, #00060a 100%); background : -o-linear-gradient(top, #5f6166 0%, #00060a 100%); background : -ms-linear-gradient(top, #5f6166 0%, #00060a 100%); background : linear-gradient(top, #5f6166 0%, #00060a 100%); filter : progid:DXImageTransform.Microsoft.gradient( startColorstr='#5f6166', endColorstr='#00060a',GradientType=0 );"> 

  </form>  


<br /><br /><?php include "php/showAll.php"; ?>


</div>
</body>
</html>