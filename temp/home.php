<?php
// TODO: make it a function that converts it?
$home = lang('home');
$places = lang('places');
?>
<section id="home" class="video_section">
    <div class="video_background"></div>
    <div class="content_holder">
        <div class="content_holder_box">
            <a href="#" class="rounded_button play_button"><span class="icon icon-play"></span></a>
        </div>
        <div class="see_more">
            <p><?= lang('scroll') ?></p>
            <span class="icon icon-double-angle-down"></span>
        </div>
    </div>
</section>

<section id="about" class="about_section centered_section">
    <h5><?= $home['about']['subtitle'] ?></h5>
    <h2><?= $home['about']['title'] ?></h2>
    <div class="about_description">
        <p><?= $home['about']['description'] ?></p>        
    </div>
</section>

<section id="donate" class="stripe_section">
    <div class="inner_container row-fluid v-align">
        <div class="span2 v-align">
            <a href="https://www.indiegogo.com/projects/don-t-pay-me-post-production-phase" target="_blank" onclick="_gaq.push(['_trackEvent','donate','donate_logo']);"><img src="<?= base_url(IMAGES."indiegogo_logo.png") ?>" class="donate_logo"></a>
        </div>
        <div class="span7 v-align">
            <h3><?= $home['donate']['title'] ?></h3>
            <p><?= $home['donate']['description'] ?></p> 
        </div>
        <div class="span3 v-align">
            <a href="https://www.indiegogo.com/projects/don-t-pay-me-post-production-phase" class="btn_donate" target="_blank" onclick="_gaq.push(['_trackEvent','donate','donate_button']);"><?= $home['donate']['button'] ?></a>
        </div>
    </div>
</section>


<ul id="chapters" class="panels clearfix">
<?php
foreach($chapters as $key=>$chapter) {
?>
    <li class="panel4" style="background-image:url(<?= base_url(IMAGES."places/thumbnails/pic".$key.".jpg") ?>)">
        <a class="add_noise" href="<?= base_url() . 'chapter/' . $chapter['slug']; ?>">
            <div class="v_center">
                <div class="v_center_inside">
                    <h5><?= $places[$key]['city'] ?>, <?= $places[$key]['country'] ?></h5>
                    <h3><?= $places[$key]['title'] ?></h3>
                </div>
            </div>
        </a>
    </li>    
<?php
}
?>
</ul>


<section id="the_crew" class="crew_section centered_section"> 
    <div class="inner_container">
        <h5><?= $home['crew']['subtitle'] ?></h5>
        <h2><?= $home['crew']['title'] ?></h2> 
        <div class="clearfix">
            <?php
            for($i=0;$i<3;$i++) {
            ?>
            <div class="panel3">
                <div class="crew_member_box">
                    <div class="image_holder"><img src="<?= base_url(IMAGES."crew/". $home['crew']['description'][$i]['image']) ?>"></div>
                    <h4><?= $home['crew']['description'][$i]['name'] ?> <span><?= $home['crew']['description'][$i]['function'] ?></span></h4>
                    <p class="crew_description"><?= $home['crew']['description'][$i]['description'] ?></p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>


<section class="countdown_section full_image_section add_noise_image">
    <div class="countdown_content">
        <p class="timer_header"><?= $home['countdown']['header'] ?></p>
        <div id="timer"></div>
        
        <h3 id="subscribe_info" data-thankyou="<?= $home['countdown']['subscribe_thx'] ?>"><?= $home['countdown']['subscribe_msg'] ?></h3>
        <div class="subscribe-group form-group">
            <input id="subscribe_email" class="form-control" type="text" placeholder="<?= $home['countdown']['enter_email'] ?>" value="">
            <a href="#" class="rounded_button submit_button"><span class="icon icon-angle-right"></span></a>
        </div>        
    </div>
</section>

<section id="contact" class="centered_section"> 
    <div class="inner_container">
        <h5><?= $home['contact']['subtitle'] ?></h5>
        <h2><?= $home['contact']['title'] ?></h2>    
        <div class="contact_columns clearfix">
            <div class="panel3">
                <div class="contact_box">
                    <ul class="social_buttons">
                        <li><a href="#" class="fb_share" data-title="<?= $home['contact']['share']['fb']['title'] ?>" data-link="<?= $home['contact']['share']['fb']['url'] ?>" data-picture="<?= $home['contact']['share']['fb']['picture'] ?>" data-description="<?= $home['contact']['share']['fb']['description'] ?>"><span><i class="icon icon-facebook"></i></span><?= $home['contact']['share']['fb']['button'] ?></a></li>
                        <li><a href="https://twitter.com/share?text=<?= urlencode($home['contact']['share']['tw']['description']) ?>&url=<?= urlencode($home['contact']['share']['tw']['url']) ?>" class="tw_share popup" data-type="tw"><span><i class="icon icon-twitter"></i></span><?= $home['contact']['share']['tw']['button'] ?></a></li>
                        <li><a href="https://plus.google.com/share?url=<?= $home['contact']['share']['gg']['url'] ?>" class="gg_share popup" data-type="gg" ><span><i class="icon icon-google-plus"></i></span><?= $home['contact']['share']['gg']['button'] ?></a></li>                        
                    </ul>
                </div>
            </div>
            <div class="panel3">
                <div class="contact_box">
                    <p><?= $home['contact']['description'] ?></p>
                    <!--<p>Any <span class="green"><strong>donations</strong></span> would be helpful too!</p>-->
                </div>
            </div>
            <div class="panel3">
                <div class="contact_box">
                    <p><strong><?= $home['contact']['help_header'] ?></strong></p>
                    <ul class="bullet_list">
                        <?php
                        foreach($home['contact']['help_list'] as $help_item){
                            echo '<li>'.$help_item.'</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>