


<article class="postcontent">

<?php
foreach($getcat as $key => $value){
?>
   <div class="post">
   <div class="title"></div>
      <h2><a href="<?php echo BASE_URL;?>/Index/postDetetails/ <?php echo $value['id'];?>"><?php echo $value['title'];?></a></h2>
      <p><?php
      $text=$value['content'];
    if (strlen($text)>200){
      $text= substr($text,0,2000);
      echo $text;
    }
      ?></p>
        <div class="readmore"> <a href="<?php echo BASE_URL;?>/Index/postDetails/ <?php echo $value['id'];?>">Read more</a></div>
  </div>
<?php } ?>


</article>
