<div class="typeSubLedgers form">
<?php echo $this->Form->create('TypeSubLedger'); ?>
	<fieldset>
		<legend><?php echo __('Edit Type Sub Ledger'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type_ledger_id');
		echo $this->Form->input('type_name');
		echo $this->Form->input('desc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TypeSubLedger.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TypeSubLedger.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Type Sub Ledgers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Type Ledgers'), array('controller' => 'type_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Ledger'), array('controller' => 'type_ledgers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ledger Groups'), array('controller' => 'ledger_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ledger Group'), array('controller' => 'ledger_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
