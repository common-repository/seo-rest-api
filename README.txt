=== Wordpress SEO REST API ===
Contributors: devinellis
Tags: seo, rest, api
Stable tag: 0.0.2
Requires at least: 4.6
Tested up to: 5.8
Requires PHP: 5.4
License: MIT
License URI: https://opensource.org/licenses/MIT

Allows the REST API to manage meta fields from common SEO plugins

== Description ==

Adds the following meta fields to the REST API. 
- `_yoast_wpseo_title` (Yoast)
- `rank_math_title` (Rank Math)
- `_aioseo_title` (All-In-One SEO)

This allows apps like https://zyppy.com to make changes to your SEO titles (once you provide an Application Password).

== Frequently Asked Questions ==

= Is it safe? =
Yes! The plugin will allow unauthenticated users to read these SEO fields, but still requires an authenticated request to make changes to them.

== Changelog ==

= 0.0.2 =
* Add SEO field API access for taxonomies (categories, tags, etc)

= 0.0.1 =
* Add Yoast, Math Rank, and All-In-One to REST API
