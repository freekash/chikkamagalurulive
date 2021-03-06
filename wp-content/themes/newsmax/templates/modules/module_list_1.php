<?php
/**-------------------------------------------------------------------------------------------------------------------------
 * @param $options
 *
 * @return string
 * render post list 1, standard list (responsive as grid)
 */
if ( ! function_exists( 'newsmax_ruby_post_list_1' ) ) {
	function newsmax_ruby_post_list_1( $options = array() ) {

		$review = newsmax_ruby_post_review_icon();

		$class_name   = array();
		$class_name[] = 'post-wrap post-list post-list-1 clearfix';
		if ( ! has_post_thumbnail() ) {
			$class_name[] = 'is-no-featured';
		}
		if ( ! empty( $options['block_style'] ) && 'dark' == $options['block_style'] ) {
			$class_name[] = 'is-light-text is-dark-post';
		}
		if ( ! empty( $options['thumb_position'] ) ) {
			$class_name[] = 'is-right-thumb';
		}

		$class_name = implode( ' ', $class_name );
		$str        = '';
		$str .= '<article class="' . esc_attr( $class_name ) . '">';
		$str .= '<div class="post-list-inner">';

		if ( has_post_thumbnail() ) {

			$str .= '<div class="col-sm-6 col-xs-12 col-left">';
			$smooth_style = newsmax_ruby_post_check_smooth_display_style();
			if ( empty( $smooth_style ) ) {
				$str .= '<div class="post-thumb-outer">';
			} else {
				$str .= '<div class="post-thumb-outer ruby-animated-image ' . esc_attr( $smooth_style ) . '">';
			}
			$str .= newsmax_ruby_post_thumb( array( 'size' => 'newsmax_ruby_crop_364x225' ) );
			if ( ! empty( $options['share'] ) ) {
				$str .= newsmax_ruby_post_meta_info_share();
			}
			$str .= newsmax_ruby_post_format();
			if ( ! empty( $review ) ) {
				$str .= $review;
			} else {
				$str .= newsmax_ruby_post_meta_info_media_duration();
			}
			$str .= '</div>';
			$str .= '</div>';
		}

		$str .= '<div class="col-sm-6 col-xs-12 col-right">';
		$str .= '<div class="post-body">';
		if ( ! empty( $options['cat_info'] ) ) {
			$str .= newsmax_ruby_post_cat_info( 'is-relative is-dark-text' );
		}
		$str .= newsmax_ruby_post_title();
		if ( ! empty( $options['meta_info'] ) ) {
			$str .= newsmax_ruby_post_meta_info();
		}
		if ( ! empty( $options['excerpt'] ) ) {
			$str .= newsmax_ruby_post_excerpt( $options['excerpt'] );
		}
		$str .= newsmax_ruby_post_readmore();
		$str .= '</div>';
		$str .= '</div>';
		$str .= '</div>';
		$str .= '</article>';

		return $str;
	}
}