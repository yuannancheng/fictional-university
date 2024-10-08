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
      <a
        href="<?php echo esc_url(site_url('/search/')); ?>"
        class="js-search-trigger site-header__search-trigger"
      >
        <i class="fa fa-search" aria-hidden="true"></i>
      </a>
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
            <li <?php if (get_post_type() == 'program') {
              echo 'class="current-menu-item"';
                } ?>>
              <a href="<?php echo get_post_type_archive_link('program'); ?>">学科</a>
            </li>
            <li <?php if (get_post_type() == 'event' or is_page('past-events')) {
              echo 'class="current-menu-item"';
                } ?>>
              <a href="<?php echo get_post_type_archive_link('event'); ?>">活动</a>
            </li>
            <li <?php if (get_post_type() == 'campus') {
              echo 'class="current-menu-item"';
                } ?>>
              <a href="<?php echo get_post_type_archive_link('campus'); ?>">校区</a>
            </li>
            <li
              <?php
                // 如果当前页面类型是文章，则博客会被标记为当前项
              if (get_post_type() == 'post') {
                echo 'class="current-menu-item"' ;
              }
              ?>
            >
              <a href="<?php echo site_url('/blog'); ?>">博客</a>
            </li>
          </ul>
        </nav>
        <div class="site-header__util">
          <?php
          if (is_user_logged_in()) {
            ?>
              <a href="<?php echo wp_logout_url(); ?>" class="btn btn--small btn--dark-orange float-left btn--with-photo">
                <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
                <span class="btn__text">注销</span>
              </a>
            <?php
          } else {
            ?>
              <a href="<?php echo wp_login_url(); ?>" class="btn btn--small btn--orange float-left push-right">登录</a>
              <a href="<?php echo wp_registration_url(); ?>" class="btn btn--small btn--dark-orange float-left">注册</a>
            <?php
          }
          ?>
          <a
            href="<?php echo esc_url(site_url('/search/')); ?>"
            class="js-search-trigger search-trigger"
          >
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </header>