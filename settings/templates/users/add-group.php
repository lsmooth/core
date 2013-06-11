<?php 
/**
 * Copyright (c) 2013, Raghu Nayyar <raghu.nayyar.007@gmail.com>
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */
?>
<li>
	<a class="" href="#">+ <span><?php p($l->t('Add Group')) ?></span></a>
	<div>
		<!-- Todo : Add Error Message for repetition in groups.-->
		<fieldset>
			<form>
				<input type="text" placeholder="<?php p($l->t('Add Group'))?>">
				<button title="<?php p($l->('Add')); ?>"><?php p($l->('Add')); ?></button>
			</form>
		</fieldset>
	</div>
</li>