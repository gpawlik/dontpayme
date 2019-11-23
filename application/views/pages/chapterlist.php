 

    <ul class="panels">
    <?php
    $places = lang('places');
    foreach($chapters as $key=>$chapter) {
    ?>
        <li class="panel4" style="background-image:url(<?= base_url(IMAGES."places/thumbnails/pic".$key.".jpg") ?>)">
            <a class="add_noise" href="<?= base_url() . 'home/page/' . $chapter['slug']; ?>">
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
