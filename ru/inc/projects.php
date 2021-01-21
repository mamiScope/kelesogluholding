<div class="clear"></div>
<div class="new_gray_title" id="home_section_5">
    <div class="container">
        <p class=""><img src="<?php echo $template_url ?>/assets/img/kelesoglu.svg" style="max-width: 230px;" alt="" /> Projeleri</p>
    </div>
</div>
<div class="clear"></div>
<div class="owl-carousel owl-theme">
    <?php
        $records = get_field('projects');
        foreach($records as $r){
    ?>
    <div>
        <a target="_blank" href="<?php echo $r['project_url']; ?>" class="projectsLink">
            <img src="<?php echo $r['project_bg']['url']; ?>" alt=""/>
            <div class="hoverData t2">
                <div class="hoverDataInner t2">
                    <img src="<?php echo $r['project_logo']['url']; ?>" alt=""/>
                    <p><?php echo $r['project_name']; ?></p>
                    <img class="detailCBtn" src="<?php echo $template_url; ?>/assets/img/carousel/btn_carousel.png" alt=""/>
                </div>
            </div>
        </a>
    </div>
    <?php } ?>
</div>
<div class="space30"></div>