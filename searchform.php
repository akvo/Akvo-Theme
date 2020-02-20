<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="sr-only">Search for:</label>
	<input type="search" name="s" class="search-field form-control" value="<?php _e( get_search_query() );?>" placeholder="<?php echo __('type keyword(s) here','akvo'); ?>" autocomplete="off" />
</form>
