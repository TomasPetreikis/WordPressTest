<?php
/**
 * Cover block patterns.
 *
 * @package twentig
 * @phpcs:disable Squiz.Strings.DoubleQuoteUsage.NotRequired
 */

twentig_register_block_pattern(
	'twentig/wide-cover',
	array(
		'title'      => __( 'Wide Cover', 'twentig' ),
		'categories' => array( 'cover' ),
		'content'    => '<!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'wide.jpg' ) . '","minHeight":500,"align":"wide"} --><div class="wp-block-cover alignwide has-background-dim" style="background-image:url(' . twentig_get_pattern_asset( 'wide.jpg' ) . ');min-height:500px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2> <!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Class aptent taciti sociosqu ad litora torquent per conubia.</p> <!-- /wp:paragraph --></div></div> <!-- /wp:cover -->',
	)
);

twentig_register_block_pattern(
	'twentig/full-width-cover',
	array(
		'title'      => __( 'Full Width Cover', 'twentig' ),
		'categories' => array( 'cover' ),
		'content'    => '<!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'wide.jpg' ) . '","minHeight":500,"align":"full"} --><div class="wp-block-cover alignfull has-background-dim" style="background-image:url(' . twentig_get_pattern_asset( 'wide.jpg' ) . ');min-height:500px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2> <!-- /wp:heading --></div></div> <!-- /wp:cover -->',
	)
);

