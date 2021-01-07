<?php
/**
 * Blog functionalities.
 *
 * @package twentig
 */

/**
 * Set the excerpt more link.
 *
 * @param string $more The string shown within the more link.
 */
function twentig_twentyone_excerpt_more( $more ) {
	if ( is_home() || is_archive() || ( is_search() && 'blog-layout' === get_theme_mod( 'twentig_page_search_layout' ) ) ) {
		if ( ! get_theme_mod( 'twentig_blog_excerpt_more', true ) ) {
			return '&hellip;';
		}
		return '&hellip; <div class="more-link-container"><a class="more-link" href="' . esc_url( get_permalink() ) . '">' . twenty_twenty_one_continue_reading_text() . '</a></div>';
	}

	return $more;
}
add_filter( 'excerpt_more', 'twentig_twentyone_excerpt_more', 20 );

/**
 * Set excerpt length.
 *
 * @param int $excerpt_length The maximum number of words.
 */
function twentig_twentyone_custom_excerpt_length( $excerpt_length ) {
	if ( is_home() || is_archive() || ( is_search() && 'blog-layout' === get_theme_mod( 'twentig_page_search_layout' ) ) ) {
		$newlength = get_theme_mod( 'twentig_blog_excerpt_length' );
		if ( $newlength ) {
			return $newlength;
		}
	}
	return $excerpt_length;
}
add_filter( 'excerpt_length', 'twentig_twentyone_custom_excerpt_length' );

/**
 * Removes the post excerpt displayed on the archive pages based on Customizer setting.
 */
function twentig_twentyone_filter_excerpt() {
	if ( ! get_theme_mod( 'twentig_blog_content', true ) && ( is_home() || is_archive() ) ) {
		add_filter( 'the_excerpt', '__return_empty_string' );
	}
}
add_action( 'get_template_part_template-parts/content/content-excerpt', 'twentig_twentyone_filter_excerpt' );

/**
 * Removes the post content displayed on the archive pages based on Customizer setting.
 */
function twentig_twentyone_filter_content() {
	if ( ! get_theme_mod( 'twentig_blog_content', true ) && ( is_home() || is_archive() ) ) {
		add_filter( 'the_content', '__return_empty_string' );
	}
}
add_action( 'get_template_part_template-parts/content/content', 'twentig_twentyone_filter_content' );

/**
 * Adds custom classes to the array of post classes.
 *
 * @param string[] $classes An array of post class names.
 * @param string[] $class   An array of additional class names added to the post.
 * @param int      $post_id The post ID.
 */
function twentig_twentyone_post_class( $classes, $class, $post_id ) {
	$post = get_post( $post_id );

	if ( 'post' === $post->post_type ) {
		if ( ! is_singular() ) {

			$post_meta = get_theme_mod( 'twentig_blog_meta', array( 'author', 'categories', 'tags' ) );
			if ( empty( $post_meta ) ) {
				$classes[] = 'tw-no-meta';
			}
		}

		if ( is_singular( 'post' ) ) {
			if ( 'no-image' === get_theme_mod( 'twentig_post_hero_layout' ) ) {
				$classes = array_diff( $classes, array( 'has-post-thumbnail' ) );
			}
			if ( empty( get_theme_mod( 'twentig_post_bottom_meta', array( 'date', 'author', 'categories', 'tags' ) ) ) ) {
				$classes[] = 'has-no-footer-meta';
			}
		}

		if ( ! get_theme_mod( 'twentig_blog_meta_label', true ) ) {
			$classes[] = 'tw-no-meta-label';
		}
	} elseif ( is_singular( 'page' ) && ( 'no-image' === get_theme_mod( 'twentig_page_hero_layout' ) ) ) {
		$classes = array_diff( $classes, array( 'has-post-thumbnail' ) );
	}
	return $classes;
}
add_filter( 'post_class', 'twentig_twentyone_post_class', 10, 3 );

/**
 * Determines if post thumbnail should be displayed.
 *
 * @param bool $can_show Whether the post thumbnail can be displayed.
 */
