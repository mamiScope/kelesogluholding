<div class="grid__content">
    <div class="grid__items">
        <div class="container-fluid">
            <div class="row">
                <?php
                    $records = get_field('index_box');
                    $c = 0;
                    foreach($records as $r){
                        if($c < 2){
                ?>
                <div class="col-sm-6 col-lg-3 col-xs-6 col <?php echo $c == 1?' tabletRight':''; ?>">
                    <div class="item" style="background-image: url(<?php echo $r['box_image']['url'] ?>) !important;"></div>
                </div>
                <?php } ?>
                <div class="col-sm-6 col-lg-3 col-xs-6 col  <?php echo $c == 2?' tabletRight':''; ?>">
                    <div class="item vector-col">
                        <div class="content"><div class="absolute-center text"><?php echo wpautop($r['box_text']) ?></div></div>
                    </div>
                </div>
                <?php if($c++ > 1){ ?>
                <div class="col-sm-6 col-lg-3 col-xs-6 col">
                    <div class="item" style="background-image: url(<?php echo $r['box_image']['url'] ?>) !important;"></div>
                </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>