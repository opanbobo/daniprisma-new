=== Ajax Load More for Advanced Custom Fields ===

Contributors: dcooney, connekthq
Author: Darren Cooney
Author URI: https://connekthq.com/
Plugin URI: https://connekthq.com/ajax-load-more/extensions/advanced-custom-fields/
Donate link: https://connekthq.com/donate/
Tags: ajax load more, advanced custom fields, custom fields, repeater field, flexible content, gallery, repeater, relationship
Requires at least: 4.0
Tested up to: 6.0
Stable tag: 1.3.0.1
License: GPLv2 or later
License URI: http://gnu.org/licenses/gpl-2.0.html

Ajax Load More extension that adds compatibility with various field types for Advanced Custom Fields.

== Description ==

**Ajax Load More for Advanced Custom Fields** provides additional functionality for infinite scrolling Flexible Content, Gallery, Repeater and Relationship field data with Ajax Load More.

Easily access [Repeater](https://advancedcustomfields.com/resources/repeater/), [Gallery](https://advancedcustomfields.com/resources/gallery/), [Flexible Content](https://advancedcustomfields.com/resources/flexible-content//) and [Relationship](https://advancedcustomfields.com/resources/relationship/) custom field data from a page or post and return the results to Ajax Load More for infinite scrolling.

**[View Documentation](https://connekthq.com/plugins/ajax-load-more/extensions/advanced-custom-fields/)**


= Supported Field Types =

The following ACF [Field Types](https://www.advancedcustomfields.com/resources/#field-types) are supported:

*   **Gallery** - The gallery field provides a simple and intuitive interface for managing a collection of images.
*   **Flexible Content** - The flexible content field acts as a blank canvas to which you can add an unlimited number of layouts with full control over the order.
*   **Relationship** - The Relationship field creates a very attractive version of the post object field. With a Relationship field, you can select from pages + posts + custom post types.
*   **Repeater** - The repeater field allows you to create a set of sub fields which can be repeated again and again whilst editing content.



= Shortcode Parameters =

The following Ajax Load More shortcode parameters are available when the Advanced Custom Fields extension is activated.

*   **acf** - Enable compatibility with Advanced Custom Fields. (true/false)
*   **acf_post_id** - The ID of the current page/post. Default = $post->ID
*   **acf_field_type** - The type of ACF field. (gallery/flexible/relationship/repeater)
*   **acf_field_name** - The name of the ACF field.

= Example Shortcode =

    [ajax_load_more repeater="default" acf="true" acf_field_type="repeater" acf_field_name="{your_custom_field_name}"]


== Frequently Asked Questions ==

= What version of Ajax Load More is required? =
You must have v3.0+ of Ajax Load More installed.

= How do I use this extension? =
Once installed, visit the Ajax Load More Shortcode Builder and build a custom shortcode specifying the ACF field type (acf_field_type) and field name (acf_field_name).

= What field types of Advanced Custom Fields are supported? =
Gallery, Flexible Content, Repeater and Relationship fields are currently supported.

= How do I infinite scroll Repeater fields with Ajax Load More =
Create an [ajax_load_more] shortcode and set `acf_field_type="repeater"`.

= How do I infinite scroll Relationship fields with Ajax Load More =
Create an [ajax_load_more] shortcode and set `acf_field_type="relationship"`.

= How do I infinite scroll Gallery fields with Ajax Load More =
Create an [ajax_load_more] shortcode and set `acf_field_type="gallery"`.

= How do I infinite scroll Flexible Content fields with Ajax Load More =
Create an [ajax_load_more] shortcode and set  `acf_field_type="flexible"`.


== Screenshots ==



== Installation ==

= Uploading in WordPress Dashboard =
1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `ajax-load-more-for-acf.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

= Using FTP =
1. Download `ajax-load-more-acf.zip`.
2. Extract the `ajax-load-more-for-acf` directory to your computer.
3. Upload the `ajax-load-more-for-acf` directory to the `/wp-content/plugins/` directory.
4. Ensure Ajax Load More is installed prior to activating the plugin.
5. Activate the plugin in the WP plugin dashboard.


== Changelog ==

= 1.3.0.1 - March 6, 2020 =
* FIX - Fix for issue with Relationship field type show PHP warning message about undefined variable.


= 1.3.0 - October 22, 2019 =
* UPGRADE NOTICE - Users updating to the latest ACF extension must also update core Ajax Load More to 5.1.6 to get sub_field support.
* NEW - Added support for infinite scrolling nested sub fields (`acf_parent_field_name`). Up to 3 levels of nesting is supported.
* UPDATE - Removed legacy API endpoint.


= 1.2.0 - May 6, 2019 =
* UPGRADE NOTICE - This update requires Ajax Load More 5.1+.
* NEW - ACF extension now uses the WordPress REST API for Ajax queries. This change can be reverted in ALM Settings.


= 1.1.2 - September 19, 2018 =
* FIX - Fixed cache creation issue with Cache add-on and Repeater and Flexible Content fields.
* FIX - Fixed issue with `offset` parameter not working in preloaded Ajax Load More query.
* FIX - Fixed PHP warning message about undefined variable.


= 1.1.1 - October 5, 2017 =
* NEW - Adding new `alm_get_acf_gallery_theme_repeater` function for integration between Theme Repeaters (add-on) and the Gallery Field Type.


= 1.1 - May 22, 2017 =

* NOTICE - Requires Ajax Load More 3.0.1+
* NEW - Added support for Gallery field type.
* NEW - Added support for Flexible Content field type.


= 1.0 - May 4, 2017 =
* Initial Release.


== Upgrade Notice ==
* None
