<div class="ledgerGroups form">
<?php echo $this->Form->create('LedgerGroup'); ?>
	<fieldset>
		<legend><?php echo __('Add Ledger Group'); ?></legend>
	<?php
		echo $this->Form->input('ledger_gp_name');
		echo $this->Form->input('desc');
		echo $this->Form->input('active');
		echo $this->Form->input('type_sub_ledger_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ledger Groups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Type Sub Ledgers'), array('controller' => 'type_sub_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Sub Ledger'), array('controller' => 'type_sub_ledgers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ledgers'), array('controller' => 'ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ledger'), array('controller' => 'ledgers', 'action' => 'add')); ?> </li>
	</ul>
</div>
