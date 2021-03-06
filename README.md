=== Plugin Name ===
Book Doctor Appointments - iCliniq
*Contributors: marshal@icliniq.com
*Tags: Book Doctor Appointments, iCliniq
*Tested up to: 3.4
*Stable tag: 1.0

This plugin uses https://www.icliniq.com 's doctor search to list doctors in your website. You can configure doctors to be listed from which location and from which specialities.

== Download the Plugin ==
<a href="http://icliniq.com/uploads/book-doctor-appointment-icliniq_1.0.rar">book-doctor-appointment-icliniq_1.0.rar</a>

== Description ==

This plugin uses iCliniq's doctor search list doctors in your website. You can configure doctors to be listed from which location and from which specialities. The plugin is very **flexible** and you can configure both location and speciality for the doctors to be listed

== Configuring the Widget ==

Go to Wp-admin => Appearance => Widget. Do drag and drop the doctor appointment booking widget to the sidebar; and configure the number of results to be displayed on the widget.


To display the doctor listing anywhere in the code, the following method should be used

`<?php display_search_result_body($page, $results_per_page){ ?>`

where $display_results_option is one of the following three options:

* **$page**           - page number of the search result; put 1 for the first page
* **$results_per_page** - number of listing per page

e.g: `<?php display_search_result_body(1, 10); ?>`

Find out more at http://icliniq.com/pages/display/page/wordpress-plugin


== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the folder `book-doctor-appointment-icliniq` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to the Options and configure it.

Find out more at http://icliniq.com/pages/display/page/wordpress-plugin


== Changelog ==

= 1.0 =
* Initial release.
* June 22th 2013.

== Upgrade Notice == 

Replace the existing files with the newer version
