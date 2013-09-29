<div class="depts form">
<?php echo $this->Form->create('Dept'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dept'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('dept_desc');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Dept.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Dept.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Depts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Controls'), array('controller' => 'controls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Control'), array('controller' => 'controls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contros'), array('controller' => 'contros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contro'), array('controller' => 'contros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hr Compstructtrees'), array('controller' => 'hr_compstructtrees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hr Compstructtree'), array('controller' => 'hr_compstructtrees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resource Men'), array('controller' => 'resource_men', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource Man'), array('controller' => 'resource_men', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resource Wcs'), array('controller' => 'resource_wcs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource Wc'), array('controller' => 'resource_wcs', 'action' => 'add')); ?> </li>
	</ul>
</div>
