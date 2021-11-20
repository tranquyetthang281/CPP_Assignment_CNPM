<?php if ($data) {
    foreach ($data as $key => $value) {
?>
        <div class="item-search-1 item-search-box mt-3 mb-2">
            <div class="image">
                <img src="http://localhost/CPP_Assignment_CNPM/SourceMVC/images/<?php echo $value['image'] ?>" alt="">
            </div>
            <div class="name">
                <?php echo $value['name'] ?>
            </div>
        </div>

<?php
    }
} ?>