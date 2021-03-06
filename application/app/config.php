<?php
/*
 * David Bray
 * BrayWorth Pty Ltd
 * e. david@brayworth.com.au
 *
 * This work is licensed under a Creative Commons Attribution 4.0 International Public License.
 *      http://creativecommons.org/licenses/by/4.0/
 *
 * */

class config extends dvc\config {
	static $DATE_FORMAT = 'd/m/Y';
	static $DATETIME_FORMAT = 'd/m/Y g:ia';

	static $DB_TYPE = 'sqlite';

	static $TIMEZONE = 'Australia/Brisbane';

}

// error_log( 'here bro ..');