twentig_register_block_pattern(
	'twentig/fullscreen-cover',
	array(
		'title'      => __( 'Fullscreen Cover', 'twentig' ),
		'categories' => array( 'cover' ),
		'content'    => '<!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'wide.jpg' ) . '","minHeight":"","align":"full","twFullscreen":true} --><div class="wp-block-cover alignfull has-background-dim tw-fullscreen" style="background-image:url(' . twentig_get_pattern_asset( 'wide.jpg' ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2> <!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Class aptent taciti sociosqu ad litora torquent per conubia.</p> <!-- /wp:paragraph --></div></div> <!-- /wp:cover -->',
	)
);

twentig_register_block_pattern(
	'twentig/fullscreen-cover-with-card',
	array(
		'title'      => __( 'Fullscreen Cover with Card', 'twentig' ),
		'categories' => array( 'cover' ),
		'content'    => '<!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'wide.jpg' ) . '","dimRatio":0,"align":"full","twFullscreen":true} --><div class="wp-block-cover alignfull tw-fullscreen" style="background-image:url(' . twentig_get_pattern_asset( 'wide.jpg' ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:group {"backgroundColor":"white"} --><div class="wp-block-group has-white-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"tw-mb-4"} --><h2 class="tw-mb-4">' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2> <!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Class aptent taciti sociosqu ad litora torquent per conubia. Venenatis nec convallis magna, eu congue velit. Aliquam tempus mi nulla porta luctus.</p> <!-- /wp:paragraph --></div></div> <!-- /wp:group --></div></div> <!-- /wp:cover -->',
	)
);

twentig_register_block_pattern(
	'twentig/fullscreen-cover-with-heading-above-card',
	array(
		'title'      => __( 'Fullscreen Cover with Heading Above Card', 'twentig' ),
		'categories' => array( 'cover' ),
		'content'    => '<!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'wide.jpg' ) . '","align":"full","twFullscreen":true} --><div class="wp-block-cover alignfull has-background-dim tw-fullscreen" style="background-image:url(' . twentig_get_pattern_asset( 'wide.jpg' ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2> <!-- /wp:heading --><!-- wp:group {"backgroundColor":"white","className":"tw-mt-8"} --><div class="wp-block-group has-white-background-color has-background tw-mt-8"><div class="wp-block-group__inner-container"><!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size"><strong>' . esc_html_x( 'Write a lead paragraph.', 'Block pattern content', 'twentig' ) . ' Lorem ipsum dolor sit amet, commodo erat adipiscing elit.</strong></p> <!-- /wp:paragraph --><!-- wp:paragraph --><p>Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus class aptent taciti sociosqu ad. Mauris dui tellus mollis quis varius, sit amet ultrices in leo. Cras et purus sit amet velit congue convallis nec id diam. Sed gravida enim sed convallis porttitor.</p> <!-- /wp:paragraph --></div></div> <!-- /wp:group --></div></div> <!-- /wp:cover -->',
	)
);

twentig_register_block_pattern(
	'twentig/cover-with-2-text-columns',
	array(
		'title'      => __( 'Cover with 2 Text Columns', 'twentig' ),
		'categories' => array( 'cover', 'columns-text' ),
		'content'    => '<!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'wide.jpg' ) . '","align":"full"} --><div class="wp-block-cover alignfull has-background-dim" style="background-image:url(' . twentig_get_pattern_asset( 'wide.jpg' ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2> <!-- /wp:heading --><!-- wp:columns {"twColumnStyle":"card-border"} --><div class="wp-block-columns tw-cols-card tw-cols-card-border"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. </p> <!-- /wp:paragraph --></div> <!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Venenatis nec convallis magna eu congue.</p> <!-- /wp:paragraph --></div> <!-- /wp:column --></div> <!-- /wp:columns --></div></div> <!-- /wp:cover -->',
	)
);

twentig_register_block_pattern(
	'twentig/cover-with-3-text-columns',
	array(
		'title'      => __( 'Cover with 3 Text Columns', 'twentig' ),
		'categories' => array( 'cover', 'columns-text' ),
		'content'    => '<!-- wp:cover {"customGradient":"linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%)","align":"full"} --><div class="wp-block-cover alignfull has-background-dim has-background-gradient" style="background:linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%)"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2> <!-- /wp:heading --><!-- wp:columns {"align":"wide","className":"tw-cols-rounded tw-justify-center","twColumnStyle":"card-gray","twTextAlign":"center"} --><div class="wp-block-columns alignwide tw-cols-rounded tw-justify-center tw-cols-card tw-cols-card-gray has-text-align-center"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore.</p> <!-- /wp:paragraph --></div> <!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Venenatis nec convallis magna eu congue.</p> <!-- /wp:paragraph --></div> <!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'Third item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph --><p>Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum. Morbi fringilla sapien libero.</p> <!-- /wp:paragraph --></div> <!-- /wp:column --></div> <!-- /wp:columns --></div></div> <!-- /wp:cover -->',
	)
);

twentig_register_block_pattern(
	'twentig/2-columns-with-cover',
	array(
		'title'      => __( '2 Columns with Cover', 'twentig' ),
		'categories' => array( 'cover' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2> <!-- /wp:heading --><!-- wp:columns {"align":"wide","twStack":"md","twTextAlign":"center"} --><div class="wp-block-columns alignwide tw-cols-stack-md has-text-align-center"><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'square1.jpg' ) . '","minHeight":500,"twStretchedLink":true} --><div class="wp-block-cover has-background-dim tw-stretched-link" style="background-image:url(' . twentig_get_pattern_asset( 'square1.jpg' ) . ');min-height:500px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} --><h3>' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph {"fontSize":"medium"} --><p class="has-medium-font-size">Lorem ipsum dolor sit amet.</p> <!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">' . esc_html_x( 'Learn more', 'Block pattern content', 'twentig' ) . '</a></p> <!-- /wp:paragraph --></div></div> <!-- /wp:cover --></div> <!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'square2.jpg' ) . '","minHeight":500,"twStretchedLink":true} --><div class="wp-block-cover has-background-dim tw-stretched-link" style="background-image:url(' . twentig_get_pattern_asset( 'square2.jpg' ) . ');min-height:500px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} --><h3>' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph {"fontSize":"medium"} --><p class="has-medium-font-size">Sed do eiusmod ut tempor.</p> <!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">' . esc_html_x( 'Learn more', 'Block pattern content', 'twentig' ) . '</a></p> <!-- /wp:paragraph --></div></div> <!-- /wp:cover --></div> <!-- /wp:column --></div> <!-- /wp:columns --></div></div> <!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/2-columns-with-cover-bottom-aligned-text',
	array(
		'title'      => __( '2 Columns with Cover: Bottom Aligned Text', 'twentig' ),
		'categories' => array( 'cover' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2> <!-- /wp:heading --><!-- wp:columns {"align":"wide","twStack":"md"} --><div class="wp-block-columns alignwide tw-cols-stack-md"><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'square1.jpg' ) . '","minHeight":500,"contentPosition":"bottom left"} --><div class="wp-block-cover has-background-dim has-custom-content-position is-position-bottom-left" style="background-image:url(' . twentig_get_pattern_asset( 'square1.jpg' ) . ');min-height:500px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"className":"tw-mb-2","fontSize":"h4"} --><h3 class="tw-mb-2 has-h-4-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore.</p> <!-- /wp:paragraph --></div></div> <!-- /wp:cover --></div> <!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'square2.jpg' ) . '","minHeight":500,"contentPosition":"bottom left"} --><div class="wp-block-cover has-background-dim has-custom-content-position is-position-bottom-left" style="background-image:url(' . twentig_get_pattern_asset( 'square2.jpg' ) . ');min-height:500px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"className":"tw-mb-2","fontSize":"h4"} --><h3 class="tw-mb-2 has-h-4-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus, suscipit eu iaculis sed, ullamcorper at metus. Venenatis nec convallis magna eu congue velit.</p> <!-- /wp:paragraph --></div></div> <!-- /wp:cover --></div> <!-- /wp:column --></div> <!-- /wp:columns --></div></div> <!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/2-columns-with-cover-x-2-top-aligned-text',
	array(
		'title'      => __( '2 Columns with Cover x 2: Top Aligned Text', 'twentig' ),
		'categories' => array( 'cover' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2> <!-- /wp:heading --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'square1.jpg' ) . '","className":"tw-rounded","contentPosition":"top left"} --><div class="wp-block-cover has-background-dim tw-rounded has-custom-content-position is-position-top-left" style="background-image:url(' . twentig_get_pattern_asset( 'square1.jpg' ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor. </h3> <!-- /wp:heading --></div></div> <!-- /wp:cover --></div> <!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'square2.jpg' ) . '","className":"tw-rounded","contentPosition":"top left"} --><div class="wp-block-cover has-background-dim tw-rounded has-custom-content-position is-position-top-left" style="background-image:url(' . twentig_get_pattern_asset( 'square2.jpg' ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">Integer enim risus suscipit eu iaculis sed ullamcorper at metus. Venenatis nec convallis magna eu congue velit.</h3> <!-- /wp:heading --></div></div> <!-- /wp:cover --></div> <!-- /wp:column --></div> <!-- /wp:columns --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'square3.jpg' ) . '","className":"tw-rounded","contentPosition":"top left"} --><div class="wp-block-cover has-background-dim tw-rounded has-custom-content-position is-position-top-left" style="background-image:url(' . twentig_get_pattern_asset( 'square3.jpg' ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">Duis enim elit porttitor id feugiat at blandit at erat. Proin varius libero sit amet tortor. </h3> <!-- /wp:heading --></div></div> <!-- /wp:cover --></div> <!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'square4.jpg' ) . '","className":"tw-rounded","contentPosition":"top left"} --><div class="wp-block-cover has-background-dim tw-rounded has-custom-content-position is-position-top-left" style="background-image:url(' . twentig_get_pattern_asset( 'square4.jpg' ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">Fusce sed magna eu ligula commodo hendrerit fringilla ac purus integer sagittis. </h3> <!-- /wp:heading --></div></div> <!-- /wp:cover --></div> <!-- /wp:column --></div> <!-- /wp:columns --></div></div> <!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/2-columns-with-cover-x-2-full-width',
	array(
		'title'      => __( '2 Columns with Cover x 2: Full Width', 'twentig' ),
		'categories' => array( 'cover' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><div class="wp-block-group__inner-container"><!-- wp:columns {"align":"full","twStack":"md","twTextAlign":"center"} --><div class="wp-block-columns alignfull tw-cols-stack-md has-text-align-center"><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'square1.jpg' ) . '","minHeight":500,"twHover":"opacity"} --><div class="wp-block-cover has-background-dim" style="background-image:url(' . twentig_get_pattern_asset( 'square1.jpg' ) . ');min-height:500px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} --><h3>' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph {"fontSize":"medium"} --><p class="has-medium-font-size">Lorem ipsum dolor sit amet.</p> <!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">' . esc_html_x( 'Learn more', 'Block pattern content', 'twentig' ) . '</a></p> <!-- /wp:paragraph --></div></div> <!-- /wp:cover --></div> <!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'square2.jpg' ) . '","minHeight":500,"twHover":"opacity"} --><div class="wp-block-cover has-background-dim" style="background-image:url(' . twentig_get_pattern_asset( 'square2.jpg' ) . ');min-height:500px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} --><h3>' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph {"fontSize":"medium"} --><p class="has-medium-font-size">Integer enim risus.</p> <!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">' . esc_html_x( 'Learn more', 'Block pattern content', 'twentig' ) . '</a></p> <!-- /wp:paragraph --></div></div> <!-- /wp:cover --></div> <!-- /wp:column --></div> <!-- /wp:columns --><!-- wp:columns {"align":"full","twStack":"md","twTextAlign":"center"} --><div class="wp-block-columns alignfull tw-cols-stack-md has-text-align-center"><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'square3.jpg' ) . '","minHeight":500,"twHover":"opacity"} --><div class="wp-block-cover has-background-dim" style="background-image:url(' . twentig_get_pattern_asset( 'square3.jpg' ) . ');min-height:500px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} --><h3>' . esc_html_x( 'Third item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph {"fontSize":"medium"} --><p class="has-medium-font-size">Mauris dui tellus mollis.</p> <!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">' . esc_html_x( 'Learn more', 'Block pattern content', 'twentig' ) . '</a></p> <!-- /wp:paragraph --></div></div> <!-- /wp:cover --></div> <!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'square4.jpg' ) . '","minHeight":500,"twHover":"opacity"} --><div class="wp-block-cover has-background-dim" style="background-image:url(' . twentig_get_pattern_asset( 'square4.jpg' ) . ');min-height:500px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} --><h3>' . esc_html_x( 'Fourth item', 'Block pattern content', 'twentig' ) . '</h3> <!-- /wp:heading --><!-- wp:paragraph {"fontSize":"medium"} --><p class="has-medium-font-size">Nunc vehicula at rhoncus ultrices.</p> <!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">' . esc_html_x( 'Learn more', 'Block pattern content', 'twentig' ) . '</a></p> <!-- /wp:paragraph --></div></div> <!-- /wp:cover --></div> <!-- /wp:column --></div> <!-- /wp:columns --></div></div> <!-- /wp:group -->',
	)
);
