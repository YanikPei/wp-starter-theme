<?php get_header(); ?>


<?php

if(is_home()) :

  get_template_part('content', 'home');

else:

  get_template_part('content');

endif;

?>

<?php get_footer(); ?>
