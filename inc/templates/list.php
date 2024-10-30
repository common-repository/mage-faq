<div class="mkb-content" id="mkb-accordion<?php echo $show; ?>">
     <?php
        $args = array (
                'post_type'  => array( 'mkb-faq' ),
                'posts_per_page' => $show
                );
                
     $loop = new WP_Query( $args );
            while ($loop->have_posts()) {
                $loop->the_post();            
    ?>  
  
      <h3><?php the_title(); ?></h3>
      <div>
         <?php the_content(); ?>
      </div>
  
<?php } wp_reset_query();?>
</div>
<script>
jQuery(document).ready( function() {
  jQuery( "#mkb-accordion<?php echo $show; ?>" ).accordion({
        collapsible: true,
        active: false
  });
});
</script>