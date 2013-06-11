<?php 
/**
 * Copyright (c) 2013, Raghu Nayyar <raghu.nayyar.007@gmail.com>
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */
 ?>
<div>
	<fieldset>
		<form>
			<input class="" type="text" placeholder="<?php p($l->('User')); ?>" />
			<input class="" type="password" placeholder="<?php p($l->('Password'))?>" />
			<select>
				<!--Todo: Options from the current groups present -->
			</select>
			<button class="" title="<?php p($l->('Create')); ?>">
				<?php p($l->('Create')); ?>
			</button>
		</form>
	</fieldset>
</div>