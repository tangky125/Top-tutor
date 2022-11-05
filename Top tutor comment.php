<html>

 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
      body{
 font: 20px Verdana;
 background-image: url(Sand.jpg);
 background-repeat: no-repeat;
  background-size: 100%;
}

h1{
 font: 20px Verdana;
 color: red;
}

.Input{
 font: 20px Verdana;
 border: 1px solid black;
 width: 300px;
}

.Submit{
 font: 20px Verdana;
 border: 1px solid black;
 width: 300px;
}
body {
  margin: 0;

}

.topnav {
  overflow: hidden;
  background-color: #808080;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 30px 16px;
  text-decoration: none;
  font-size: 25px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.split {
  float: right;
  background-color: #000000;
  color: white;
  font-weight: bold;
}

  </style>
 </head>

 <body>
  
 <div class="topnav">
  <a href="http://localhost/project/Top%20tutor.html" class="active">Home</a>
  <a href="#http://localhost/project/Top%20tutor.html" class="split">Top Tutor</a>
</div>
<div class="background-image"></div>
<div style="padding: 10px 10px 30px; margin-top: 30px">
  <form action="" method="POST">

   <label> Name: 
    <input type="text" name="Name" class="Input" style="width: 225px" required>
   </label>
   <br><br>
   <label> Comment: <br>
    <textarea name="Comment" class="Input" style="width: 300px" required></textarea>
   </label>
   <br><br>
   <input type="submit" name="Submit" value="Submit Comment" class="Submit">

  </form>
</div>
 </body>

</html>

<?php
 
 if(isset($_POST['Submit'])){
  print "<h1>Your comment has been submitted!</h1>";

  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];

 
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 1024);

  
  $write = fopen("comments.txt", "w+");
  $string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 
 $read = fopen("comments.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);

?>