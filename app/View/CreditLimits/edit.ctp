<div class="creditLimits form">
<?php echo $this->Form->create('CreditLimit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Credit Limit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('partner_id');
		echo $this->Form->input('credit_limit');
		echo $this->Form->input('approval');
		echo $this->Form->input('approval_register_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CreditLimit.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CreditLimit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Credit Limits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
	</ul>
</div>
