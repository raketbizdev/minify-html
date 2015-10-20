function minify_html($minify) {

    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );

    $minify = preg_replace($search, $replace, $minify);

    return $minify;
}

ob_start("minify_html");
add_action('get_header', 'minify_html');
