<?php if ($data) {
    foreach ($data as $key => $item) {
?>
        <?php include "content/DetailItemView.php" ?>
        <div class="item-search-1 item-search-box mt-3 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#detail<?php echo $item['id'] ?>">
            <div class="image">
                <img src="http://localhost/CPP_Assignment_CNPM/SourceMVC/images/<?php echo $item['image'] ?>" alt="">
            </div>
            <div class="name">
                <?php echo $item['name'] ?>
            </div>
        </div>  
<?php
    }
} ?>