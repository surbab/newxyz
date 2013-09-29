<div class="ledgers form">
<?php echo $this->Form->create('Ledger'); ?>
	<fieldset>
		<legend><?php echo __('Add Ledger'); ?></legend>
	<?php
		echo $this->Form->input('ledger_name');
		echo $this->Form->input('ledger_group_id');
		echo $this->Form->input('active');
		echo $this->Form->input('open_balance');
		echo $this->Form->input('type_sub_ledger_id');
		echo $this->Form->input('type_ledger_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ledgers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ledger Groups'), array('controller' => 'ledger_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ledger Group'), array('controller' => 'ledger_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Sub Ledgers'), array('controller' => 'type_sub_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Sub Ledger'), array('controller' => 'type_sub_ledgers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Ledgers'), array('controller' => 'type_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Ledger'), array('controller' => 'type_ledgers', 'action' => 'add')); ?> </li>
	</ul>
</div>
