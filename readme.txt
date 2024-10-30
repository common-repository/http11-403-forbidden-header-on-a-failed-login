=== Plugin Name ===
Contributors: atmosphear
Tags: spam, fail2ban, headers
Requires at least: 4.0.0
Tested up to: 4.4.2
Stable tag: 1.0
License: Public domain

Send an "HTTP/1.1 403 Forbidden" header on a failed login instead of the default "HTTP/1.1 200 OK"

== Description ==

Send an "HTTP/1.1 403 Forbidden" header on a failed login instead of "HTTP/1.1 200 OK", which is the WordPress default header on failed login. This is a tremendously simple plugin that does only that and absolutely nothing else.

The purpose of this plugin is to provide a way to allow external tools like fail2ban to get a message of a failed login e.g. to prevent a brute-force attack on a firewall level.

For the public domain.

Uses PHP5.3 anonymous functions and will not work on earlier versions of PHP
