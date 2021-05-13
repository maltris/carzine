<?php

/**This is the area that holds the menu***/
?>
<div id="carzine_menu_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $theme_location = 'main';
                if (has_nav_menu($theme_location)) {
                    // User has assigned menu to this location;
                    // output it
                    wp_nav_menu(array(
                        'theme_location' => $theme_location,
                        'menu_id' => 'main-menu'
                    ));
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!--#carzine_menu_area ends here-->
