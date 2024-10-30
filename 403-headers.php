<?php
/**
 * Plugin Name: HTTP/1.1 403 Forbidden header on a failed login
 * Plugin URI: http://mypluginuri.com/
 * Description: Send a HTTP/1.1 403 Forbidden header on a failed login
 * Version: 1.0
 * Author: Arttu Manninen
 * Author URI: http://www.kaktus.cc
 * License: Public domain
 */

add_action('wp_login_failed', function() {
  status_header(403);
});