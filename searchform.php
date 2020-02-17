<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>Search for:</label>
	<div class='search-wrap'>
		<input type="search" name="s" class="search-field form-control" value="<?php _e( get_search_query() );?>" placeholder="<?php echo __('type keyword(s) here','akvo'); ?>" autocomplete="off" />
		<span class="input-group-btn">
			<button type="submit" class="search-submit btn btn-default"><i class="fa fa-search"></i></button>
		</span>
	</div>
</form>
