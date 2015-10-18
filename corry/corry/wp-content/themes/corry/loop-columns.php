<?php
/**
 * The loop that displays two columns of posts image and excerpt only.
 *
 * <code>get_template_part( 'loop', 'columns' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
<div id="nav-above" class="navigation">
  <div class="nav-previous"><?php next_posts_link( __( '<span>&larr;</span> Older posts', 'twentyten' ) ); ?></div>
 <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span>&rarr;</span>', 'twentyten' ) ); ?></div>
</div>
<!-- #nav-above -->
<?php endif; ?>
<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
 
<div id="post-0">
 
<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
<div class="entry-content">
<?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?>
   <?php get_search_form(); ?>
  </div>
<!-- .entry-content -->
 </div>
<!-- #post-0 -->
<?php endif; ?>
<?php /* Start the Loop.*/ ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php /* start our two column support */ ?>
<?php $counter+=1; ?>
<?php if($counter % 2) : ?>
<div  class="column-left">
<?php else: ?>
 
<div  class="column-right">
<?php endif; ?>
 
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 
<div  class="entry-meta">
    <?php twentyten_posted_on(); ?>
   </div>
<!-- .entry-meta -->
 <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
 
<div class="entry-summary">
    <?php /* Add a conditional image and excertp output */ ?>
    <?php if(has_post_thumbnail()): // Start the condition ?>
 
<div class="alignleft" style="margin: 0 0 10px 0">
     <?php the_post_thumbnail('small-thumbnail'); ?>
    </div>
     <?php the_excerpt(); ?>
    <?php else : // Offer an alternative ?>
     <?php the_excerpt(); ?>
    <?php endif; // end the condition ?>
   </div>
<!-- .entry-summary -->
 <?php else : ?>
 
<div  class="entry-content">
    <?php /* Add a conditional image and excerpt output */ ?>
    <?php if(has_post_thumbnail()): // Start the condition ?>
 
<div class="alignleft" style="margin: 0 0 10px 0">
       <?php the_post_thumbnail('small-thumbnail'); ?>
      </div>
       <?php the_excerpt(); ?>
    <?php else : // Offer an alternative ?>
     <?php the_content( __( 'Continue reading <span>&rarr;</span>', 'twentyten' ) ); ?>
    <?php endif; // end the condition ?>
    <?php wp_link_pages( array( 'before' => '<div>' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
   </div>
<!-- .entry-content -->
 <?php endif; ?>
 
<div  class="entry-utility">
    <?php if ( count( get_the_category() ) ) : ?>
     <span class="cat-links"><br />
      <?php printf( __( '<span>Posted in</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
     </span>
     <span  class="meta-sep">|</span>
    <?php endif; ?>
    <?php $tags_list = get_the_tag_list( '', ', ' ); if ( $tags_list ): ?>
     <span class="tag-links"><br />
      <?php printf( __( '<span>Tagged</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
     </span>
     <span  class="meta-sep">|</span>
    <?php endif; ?>
    <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?></span>
    <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span>|</span> <span>', '</span>' ); ?>
   </div>
<!-- .entry-utility -->
  </div>
<!-- #post-## -->
  <?php comments_template( '', true ); ?>
<?php /* end our two column support */ ?>
</div>
<?php endwhile; // End the loop. Whew. ?>
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
 
<div id="nav-below" class="navigation">
 
<div class="nav-previous"><?php next_posts_link( __( '<span>&larr;</span> Older posts', 'twentyten' ) ); ?></div>
 
<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span>&rarr;</span>', 'twentyten' ) ); ?></div>
    </div>
!-- #nav-below -->
<?php endif; ?>