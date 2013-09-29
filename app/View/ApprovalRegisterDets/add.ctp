<div class="approvalRegisterDets form">
<?php echo $this->Form->create('ApprovalRegisterDet'); ?>
	<fieldset>
		<legend><?php echo __('Add Approval Register Det'); ?></legend>
	<?php
		echo $this->Form->input('approval_register_id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('approved');
		echo $this->Form->input('comment');
		echo $this->Form->input('approval_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Approval Register Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
