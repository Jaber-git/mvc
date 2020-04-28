<script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<h2>Add new Article</h2>

   
 <!--insertCategory method in index controller is action page-->
  <form action="<?php echo BASE_URL;?>/Admin/addNewPost" method="post">
  <table>
    
        <tr>
        <td>Title</td>
        <td><input id="postinput" type="text" id="fname" name="title"><br></td>
        </tr>
         
        <tr>
        <td>Content</td>
        <td>  
        
        <textarea name="content"></textarea>
       <script>CKEDITOR.replace( 'content' );  </script>
        </td>
        </tr>
        <tr>
        <td>Category</td>
        <td>  
            <select name="cat" class="cat" id="">
                <option >Select One</option>
               <?php foreach($catlist as $key =>$cat){?>
                <option value="<?php echo $cat['id'] ;?>">
                <?php echo $cat['name'] ;?>
              
                </option>
                  <?php }?>
            </select>
        </td>
        </tr>
        <tr>
        <td></td>
        <td>  
        <input type="submit" name="submit" value="Add Article">
        </td>
         
      </table>
    </form> 
 