<div class="event-summary">
  <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
    <span class="event-summary__month">
      <?php
        $eventDate = new DateTime(get_field('event_date'));
        echo $eventDate->format('n月');
      ?>
    </span>
    <span class="event-summary__day"><?php echo $eventDate->format('d'); ?></span>
  </a>
  <div class="event-summary__content">
    <h5 class="event-summary__title headline headline--tiny">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h5>
    <p>
      <?php
      if (has_excerpt()) {
        echo get_the_excerpt(); // 如果有摘要，则显示摘要
      } else {
        echo wp_trim_words(get_the_content(), 36); // 否则显示内容的前36个字符
      }
      ?>
      <a href="<?php the_permalink(); ?>" class="nu gray">了解更多</a>
    </p>
  </div>
</div>
