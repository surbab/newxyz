<div class="userGroups form">
<?php echo $this->Form->create('UserGroup'); ?>
	<fieldset>
		<legend><?php echo __('Add User Group'); ?></legend>
	<?php
		echo $this->Form->input('userg_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Groups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List General Access Settings'), array('controller' => 'general_access_settings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New General Access Setting'), array('controller' => 'general_access_settings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
