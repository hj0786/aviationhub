=== Integrate Razorpay for Contact Form 7 ===
Contributors: vinaysaini30, abhilashg90
Tags: razorpay, contact form 7, contact form, contact form razorpay, contact form 7 razorpay 
Requires at least: 5.6
Tested up to: 5.9
Stable tag: 1.0.1
Requires PHP: 7.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
 
Seamlessly integrates Razorpay with Contact Form 7

== Description ==

This Razorpay Add-on is a WordPress plugin for Contact Form 7.  It seamlessly integrates the Razorpay Payment Gateway with the forms created through Contact Form 7 plugin. Developers can now add this for easy payments in their Contact Form 7 on WordPress platform for their website’s customers. 

Note: The sole dependency of this plugin is “Contact Form 7”. It is mandatory to install the same first and then continue with the Razorpay Addon.

= Features =

You will have the following features in the Razorpay panel (payments and settings) after successful installation- 

* Individual activation/deactivation of Razorpay in different forms
* Individual detail addition (item id, item price, name, etc.) in different forms
* Both “Test” or “Live” mode 
* API integration credentials inputs of ID and secret key present
* Company name can be added
* “Return URL” option for a landing page after payment
* All the payments listed under Razorpay Payment page on WordPress dashboard
* Payments can be filtered according to forms, status, dates, etc.
* View more information related to individual payments in a popup.
* A payment can be searched using internally generated Order ID. 
* “Error” upon entering wrong credentials 

== Installation ==

* Upload the plugin zip file through the WordPress admin panel “Upload Plugin” button.
* Activate the plugin from the plugin list page.
* You’ll notice a “Razorpay” column on the form editing panel. Also, a “Razorpay Settings” and “Razorpay Payments” panels will show on your left WordPress Dashboard under the Contact Form 7 Plugin.
* Choose the mode (sandbox or live).
* If you already have a Razorpay account, provide necessary Razorpay API credentials (key ID and key secret) received from your Razorpay Dashboard to make use of Razorpay API services. You can also add the company name and return URL. 
* Upon integration, you are ready to use the gateway for different forms.
* Enable the Razorpay payment checkbox and provide necessary product/item details per form that has been created through Contact Form 7.  

== Frequently Asked Questions ==

== Screenshots ==

1. Razorpay Settings per Contact Form 7
2. Razorpay General Settings
3. Razorpay Payments list page
4. Individual Razorpay Payment detail view
5. Find Payment based on internal order number
6. Filter Payments based on Contact Form 7
7. Filter Payments based on status(success | failure | pending)

== Changelog ==

= 1.0.1 - 2022-02-04 =
* Fixed: Razorpay payment poup not triggering.
* Changed: Razorpay default mode set to Test.

= 1.0 - 2022-02-02 =
* Added: First commit.