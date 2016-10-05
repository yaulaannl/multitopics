




<?php

if(get_locale() == 'zh_TW'){
  $search_ph =  '找文章:';
}else{
  $search_ph =  'Find Posts:';
}


?>

<form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">
	<div class="row div-form">
		<div class="col-sm-9 col-search-field">
		  <input type="search" class="search-field" 
			placeholder="<?php echo esc_attr_x( $search_ph, 'placeholder' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
		  />
		</div>	
		
		<div class="col-sm-2 col-search-button">
		  <label for="searchSubmit" class="btn"><i class="fa fa-search"></i></label>
		</div>
	</div>
  <input id="searchSubmit"  type="submit" class="hidden">
</form>
