<?php include('core/init.php');

/*
 * When adding new functionality to the side, follow these steps:
 * 1. copy template.php to a .php file with an appropraite name
 * 2. pull your data objects in this php block, underneath this comment
 * 3. modify page template as needed
 * 4. for reusable sections of html (like game data display boxes) make a new file in partials/ 
 *    that defines a function that returns a string of HTML. display it in  your page using 
      <?php print(partial_name()); ?>
      All files in partials/*.php are loaded by core/init.php
 * 5. place utility functions (things like date/time formatters, uuid generators, etc.
 * 6. place javascript in js/app.js, in a block of if(body.hasClass('page_name')) { ... }
 */

// Source Data

start_page('page_name'); ?>

<div class='row12'>
	<div class='span2'>
		left bar content
		<?php print sidebar(); ?> 
	</div>
	<div class='span6'>
		center content
	</div>
	<div class='span2'>
		right bar content
	</div>
</div>

<?php end_page(); ?>
