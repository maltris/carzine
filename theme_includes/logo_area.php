<?php
/********************************
* This area contains the logo +
* small description coming from 
* settings
********************************/
?>
<div id="carzine_logo_area_container">
    <div class="container">
        <div class="row">
        <?php if(carzine_option('logo',OPTIONS_PREFIX.'general','')):?>
            <div class="col-md-12" id="carzine_logo_container">
				<h1>
                <a id="carzine_logo" href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo esc_url(carzine_option('logo',OPTIONS_PREFIX.'general','')); ?>"><?php echo get_bloginfo('name');?>
                </a>
			    </h1>
            </div>
        <?php else:?>
        
             <div class="col-md-12" id="carzine_logo_container">
                <h1>
                <a id="carzine_logo" href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo esc_url(carzine_option('logo',OPTIONS_PREFIX.'general','')); ?>"><?php echo get_bloginfo('name');?>
                </a>
                </h1>
            </div>
        <?php endif;?>
            <div class="col-md-12 text-center" id="carzine_description">
                <?php echo get_bloginfo('description');?>
            </div>
            
        </div>
    </div>
</div>
