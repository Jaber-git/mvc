
<h2>Category List</h2>
<?php
if(!empty($_GET['msg'])){
  $msg=unserialize(urldecode($_GET['msg']));
  foreach($msg as $key=>$value){
    echo "<span style='color:blue;font-weight:bold;'>".$value."</span>";

  }
}
 
  ?>
<table class="tblonegit ">
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
            <a href="<?php echo BASE_URL;?>/Admin/editCat/<?php echo $value['id'];?>">Edit</a>  ||
           <a onclick="return confirm('Are you sure to delete!');"href="<?php echo BASE_URL;?>/Admin/deleteCat/<?php echo $value['id'];?>">Delete</a>
        </td>


    </tr>
<?php } ?>
</table>