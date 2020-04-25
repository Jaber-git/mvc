

<article class="postcontent">
<?php
foreach($postbysearch as $key => $value){
?>
   <div class="post">
      <h2><a href="<?php echo BASE_URL?>/Index/postDetetails/ <?php echo $value['id'];?>"><?php echo $value['title'];?></a></h2>
      <p><?php
    echo $value['content'];
   
      ?></p>
        <div class="readmore"> <a href="<?php echo BASE_URL?>/Index/postDetails/ <?php echo $value['id'];?>">Read more</a></div>
  </div>
<?php } ?>

</article>
