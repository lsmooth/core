<?php 
/**
 * Copyright (c) 2013, Raghu Nayyar <raghu.nayyar.007@gmail.com>
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */

namespace \OCP\Settings\Controller\Users;

class PageController extends Controller {

	public function index() {
		return $this->render('users/main');
	}
}

?>