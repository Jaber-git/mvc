
<h2>User List</h2>
<?php
/*
if(!empty($_GET['msg'])){
  $msg=unserialize(urldecode($_GET['msg']));
  foreach($msg as $key=>$value){
    echo "<span style='color:blue;font-weight:bold;'>".$value."</span>";

  }
}
 
 */ ?>
<table class="tblone ">
    <tr>
        <th width="20%">Serial no</th>
        <th width="30%">User Name</th>
        <th width="30%">Level </th>
        <th width="20%"> Action</th>
    </tr>
    <tr>
    <?php
$i=0; 
foreach($users as $key => $value){
  $i++; 
?>
        <td><?php echo $i;?></td>
        <td><?php echo $value['username'];?> </td>
        <td><?php echo $value['lavel'];?></td>
        <td>
            <a onclick="return confirm('Are you sure to delete!');"href="<?php echo BASE_URL;?>/User/deleteUser/<?php echo $value['id'];?>">Delete</a>
        </td>


    </tr>
<?php } ?>
</table>