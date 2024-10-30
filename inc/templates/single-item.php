<?php
$term = get_term_by('id', $cat, 'mkb_faq_cat');
if($term){
$trcat = $term->term_id;
?>
<h4><?php echo $term->name; ?></h4>
<div class="mkb-content" id="mkb-accordion<?php echo $cat.md5($term->slug); ?>">
     <?php
     $count =1;
        $args = array (
                'post_type'  => array( 'mkb-faq' ),
                'posts_per_page' => $show,
                    'tax_query' => array(
                            array(
                            'taxonomy' => 'mkb_faq_cat',
                            'field' => 'id',
                            'terms' => $trcat
                            )
                        )
                    );
                
     $loop = new WP_Query( $args );
            while ($loop->have_posts()) {
                $loop->the_post();            
    ?>  
	  <h3><?php the_title(); ?></h3>
	  <div>
	     <?php the_content(); ?>
	  </div>
  
<?php 
$count++; 
} 
wp_reset_query();
?>
</div>
<script>
jQuery(document).ready( function() {
  jQuery( "#mkb-accordion<?php echo $cat.md5($term->slug); ?>" ).accordion({
        collapsible: true,
        active: false
  });
});
</script>
<?php 
} 
else{
 _e('<div class=err>Sorry, Shortcode error! No FAQ data found by your given category id. Please check the category id and try again.</div>');
}
?>