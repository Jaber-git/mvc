
<h2>Category List</h2>

<table class="tblone">
    <tr>
        <th>Serial no</th>
        <th>Category Name</th>
        <th>Category Title</th>
        <th> Action</th>
    </tr>
    <tr>
    <?php
$i=0; 
foreach($cat as $key => $value){
  $i++; 
?>
        <td><?php echo $i;?></td>
        <td><?php echo $value['name'];?> </td>
        <td><?php echo $value['title'];?></td>
        <td>
            <a href="<?php echo BASE_URL;?>/Admin/editCat">Edit</a>
           <a href="<?php echo BASE_URL;?>/Admin/deleteCat"">Delete</a>
        </td>


    </tr>
<?php } ?>
</table>