<?php if ($data) {
    foreach ($data as $key => $item) {
?>
        <div class="item-search-1 item-search-box mt-3 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#detail">
            <div class="image">
                <img src="http://localhost/CPP_Assignment_CNPM/SourceMVC/images/<?php echo $item['image'] ?>" alt="">
            </div>
            <div class="name">
                <?php echo $item['name'] ?>
            </div>
        </div>  
         
        <?php require_once "content/DetailItemView.php" ?>
<?php
    }
} ?>