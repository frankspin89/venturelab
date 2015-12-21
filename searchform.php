<?php
/**
 * The template for displaying search form
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

do_action( 'foundationpress_before_searchform' ); ?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="search-input-wrapper hidden">
		<input type="text" value="" name="s" id="s" class="search-input" placeholder="<?php esc_attr_e( 'Enter your search term here...', 'foundationpress' ); ?>">
	</div>
	<div class="row collapse">
		<?php do_action( 'foundationpress_searchform_top' ); ?>
		<?php do_action( 'foundationpress_searchform_before_search_button' ); ?>
		<div class="small-2 pull-right columns">
			<button id="searchsubmit" value="<?php esc_attr_e( 'Search', 'foundationpress' ); ?>" class="prefix button button-search">Seach</button>
		</div>
		<?php do_action( 'foundationpress_searchform_after_search_button' ); ?>
	</div>
</form>
<?php do_action( 'foundationpress_after_searchform' ); ?>
