<div class="receiptDets form">
<?php echo $this->Form->create('ReceiptDet'); ?>
	<fieldset>
		<legend><?php echo __('Edit Receipt Det'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('receipt_id');
		echo $this->Form->input('account_from');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ReceiptDet.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ReceiptDet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Receipt Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Receipts'), array('controller' => 'receipts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt'), array('controller' => 'receipts', 'action' => 'add')); ?> </li>
	</ul>
</div>
