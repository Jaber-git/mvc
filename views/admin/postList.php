

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<h2>article List</h2>
<table id="mytable_id" class="dispaly" data-order='[[1,"asc"]]' data-page-length='5'>
   <thead>
    <tr>
        <th width="5%">No</th>
        <th width="2%">Title</th>
        <th width="35%">Content</th>
        <th width="15%">Category</th>
        <th width="25%">Action</th>
    </tr> 
    </thead> 
    <tbody>
    <?php 
    $i=0;
    foreach($listPost as $key =>$value){
    $i++;
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $value['title'];?></td>
        <td><?php
        
           echo $value['content'];
      
        ?></td>
        <td>
        <?php 
        foreach($catlist as $key=>$cat){
            if($cat['id']==$value['cat']){
               echo $cat['name'];
            }
        }
        echo $value['cat'];
        ?></td>
        <td>
        <a href="http://">Edit</a> ||
        <a href="http://">Delete</a> ||
        </td>
<?php }?>

    </tr> 
    </tbody>
</table>
<script>
$(document).ready( function () {
    $('#mytable_id').DataTable();
} );
</script>