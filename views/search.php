
 <div class="searchoption">

          <div class="menu">
            <a href="<?php echo BASE_URL; ?>/">Home  </a>
          </div>
      <div class="search">
          <form action="<?php echo BASE_URL; ?>Index/search" method="post">
             <input type="text" name="keyword" placeholder="search here">

            <select class="catsearch" name="cat" >
                <option value="">select one</option>
                
                <?php 
                foreach($catlist as $key => $cat){ ?>
                <option value=" <?php echo $cat['id']?>"><?php echo $cat['name']?> </option>
                <?php } ?>
                </select>
                
            <button class="submitbtn" type="submit">search </button>

            </form>
        </div>
    </div>
        
 
  