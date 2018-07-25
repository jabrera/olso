<?php
/**
 * Copyright 2016 Juvar Abrera
 *
 * // Apache
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * 	http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * // PHP Version 5
 *
 * This source file is subject to version 3.01 of the PHP license that
 * is available through the world-wide-web at the following
 * URI: http://www.php.net/license/3_01.txt.  If you did not receive
 * a copy of the PHP License and are unable to obtain it through the
 * web, please send a note to license@php.net so we can mail you
 * a copy immediately.
 *
 * @project				Oslo Framework
 * @package				oslo-framework
 * @file				website.php
 * @author				Juvar Abrera <me@juvarabrera.com>
 * @copyright			2016 Juvar Abrera
 * @lastModified		9/12/16 1:33 PM
 */

/**
 * Created by PhpStorm.
 * User: juvar_a
 * Date: 9/12/16
 * Time: 1:33 PM
 */

return [
	/**
	 * The primary color of your website
	 */
	"PRIMARY_COLOR" => "#005cb9",

	/**
	 * The default layout to use in every page.
	 * Make sure you have this layout with a
	 * .phtml extension in Views/shared/
	 */
	"DEFAULT_LAYOUT" => "_layout",

	/**
	 * Default page title for your site. You
	 * may change this in your controller
	 */
	"PAGE_TITLE" => "Oslo Framework",

	/**
	 * URL of the website
	 */
	"SITE_URL" => "",

	/**
	 * General Name of the website
	 */
	"SITE_NAME" => "Oslo Framework",

	/**
	 * Image to be displayed when shared in social media
	 */
	"SITE_IMG" => "",

	/**
	 * Twitter account of the website
	 *
	 * Eg.
	 * @juvar_a
	 */
	"SITE_TWITTER" => "",

	/**
	 * Copyright text to be displayed on slider
	 */
	"COPYRIGHT" => "&copy; ".date("Y")." Oslo Framework by Juvar Abrera",

	"COMPONENT_DIRECTORY" => array(
		"guest" => array(
			"action-bar" => ROOT.DS."app".DS."Views".DS."shared".DS."guest".DS."action-bar.phtml",
			"slider" => ROOT.DS."app".DS."Views".DS."shared".DS."guest".DS."slider.phtml",
		)
	),

	/**
	 * List of slider menu options depending on user type
	 *
	 */
	"SLIDER_MENU" => array(
		"guest" => array(
			array(
				"link" => array(
					array(
						"link" => "BottomSheet.loader(false)",
						"type" => "onclick",
						"text" => "hello"
					),
					array(
						"link" => "#",
						"type" => "href",
						"text" => "hello"
					)
				),
				"icon" => "face",
				"text" => "Hello"
			)
		)
	)
];