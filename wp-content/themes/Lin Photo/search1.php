<?php get_header(); ?>
<div id="content" class="narrowcolumn">
<?php if (have_posts()) : ?>
     <h3 class="pagetitle">Search Results</h3>
         <div class="navigation">
	    <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
         </div>
<?php while (have_posts()) : the_post(); ?>
     <div class="post">
	<h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
	<small><?php the_time('l, F jS, Y') ?></small>
        <p class="postmetadata">Posted in <?php the_category(', ') ?> |
        <?php edit_post_link('Edit', '', ' | '); ?>
        <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
     </div>
<?php endwhile; ?>
     <div class="navigation">
	<div class="alignleft">
           <?php next_posts_link('&laquo; Previous Entries') ?>
        </div>
        <div class="alignright">
           <?php previous_posts_link('Next Entries &raquo;') ?>
        </div>
      </div>
<?php else : ?>
    <h3 class="center">No posts found. Try a different search?</h3>
    <p>&nbsp;</p><center><?php include (TEMPLATEPATH . '/searchform.php'); ?></center>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>