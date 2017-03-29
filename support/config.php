<?php
return array(

//The base_dir and archive_file path are combined to point to your tar archive
//The basic idea is a seperate process builds the tar file, then this finds it
'base_dir' => dirname(__FILE__) . '/..',
'archive_files' => 'tmp.tar',

//The Magento Connect extension name.  Must be unique on Magento Connect
//Has no relation to your code module name.  Will be the Connect extension name
'extension_name' => 'windsor_circle_analytics',

//Your extension version.  By default, if you're creating an extension from a
//single Magento module, the tar-to-connect script will look to make sure this
//matches the module version.  You can skip this check by setting the
//skip_version_compare value to true
'extension_version' => '0.0.0',
'skip_version_compare' => false,

//You can also have the package script use the version in the module you
//are packaging with.
'auto_detect_version' => true,

//Where on your local system you'd like to build the files to
'path_output' => dirname(__FILE__) . '/../dist',

//Magento Connect license value.
'stability' => 'stable',

//Magento Connect license value
'license' => 'MIT',

//Magento Connect channel value.  This should almost always (always?) be community
'channel' => 'community',

//Magento Connect information fields.
'summary' => 'Windsor Circle Analytics lets you integrate with Windsor Circle.',
'description' => 'Windsor Circle Analytics for Magento is a Magento extension that lets you send onsite behavioral data to Windsor Circle.',
'notes' => '',

//Magento Connect author information. If author_email is foo@example.com, script will
//prompt you for the correct name.  Should match your http://www.magentocommerce.com/
//login email address
'author_name' => 'WindsorCircle',
'author_user' => 'partners@windsorcircle.com',
'author_email' => 'partners@windsorcircle.com',

//PHP min/max fields for Connect.  I don't know if anyone uses these, but you should
//probably check that they're accurate
'php_min' => '5.2.0',
'php_max' => '6.0.0',

//PHP extension dependencies. An array containing one or more of either:
//  - a single string (the name of the extension dependency); use this if the
//    extension version does not matter
//  - an associative array with 'name', 'min', and 'max' keys which correspond
//    to the extension's name and min/max required versions
//Example:
//    array('json', array('name' => 'mongo', 'min' => '1.3.0', 'max' => '1.4.0'))
'extensions' => array()
);
