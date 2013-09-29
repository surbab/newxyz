<div class="userAccessSettings form">
<?php echo $this->Form->create('UserAccessSetting'); ?>
	<fieldset>
		<legend><?php echo __('Edit User Access Setting'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('control_id');
		echo $this->Form->input('read');
		echo $this->Form->input('write');
		echo $this->Form->input('update');
		echo $this->Form->input('delete');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserAccessSetting.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UserAccessSetting.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Access Settings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Controls'), array('controller' => 'controls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Control'), array('controller' => 'controls', 'action' => 'add')); ?> </li>
	</ul>
</div>
