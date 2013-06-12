<?php
/**
 * Copyright (c) 2013, Raghu Nayyar <raghu.nayyar.007@gmail.com>
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */
\OCP\Util::addScript('3rdParty/angular/angular-js','angular');
\OCP\Util::addStyle( 'settings', 'settings' );
\OCP\Util::addScript( 'settings', 'users' );
\OCP\Util::addScript( 'core', 'multiselect' );
\OCP\Util::addScript( 'core', 'singleselect' );
\OCP\Util::addScript('core', 'jquery.inview');
\OCP\Util::addStyle( 'settings', 'settings' );
//OC_App::setActiveNavigationEntry( 'core_users' );

?>
<div id="user-settings" ng-app="users" ng-cloak>
	<div id="app-navigation" ng-controller="">
		<ul>
			<?php print_unescaped($this->inc('add-group')) ?>
			<?php print_unescaped($this->inc('part-sidebar')) ?>
		</ul>
	</div>
	<div id="user-content">
		<div id="hascontrols" ng-controller="">
			<?php print_unescaped($this->inc('add-user')) ?>
		</div>
		<div id="user-table" ng-controller="">
			<?php print_unescaped($this->inc('user-list')) ?>
		</div>
	</div>
</div>