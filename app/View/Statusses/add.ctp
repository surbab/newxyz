<div class="statusses form">
<?php echo $this->Form->create('Statuss'); ?>
	<fieldset>
		<legend><?php echo __('Add Statuss'); ?></legend>
	<?php
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Statusses'), array('action' => 'index')); ?></li>
	</ul>
</div>
