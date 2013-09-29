<div class="saleRfqDets form">
<?php echo $this->Form->create('SaleRfqDet'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sale Rfq Det'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sale_rfq_id');
		echo $this->Form->input('item_name');
		echo $this->Form->input('item_desc');
		echo $this->Form->input('rfq_qty');
		echo $this->Form->input('rfq_comments');
		echo $this->Form->input('estimation_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SaleRfqDet.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SaleRfqDet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sale Rfq Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sale Rfqs'), array('controller' => 'sale_rfqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq'), array('controller' => 'sale_rfqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimations'), array('controller' => 'estimations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimation'), array('controller' => 'estimations', 'action' => 'add')); ?> </li>
	</ul>
</div>
