<?php
/**
 * Functions for the Customizer
 *
 * @package twentig
 */

/**
 * Sanitize select.
 *
 * @param string $choice  The value from the setting.
 * @param object $setting The selected setting.
 */
function twentig_sanitize_choices( $choice, $setting ) {
	$choice  = sanitize_key( $choice );
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $choice, $choices ) ? $choice : $setting->default );
}

/**
 * Sanitize multiple choices.
 *
 * @param array $value Array holding values from the setting.
 */
function twentig_sanitize_multi_choices( $value ) {
	$value = ! is_array( $value ) ? explode( ',', $value ) : $value;
	return ( ! empty( $value ) ? array_map( 'sanitize_text_field', $value ) : array() );
}

/**
 * Sanitize fonts choices.
 *
 * @param string $choice  The value from the setting.
 * @param object $setting The selected setting.
 */
function twentig_sanitize_fonts( $choice, $setting ) {
	$choices = $setting->manager->get_control( $setting->id )->choices;
	$choices = call_user_func_array( 'array_merge', array_values( $choices ) );
	return ( array_key_exists( $choice, $choices ) ? $choice : $setting->default );
}

/**
 * Sanitizes font-weight value.
 *
 * @param string $choice  The value from the setting.
 * @param object $setting The selected setting.
 */
function twentig_sanitize_font_weight( $choice, $setting ) {
	$valid = array( '100', '200', '300', '400', '500', '600', '700', '800', '900' );
	if ( in_array( $choice, $valid, true ) ) {
		return $choice;
	}
	return $setting->default;
}

/**
 * Sanitizes integer.
 *
 * @param int $value The value from the setting.
 */
function twentig_sanitize_integer( $value ) {
	if ( ! $value || is_null( $value ) ) {
		return $value;
	}
	return intval( $value );
}

/**
 * Sanitizes float.
 *
 * @param float $value The value from the setting.
 */
function twentig_sanitize_float( $value ) {
	if ( ! $value || is_null( $value ) ) {
		return $value;
	}
	return floatval( $value );
}

/**
 * Remove line breaks and white space chars.
 *
 * @param string $css String containing CSS.
 * @see wp_strip_all_tags
 */
function twentig_minify_css( $css ) {
	$css = preg_replace( '/[\r\n\t ]+/', ' ', $css );
	return trim( $css );
}

/**
 * Processes a json file and returns an array with its contents.
 *
 * @param string $file_path Path to file.
 * @see gutenberg_experimental_global_styles_get_from_file()
 */
function twentig_get_data_from_file( $file_path ) {
	$config = array();
	if ( file_exists( $file_path ) ) {
		$decoded_file = json_decode(
			file_get_contents( $file_path ),
			true
		);

		$json_decoding_error = json_last_error();
		if ( JSON_ERROR_NONE !== $json_decoding_error ) {
			return $config;
		}

		if ( is_array( $decoded_file ) ) {
			$config = $decoded_file;
		}
	}
	return $config;
}

/**
 * Determines if AMP
 */
function twentig_is_amp_endpoint() {
	if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
		return true;
	}
	return false;
}
