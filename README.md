# minify-html
this is a wordpress snippits for minification of html it will also work on other php site just remove the `add_action hook`.

```php
add_action('get_header', 'minify_html');
```

**Instructions**

1. Open function.php
2. Copy and paste the snnipits
3. Save

Done!

# Removing Version in Css and in JavaScript

```php
// Remove WP Version From Styles	
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
```
