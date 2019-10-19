<header id="masthead" class="site-header">  
      <div class="topheader">
        <div class="container-wrap clear">
          <?php
            $swing_lite_display_top_header = get_theme_mod( 'swing_lite_display_top_header', 0 );
          ?>
          <?php if($swing_lite_display_top_header) : ?>
          <div class="header-top-content">
            <div class="s-container clear">
            <?php
            $top_header_contact_text = get_theme_mod( 'swing_lite_header_contact_settings', esc_html__( 'Contact us directly at +33(0)1 40 41 14 14 (local time: 08:33)', 'swing-lite' ) );
             if($top_header_contact_text != '') { ?>
              <div class="left-content">
                <div class="contact-info">
                  <?php echo esc_html($top_header_contact_text); ?>
                </div>
              </div>
            <?php } ?>

            <div class="right-content">
              <?php 
                $swing_lite_social_tabs = get_theme_mod( 'swing_lite_social_tabs', '' );
                $swing_lite_tabs  = json_decode($swing_lite_social_tabs);
                
                if($swing_lite_tabs != '') {
                  foreach($swing_lite_tabs as $datas) {
                  if(!empty($datas)) :
                  ?>
                  <div class="social-links">
                      <?php if( $datas->social_url && $datas->social_icon ) : ?>
                        <a href="<?php echo esc_url($datas->social_url); ?>" target="_blank"><span class=" fa <?php echo esc_attr($datas->social_icon); ?>"></span></a>
                      <?php endif; ?>
                  </div>
                  <?php
                  endif;
                  }
                } ?>
            </div>
          </div>
          </div>
          <?php endif; ?>
          <div class="logo-nave-wrap">
              <div class="logo-wrap clear">
                <div class="logo">
                  <?php
                    if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                      the_custom_logo();
                    }
                  ?>
                </div>
    
                <?php if ( !has_custom_logo() )  { ?>
    
                <div class="logo-textwrap">
                  <h1 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                      <?php bloginfo( 'name' ); ?>
                    </a>
                  </h1>
                  <?php 
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) { ?>
                      <p class="site-description"><?php echo esc_html($description);?></p>
                  <?php } ?>
                </div>
    
                <?php } ?>
              </div>
    
              <div class="swing-nav clear">
                <div id="toggle" class="toggle">
                   <div class="one"></div>
                   <div class="two"></div>
                   <div class="three"></div>
               </div>
                <div class="nav ">
                  <div class="s-container clear">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id'=>'primary-menu', 'fallback_cb' => 'swing_lite_main_menu_notif' ) ); ?>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>  
    </header>