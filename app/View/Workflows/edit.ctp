<div class="workflows form">
<?php echo $this->Form->create('Workflow'); ?>
	<fieldset>
		<legend><?php echo __('Edit Workflow'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('work _flow');
		echo $this->Form->input('priority');
		echo $this->Form->input('desc');
		echo $this->Form->input('wo_suffix');
		echo $this->Form->input('flow_active');
		echo $this->Form->input('creat_on');
		echo $this->Form->input('creat_by');
		echo $this->Form->input('mod_on');
		echo $this->Form->input('mod_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Workflow.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Workflow.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Workflows'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
</div>
