<?php
$places = lang('places');
$coord = json_decode($chapter_data['coordinates'], true);
?>

<section class="chapter_landing full_image_section" style="background-image:url(<?= base_url(IMAGES."places/covers/cover".($chapter_data['id']-1).".jpg") ?>)">
    <div class="inner_container">
        <h5><?= $places[$chapter_data['id']-1]['city'] ?>, <?= $places[$chapter_data['id']-1]['country'] ?></h5>
        <h1><?= $places[$chapter_data['id']-1]['title'] ?></h1>
        <div class="chapter_description">
            <p><?= $places[$chapter_data['id']-1]['description'] ?></p>
        </div>
        <div class="see_more">
            <p><?= lang('see_more') ?></p>
            <span class="icon icon-double-angle-down"></span>
        </div>
    </div>
</section>

<section class="chapter_slider">
    <div class="flex-container">
        <div class="flexslider">
            <ul class="slides">
                <?php
                foreach($chapter_images as $image) {
                ?>
                <li>
                    <img src="<?= base_url(IMAGES."places/sliders/".$image['page_id']."/".$image['image_src']);?>" />
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</section>

<section class="chapter_volunteers">
    <div class="chapter_map">
        <div class="chapter_map_bg">
        <img src="<?= base_url(IMAGES."places/maps/map_".$chapter_data['country'].".jpg") ?>">
        </div>
        <!--<section class="chapter_map" style="background-image:url(<?= base_url(IMAGES."places/maps/map_".$chapter_data['country'].".jpg") ?>)">-->
        <div class="chapter_map_inner">        
            <div class="map_marker" style="top:<?= $coord['y']; ?>%;left:<?= $coord['x']; ?>%">
                <button><span class="icon icon-map-marker"></span></button>
                <h4><?= $places[$chapter_data['id']-1]['city'] ?> <span><?= $places[$chapter_data['id']-1]['country'] ?></span></h4>
            </div>
        </div>
    </div>
    <div class="chapter_info_box">        
        <h3>People</h3>        
        <ul class="volunteers_list clearfix">
            <?php
            foreach($places[$chapter_data['id']-1]['volunteers'] as $volunteer){
            ?>
            <li><img src="<?= base_url(IMAGES."volunteers/".$volunteer['img']) ?>"> <span><?= $volunteer['name'] ?></span></li>
            <?php
            }
            ?>
        </ul>
    </div>     
</section>
