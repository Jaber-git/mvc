<script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<h2>Add new Article</h2>
 
   
 <!--insertCategory method in index controller is action page-->
  <form action="<?php echo BASE_URL;?>/Admin/insertCategory" method="post">
  <table>
    
        <tr>
        <td>Title</td>
        <td><input type="text" id="fname" name="name"><br></td>
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
                <option value="1">Category one </option>
                <option value="2">Category one </option>
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
 