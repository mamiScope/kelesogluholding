<div class="new_gray_title" id="home_section_2">
    <div class="container">
        <p class=""><img class="dibImage" src="<?php echo $template_url ?>/assets/img/dib.png" alt="" /> Etaplar</p>
    </div>
</div>
<div class="clear"></div>
<?php
    $pages = get_pages('child_of=124&sort_column=menu_order');
?>
<div class="stage-page__list">
    <div class="container">
        <div class="row" data-sticky_parent >
            <div class="col-sm-3" data-sticky_column >
                <div class="stage-list__sidebar">
                    <ul>
                        <?php $c = 0; foreach($pages as $p){ ?>
                        <li data-target="<?php echo $c++; ?>" class="<?php echo $c == 3?'passiveStages':'' ?> <?php echo $c == 1?'active':'' ?>"><a href="<?php echo $p->ID == 186?'javascript::;':get_permalink($p->ID); ?>"><?php echo $p->post_title ?><br><span class="pink"><?php echo get_field('sales_status',$p->ID); ?></span><i class="arrow-right"></i></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
                <?php $c = 0; foreach($pages as $p){ ?>
                <div id="<?php echo get_field('etap_id',$p->ID); ?>" class="stage-page__list-item" data-index="<?php $c++; ?>">
                    <div class="image"><img src="<?php echo get_field('image',$p->ID) ?>" alt="" /></div>
                    <div class="content">
                        <div class="hero"><?php echo $p->post_title; ?></div>
                        <span class="description"><p><?php echo get_field('excerpt',$p->ID); ?></p></span>
                        <?php if($c != 3){ ?>
                        <br>
                        <a class="button-inline" href='<?php echo get_permalink($p->ID); ?>'>Detaylı İncele <span class="icon"></span></a>
                        <?php }else{ ?>
                        <br>
                        <a class="button-inline" style="opacity: 0.4;">Satışı Tamamlandı</a>
                        <?php } ?>
                    </div>
                    <!--<div class="time-circle"><div class="text"><span>Teslim: &nbsp;</span></div></div> -->
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        var wt = $(window).scrollTop();
        var stp = $('#marinaevleriEtaplar').position().top + $('.stage-page__list').position().top - 120;
        var stp2 = $('#kalonevleriEtaplar').position().top + $('.stage-page__list').position().top - 250;
        $('.stage-list__sidebar li').removeClass('active');
        if(wt > stp2){
            $('.stage-list__sidebar li[data-target="2"]').addClass('active');
        }else if(wt > stp){
            $('.stage-list__sidebar li[data-target="1"]').addClass('active');
        }else{
            $('.stage-list__sidebar li[data-target="0"]').addClass('active');
        }
    }
</script>
