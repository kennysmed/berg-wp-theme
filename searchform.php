<?php
# Overrides the default search form HTML.
?>
<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<label class="sr-only" for="search-form"><?php echo _x( 'Search for:', 'label' ); ?></label>
		<input type="search" class="search-field form-control input-sm" id="search-form" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ); ?>" />
	</div>
	<button type="submit" class="search-submit btn btn-default btn-sm"><?php echo esc_attr_x( 'Go', 'submit button' ); ?></button>
</form>
