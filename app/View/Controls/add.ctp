<div class="controls form">
<?php echo $this->Form->create('Control'); ?>
	<fieldset>
		<legend><?php echo __('Add Control'); ?></legend>
	<?php
		echo $this->Form->input('dept_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Controls'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Depts'), array('controller' => 'depts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dept'), array('controller' => 'depts', 'action' => 'add')); ?> </li>
	</ul>
</div>
