<?php

namespace AUSWEB\Plugins\RemoveKses;

if (!defined('ABSPATH')) die(header('HTTP/1.0 403 Forbidden'));

/**
 * @since 1.0
 * @package RemoveKses
 */

/*
Plugin Name: 	Remove Kses
Plugin URI: 	http://ausweb.com.au
Description: 	Disables KSES for the WordPress Editor Role. Compatible with MU.
Author: 		AUSWEB, drewsymo
Version: 		1.0
Author URI: 	http://ausweb.com.au
License:      	GPLv2 or later
*/

/*
Copyright (C) 2014 AUSWEB Web Hosting Pty Ltd.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

include_once('classes/RemoveKses.php');

if(function_exists("get_role")) {

	$editor 		= new RemoveKses(get_role("editor"));
	// $author 		= new RemoveKses(get_role("author"));
	// $contributor = new RemoveKses(get_role("contributor"));
	// $subscriber 	= new RemoveKses(get_role("subscriber"));

}