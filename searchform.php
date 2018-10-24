<form method="GET" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="type keyword(s) here" autocomplete="off" />
	<input type="submit" id="searchsubmit" class="btn btn-primary searchbutton" value="Search" />
</form>