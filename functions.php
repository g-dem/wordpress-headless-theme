<?php
// removes CORS headers from Wordpress
add_action('rest_api_init', function() {
    remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
}, 15);

// uses home_url as site_url to avoid breaking Gutenberg
add_filter('rest_url', function($url) {
        return str_replace(home_url(), site_url(), $url);
});
