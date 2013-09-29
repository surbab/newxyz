<div class="resourceMen form">
<?php echo $this->Form->create('ResourceMan'); ?>
	<fieldset>
		<legend><?php echo __('Add Resource Man'); ?></legend>
	<?php
		echo $this->Form->input('res_nick');
		echo $this->Form->input('dept_id');
		echo $this->Form->input('employee_id');
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

		<li><?php echo $this->Html->link(__('List Resource Men'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Depts'), array('controller' => 'depts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dept'), array('controller' => 'depts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wo Prod Det Men'), array('controller' => 'wo_prod_det_men', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wo Prod Det Man'), array('controller' => 'wo_prod_det_men', 'action' => 'add')); ?> </li>
	</ul>
</div>
