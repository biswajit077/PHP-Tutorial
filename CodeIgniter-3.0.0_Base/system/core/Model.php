<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		EllisLab Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/config.html
 */
class CI_Model {
	/**
	 * @var CI_Config
	 */
	var $config;
	/**
	 * @var CI_DB_active_record
	 */
	var $db;
	/**
	 * @var CI_Email
	 */
	var $email;
	/**
	 * @var CI_Form_validation
	 */
	var $form_validation;
	/**
	 * @var CI_Input
	 */
	var $input;
	/**
	 * @var CI_Loader
	 */
	var $load;
	/**
	 * @var CI_Router
	 */
	var $router;
	/**
	 * @var CI_Session
	 */
	var $session;
	/**
	 * @var CI_Table
	 */
	var $table;
	/**
	 * @var CI_Unit_test
	 */
	var $unit;
	/**
	 * @var CI_URI
	 */
	var $uri;
	/**
	 * @var CI_Pagination
	 */
	var $pagination;
	$agent = new CI_User_agent();
	$benchmark = new CI_Benchmark();
	$calendar = new CI_Calendar();
	$cart = new CI_Cart();
	$config = new CI_Config();
	$db = new CI_DB_active_record();
	$email = new CI_Email();
	$encrypt = new CI_Encrypt();
	$form_validation = new CI_Form_validation();
	$ftp = new CI_FTP();
	$image_lib = new CI_Image_lib();
	$input = new CI_Input();
	$lang = new CI_Language();
	$output = new CI_Output();
	$pagination = new CI_Pagination();
	$parser = new CI_Parser();
	$session = new CI_Session();
	$table = new CI_Table();
	$trackback = new CI_Trackback();
	$typography = new CI_Typography();
	$unit = new CI_Unit_test();
	$upload = new CI_Upload();
	$uri = new CI_URI();
	$xmlrpc = new CI_Xmlrpc();
	$xmlrpcs = new CI_Xmlrpcs();
	$zip = new CI_Zip();
	

	/**
	 * Class constructor
	 *
	 * @return	void
	 */
	public function __construct()
	{
		log_message('info', 'Model Class Initialized');
	}

	// --------------------------------------------------------------------

	/**
	 * __get magic
	 *
	 * Allows models to access CI's loaded classes using the same
	 * syntax as controllers.
	 *
	 * @param	string	$key
	 */
	public function __get($key)
	{
		// Debugging note:
		//	If you're here because you're getting an error message
		//	saying 'Undefined Property: system/core/Model.php', it's
		//	most likely a typo in your model code.
		return get_instance()->$key;
	}

}
