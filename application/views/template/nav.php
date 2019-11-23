<?php
// TODO: make it a function that converts it?
$navigation = lang('navigation');
?>
<div class="snap-drawers">
    <div class="snap-drawer snap-drawer-left">
        <div>
            <ul>
                <?php
                foreach($navigation as $nav_item){
                    echo '<li><a href="'. base_url() .'#'.$nav_item['id'].'" class="toggle_menu">'.$nav_item['title'].'</a></li>';
                }
                ?>              
            </ul>
        </div>
    </div>
</div>