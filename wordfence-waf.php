<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/data/sites/web/christophvhbe/subsites/grens.christophvh.be/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/data/sites/web/christophvhbe/subsites/grens.christophvh.be/wp-content/wflogs/');
	include_once '/data/sites/web/christophvhbe/subsites/grens.christophvh.be/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>