<div class="receiptDets view">
<h2><?php  echo __('Receipt Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($receiptDet['ReceiptDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receipt'); ?></dt>
		<dd>
			<?php echo $this->Html->link($receiptDet['Receipt']['id'], array('controller' => 'receipts', 'action' => 'view', $receiptDet['Receipt']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account From'); ?></dt>
		<dd>
			<?php echo h($receiptDet['ReceiptDet']['account_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($receiptDet['ReceiptDet']['amount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Receipt Det'), array('action' => 'edit', $receiptDet['ReceiptDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Receipt Det'), array('action' => 'delete', $receiptDet['ReceiptDet']['id']), null, __('Are you sure you want to delete # %s?', $receiptDet['ReceiptDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Receipt Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receipts'), array('controller' => 'receipts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt'), array('controller' => 'receipts', 'action' => 'add')); ?> </li>
	</ul>
</div>
