
  <h2>Add New Category</h2>
 
 

   
<!--insertCategory method in index controller is action page-->
 <form action="<?php echo BASE_URL;?>/Admin/insertCategory" method="post">
 <table>
   
        <label for="name">Category Name:</label><br>
        <input type="text" id="fname" name="name"><br/>
        <label for="lname">Category title:</label><br/>
        <input type="text" id="lname" name="title" ><br/><br/>
        <input type="submit" value="Submit">
        
     </table>
   </form> 
