<div class="typeLedgers form">
<?php echo $this->Form->create('TypeLedger'); ?>
	<fieldset>
		<legend><?php echo __('Edit Type Ledger'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type_name');
		echo $this->Form->input('desc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TypeLedger.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TypeLedger.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Type Ledgers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ledgers'), array('controller' => 'ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ledger'), array('controller' => 'ledgers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Sub Ledgers'), array('controller' => 'type_sub_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Sub Ledger'), array('controller' => 'type_sub_ledgers', 'action' => 'add')); ?> </li>
	</ul>
</div>
