	<?php if (is_active_sidebar('main-sidebar')):
dynamic_sidebar('main-sidebar');

	else:
	_e('this is sidebar. you have to add some widgets','hieunguyen');
endif;
	?>