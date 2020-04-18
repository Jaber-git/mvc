
<div>
<h2>Add category</h2>
<?php

 if (isset($msg)){
     echo "<span style='color:blue;font-weight:bold;'>".$msg."</span>";
 }
  ?>
<!--insertCategory method in index controller is action page-->
 <form action="http://localhost/mvc/Category/insertCategory" method="post">
  
    <label for="name">Category Name:</label><br>
    <input type="text" id="fname" name="name"><br>
    <label for="lname">Category title:</label><br>
    <input type="text" id="lname" name="title" ><br><br>
    <input type="submit" value="Submit">

   </form> 

</div>