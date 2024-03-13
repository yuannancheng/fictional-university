<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta name="charset" content="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left">
        <a href="<?php echo site_url(); ?>"><strong>虚拟</strong> 大学</a>
      </h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li
              <?php
                // 如果当前页面或者父页面是"关于我们"，则设置类名
                if (
                  is_page('关于我们')
                  or wp_get_post_parent_id() == 15
                ) {
                  echo 'class="current-menu-item"' ;
                }
              ?>
            >
              <a href="<?php echo site_url('/关于我们'); ?>">关于我们</a>
            </li>
            <li><a href="#">应用程序</a></li>
            <li><a href="#">活动</a></li>
            <li><a href="#">校园</a></li>
            <li><a href="#">博客</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">登录</a>
          <a href="#" class="btn btn--small btn--dark-orange float-left">注册</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>