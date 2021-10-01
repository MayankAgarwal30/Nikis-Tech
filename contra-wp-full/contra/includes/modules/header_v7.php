<?php $options = _WSH()->option();
    contra_bunch_global_variable();
?>

<!-- Main Header-->
<header class="main-header header-style-four">
    <?php if (contra_set($options, 'header7_topbar')) : ?>
        <?php if ((contra_set($options, 'phone_no_6')) || (contra_set($options, 'email_6'))): ?>
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-right">
                    <ul class="contact-info">
                        <li><span><?php esc_html_e('Phone :', 'contra'); ?></span> <?php echo wp_kses_post(contra_set($options, 'phone_no_6')); ?></li>
                        <li><span><?php esc_html_e('EMAIL :', 'contra'); ?></span> <a href="<?php echo esc_attr(contra_set($options, 'email_6')); ?>"><?php echo wp_kses_post(contra_set($options, 'email_6')); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php endif; ?>

    <?php endif; ?>
    <div class="header-lower">
        <div class="auto-container">
            <div class="main-box clearfix">
                <div class="logo-box">
                    <?php if (contra_set($options, 'logo_image')):?>
                        <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(contra_set($options, 'logo_image'));?>" alt="<?php esc_attr_e('Contra', 'contra');?>" title="<?php esc_attr_e('Contra', 'contra');?>"></a></div>
                    <?php else:?>
                        <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo-2.svg');?>" alt="<?php esc_attr_e('Contra', 'contra');?>"></a></div>
                    <?php endif;?>
                </div>

                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md ">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <?php wp_nav_menu(array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
                                    'container_class'=>'navbar-collapse collapse navbar-right',
                                    'menu_class'=>'nav navbar-nav',
                                    'fallback_cb'=>false,
                                    'items_wrap' => '%3$s',
                                    'container'=>false,
                                    'walker'=> new Bootstrap_walker()
                                )); ?>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <?php if (contra_set($options, 'search_form_3')): ?>
                    <!-- Outer Box-->
                    <div class="outer-box">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn" type="button"><span class="fa fa-search"></span></button>
                                <!-- <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">

                                        </div>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <!-- Quik search -->
        <div class="dez-quik-search">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                <input name="s" autocomplete="off" type="text" class="form-control" placeholder="<?php esc_attr_e('Search Here', 'contra');?>">
                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                <span id="quik-search-remove"><i class="fa fa-remove"></i></span>
            </form>
        </div>

    </div>
</header>
<!--End Main Header -->
