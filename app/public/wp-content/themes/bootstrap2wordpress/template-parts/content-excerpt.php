<?php 
/**
 * 
 * 
 * Standare Excerpt Template
 * 
 * @package baotstarp2wordpress
 * @since 2.0
 * 
 * 
 */


?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
              <div class="meta">
                <span><?php echo get_the_date('M d, Y'); ?></span>
              </div>
              <a href="#">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </a>
              <p class="exerpt">
                <?php force_balance_tags( the_excerpt() ); ?>
              </p>
              <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e('Read the full post ->', 'bootstrap2wordpress'); ?></a>
            </article>
