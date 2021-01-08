<?php
/**
 * Custom Excerpt length for Wordpress.
 * @author LordAzriel
 * @link https://wordpress.org/support/topic/two-different-excerpt-lengths
 * @param  integer $new_length [Enter the number of words to show]
 * @param  string  $new_more   [Enter the trailing text after the last word]
 * @return  string             [returns the excerpt with new word count]
 */
function excerpt($new_length = 60, $new_more = '...') {
  add_filter('excerpt_length', function () use ($new_length) {
    return $new_length;
  }, 999);
  add_filter('excerpt_more', function () use ($new_more) {
    return $new_more;
  });
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', apply_filters('convert_chars',$output));
  //$output = '<p>' . $output . '</p>';
  return $output;
}
?>
