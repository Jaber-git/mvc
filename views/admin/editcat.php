
  <h2>Edit Category</h2>
 
 <?php 
 foreach($catById as $key =>$value){   
 ?>

   
 <!--insertCategory method in index controller is action page-->
  <form action="<?php echo BASE_URL;?>/Admin/updateCat/<?php echo $value['id'];?>" method="post">
  <table>
    
         <label for="name">Category Name:</label><br>
         <input type="text" value="<?php echo $value['name'];?>" name="name"><br>
         <label for="lname" >Category title:</label><br>
         <input type="text" value="<?php echo $value['title'];?>" name="title" ><br><br>
         <input type="submit" value="update">
         
      </table>
    </form> 
 <?php }?>
 