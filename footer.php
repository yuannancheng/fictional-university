    <footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url(); ?>"><strong>虚拟</strong> 大学</a>
            </h1>
            <p><a class="site-footer__link" href="#">555.555.5555</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">探索</h3>
              <nav class="nav-list">
                <ul>
                  <li><a href="<?php echo site_url('/关于我们'); ?>">关于我们</a></li>
                  <li><a href="<?php echo get_post_type_archive_link('program'); ?>">学科</a></li>
                  <li><a href="<?php echo get_post_type_archive_link('event'); ?>">活动</a></li>
                  <li><a href="#">校园</a></li>
                </ul>
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">学习</h3>
              <nav class="nav-list">
                <ul>
                  <li><a href="#">法律</a></li>
                  <li><a href="<?php echo site_url('/隐私策略'); ?>">隐私</a></li>
                  <li><a href="#">职业</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">联系我们</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>
    
    <?php wp_footer(); ?>
  </body>
</html>
