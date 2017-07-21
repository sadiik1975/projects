<?php
/**
	AbanteCart, Ideal OpenSource Ecommerce Solution
	http://www.AbanteCart.com
	Copyright © 2011-'.date('Y').' Belavier Commerce LLC

	Released under the Open Software License (OSL 3.0)
*/
// Admin Section Configuration. You can change this value to any name. Will use ?s=name to access the admin
define('ADMIN_PATH', 'admin_section_20151975');

// Database Configuration
define('DB_DRIVER', 'amysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'may141975@');
define('DB_DATABASE', 'store');
define('DB_PREFIX', 'abc_');
// Unique AbanteCart store ID
define('UNIQUE_ID', '40a71f57412dfe0365d554f15bee4e90');
// Salt key for oneway encryption of passwords. NOTE: Change of SALT key will cause a loss of all existing users' and customers' passwords!
define('SALT', 'fQ54');
// Encryption key for protecting sensitive information. NOTE: Change of this key will cause a loss of all existing encrypted information!
define('ENCRYPTION_KEY', 'J9284Y');