function twentig_twentyone_display_featured_image( $can_show ) {

	if ( ! get_theme_mod( 'twentig_blog_image', true ) && ( is_home() || is_archive() || is_post_type_archive( 'post' ) || ( is_search() && 'blog-layout' === get_theme_mod( 'twentig_page_search_layout' ) ) ) ) {
		return false;
	}

	if ( is_singular( 'post' ) && ( 'no-image' === get_theme_mod( 'twentig_post_hero_layout' ) ) ) {
		return false;
	}

	if ( is_singular( 'page' ) && ( 'no-image' === get_theme_mod( 'twentig_page_hero_layout' ) ) ) {
		return false;
	}

	return $can_show;
}
add_filter( 'twenty_twenty_one_can_show_post_thumbnail', 'twentig_twentyone_display_featured_image' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality.
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 */
function twentig_twentyone_calculate_image_sizes( $sizes ) {

	$wide_width    = get_theme_mod( 'twentig_wide_width', 1240 );
	$wide_width    = $wide_width ? $wide_width : 1240;
	$default_width = get_theme_mod( 'twentig_default_width', 610 );
	$default_width = $default_width ? $default_width : 610;
	$search_layout = get_theme_mod( 'twentig_page_search_layout' );
	$has_sidebar   = twentig_twentyone_has_sidebar();

	if ( is_home() || is_author() || is_category() || is_tag() || is_date() || is_tax( get_object_taxonomies( 'post' ) )
		|| ( is_search() && 'blog-layout' === $search_layout ) ) {

		$blog_layout = get_theme_mod( 'twentig_blog_layout' );
		$image_width = get_theme_mod( 'twentig_blog_image_width', 'wide' );
		$blog_style  = get_theme_mod( 'twentig_blog_style', 'separator' );

		if ( $has_sidebar ) {
			if ( 'grid' === $blog_layout ) {
				$blog_columns = get_theme_mod( 'twentig_blog_columns', '3' );
				if ( '2' === $blog_columns ) {
					$sizes = '(min-width: 1280px) ' . intval( ( $wide_width - 440 ) / 2 ) . 'px, (min-width: 1024px) calc(50vw - 242px), (min-width: 652px) ' . intval( $default_width / 2 - 12 ) . 'px, (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
				} else {
					$sizes = '(min-width: 1280px) ' . intval( ( $wide_width - 480 ) / 3 ) . 'px, (min-width: 1024px) calc(50vw - 242px), (min-width: 652px) ' . intval( $default_width / 2 - 12 ) . 'px, (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
				}
			} else {
				$sizes = '(min-width: 1280px) ' . intval( $wide_width - 400 ) . 'px, (min-width: 1024px) calc(100vw - 460px), (min-width: 652px) ' . intval( $default_width ) . 'px, (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
			}
		} else {
			if ( 'grid' === $blog_layout ) {
				$blog_columns = get_theme_mod( 'twentig_blog_columns', '3' );
				if ( '2' === $blog_columns ) {
					$sizes = '(min-width: 1280px) ' . intval( $wide_width / 2 - 20 ) . 'px, (min-width: 822px) calc(50vw - 80px), (min-width: 652px) calc(50vw - 52px), (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
				} else {
					$sizes = '(min-width: 1280px) ' . intval( $wide_width / 3 - 27 ) . 'px, (min-width: 822px) calc(50vw - 80px), (min-width: 652px) calc(50vw - 52px), (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
				}
			} else {
				if ( 'text-width' === $image_width || 'card-shadow' === $blog_style || 'card-border' === $blog_style ) {
					$sizes = '(min-width: 652px) ' . intval( $default_width ) . 'px, (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
				} else {
					$sizes = '(min-width: 1280px) ' . intval( $wide_width ) . 'px, (min-width: 822px) calc(100vw - 120px), (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
				}
			}
		}
	} elseif ( is_singular( array( 'post', 'page' ) ) && ! is_page_template() ) {
		$hero_layout = is_page() ? get_theme_mod( 'twentig_page_hero_layout' ) : get_theme_mod( 'twentig_post_hero_layout' );

		if ( $has_sidebar ) {
			$sizes = '(min-width: 1280px) ' . intval( $wide_width - 400 ) . 'px, (min-width: 1024px) calc(100vw - 460px), (min-width: 652px) ' . intval( $default_width ) . 'px, (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
		} elseif ( in_array( $hero_layout, array( 'full-image', 'cover', 'cover-full' ), true ) ) {
			$sizes = '100vw';
		} elseif ( 'narrow-image' === $hero_layout ) {
			$sizes = '(min-width: 652px) ' . intval( $default_width ) . 'px, (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
		} else {
			$sizes = '(min-width: 1280px) ' . intval( $wide_width ) . 'px, (min-width: 822px) calc(100vw - 120px), (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
		}
	}
	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentig_twentyone_calculate_image_sizes' );

/**
 * Filters the content of the latest posts block to change the image sizes attribute.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attribute.
 */
function twentig_twentyone_change_latest_posts_image_sizes( $block_content, $block ) {
	if ( 'core/latest-posts' === $block['blockName'] ) {
		$image = $block['attrs'] && isset( $block['attrs']['displayFeaturedImage'] ) ? $block['attrs']['displayFeaturedImage'] : 0;

		if ( $image ) {
			$image_width = $block['attrs'] && isset( $block['attrs']['featuredImageSizeWidth'] ) ? $block['attrs']['featuredImageSizeWidth'] : '';
			$sizes       = '';

			if ( '' === $image_width ) {
				$layout        = $block['attrs'] && isset( $block['attrs']['postLayout'] ) ? $block['attrs']['postLayout'] : '';
				$block_align   = $block['attrs'] && isset( $block['attrs']['align'] ) ? $block['attrs']['align'] : '';
				$image_align   = $block['attrs'] && isset( $block['attrs']['featuredImageAlign'] ) ? $block['attrs']['featuredImageAlign'] : '';
				$wide_width    = get_theme_mod( 'twentig_wide_width', 1240 );
				$wide_width    = $wide_width ? $wide_width : 1240;
				$default_width = get_theme_mod( 'twentig_default_width', 610 );
				$default_width = $default_width ? $default_width : 610;

				if ( 'grid' === $layout ) {
					$columns = $block['attrs'] && isset( $block['attrs']['columns'] ) ? intval( $block['attrs']['columns'] ) : 3;

					if ( 'left' === $image_align || 'right' === $image_align ) {
						$sizes = '(min-width: 1280px) ' . intval( $wide_width * 0.125 - 5 ) . 'px, (min-width: 652px) calc(12.5vw - 15px), calc(25vw - 10px)';
					} else {
						if ( 'wide' === $block_align || 'full' === $block_align ) {
							$sizes = '(min-width: 1280px) ' . intval( $wide_width / 4 - 30 ) . 'px, (min-width: 1024px) calc(25vw - 60px), (min-width: 822px) calc(50vw - 80px), (min-width: 652px) calc(50vw - 52px), (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
							if ( 2 === $columns ) {
								$sizes = '(min-width: 1280px) ' . intval( $wide_width / 2 - 20 ) . 'px, (min-width: 822px) calc(50vw - 80px), (min-width: 652px) calc(50vw - 52px), (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
							} elseif ( 3 === $columns ) {
								$sizes = '(min-width: 1280px) ' . intval( $wide_width / 3 - 27 ) . 'px, (min-width: 1024px) calc(33.33vw - 66px), (min-width: 822px) calc(50vw - 80px), (min-width: 652px) calc(50vw - 52px), (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
							}
						} else {
							$sizes = '(min-width: 1024px) ' . intval( $default_width / 3 - 27 ) . 'px, (min-width: 652px) ' . intval( $default_width / 2 - 16 ) . 'px, (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
							if ( 2 === $columns ) {
								$sizes = '(min-width: 652px) ' . intval( $default_width / 2 - 16 ) . 'px, (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
							}
						}
					}
				} else {
					if ( 'left' === $image_align || 'right' === $image_align ) {
						if ( '' === $block_align ) {
							$sizes = '(min-width: 652px) ' . intval( $default_width * 0.25 ) . 'px, calc(25vw - 10px)';
						} else {
							$sizes = '(min-width: 1280px) ' . intval( $wide_width * 0.25 ) . 'px, (min-width: 652px) calc(25vw - 25px), calc(25vw - 10px)';
						}
					} else {
						$sizes = '(min-width: 652px) ' . intval( $default_width ) . 'px, (min-width: 482px) calc(100vw - 80px), calc(100vw - 40px)';
					}
				}
			} else {
				$sizes = $image_width . 'px';
			}
			if ( $sizes ) {
				return preg_replace( '/sizes="([^>]+?)"/', 'sizes="' . $sizes . '"', $block_content );
			}
		}
	}
	return $block_content;
}
add_filter( 'render_block', 'twentig_twentyone_change_latest_posts_image_sizes', 10, 2 );

/**
 * Filters whether all posts are open for comments.
 *
 * @param bool $open Whether the current post is open for comments.
 */
function twentig_twentyone_comments_open( $open ) {
	if ( ! get_theme_mod( 'twentig_blog_comments', true ) ) {
		return false;
	}
	return $open;
}
add_filter( 'comments_open', 'twentig_twentyone_comments_open' );

/**
 * Filters the comment count for all posts.
 *
 * @param string|int $count A string representing the number of comments a post has, otherwise 0.
 */
function twentig_twentyone_comments_number( $count ) {
	if ( ! get_theme_mod( 'twentig_blog_comments', true ) ) {
		return 0;
	}
	return $count;
}
add_filter( 'get_comments_number', 'twentig_twentyone_comments_number' );

