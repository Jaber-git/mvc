
<div>
<h2>Update category</h2>

<?php

 if (isset($msg)){
     echo "<span style='color:blue;font-weight:bold;'>".$msg."</span>";
 }
 
  ?>
  
<!--insertCategory method in index controller is action page-->
<div>
 <form action="http://localhost/mvc/Category/updateCat" method="post">
  <?php 
 if(isset($catbyid)){
   foreach($catbyid as $value){  
    ?>
    <input type="hidden" id="fname" name="id" value="<?php echo $value['id']?>"><br>
    <label for="name">Category Name:</label><br>
    <input type="text" id="fname" name="name" requred="1" value="<?php echo $value['name']?>"><br>
    <label for="lname">Category title:</label><br>
    <input type="text" id="lname" name="title" requred="1" value="<?php echo $value['title']?>"><br><br>
    <input type="submit" value="update">
   <?php } }?>
   </form> 
   </div>

</div>