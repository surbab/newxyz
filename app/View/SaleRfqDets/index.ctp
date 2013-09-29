<div class="saleRfqDets index">
	<h2><?php echo __('Sale Rfq Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_rfq_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_name'); ?></th>
			<th><?php echo $this->Paginator->sort('item_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('rfq_qty'); ?></th>
			<th><?php echo $this->Paginator->sort('rfq_comments'); ?></th>
			<th><?php echo $this->Paginator->sort('estimation_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($saleRfqDets as $saleRfqDet): ?>
	<tr>
		<td><?php echo h($saleRfqDet['SaleRfqDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($saleRfqDet['SaleRfq']['id'], array('controller' => 'sale_rfqs', 'action' => 'view', $saleRfqDet['SaleRfq']['id'])); ?>
		</td>
		<td><?php echo h($saleRfqDet['SaleRfqDet']['item_name']); ?>&nbsp;</td>
		<td><?php echo h($saleRfqDet['SaleRfqDet']['item_desc']); ?>&nbsp;</td>
		<td><?php echo h($saleRfqDet['SaleRfqDet']['rfq_qty']); ?>&nbsp;</td>
		<td><?php echo h($saleRfqDet['SaleRfqDet']['rfq_comments']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($saleRfqDet['Estimation']['id'], array('controller' => 'estimations', 'action' => 'view', $saleRfqDet['Estimation']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $saleRfqDet['SaleRfqDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $saleRfqDet['SaleRfqDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $saleRfqDet['SaleRfqDet']['id']), null, __('Are you sure you want to delete # %s?', $saleRfqDet['SaleRfqDet']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sale Rfq Det'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sale Rfqs'), array('controller' => 'sale_rfqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq'), array('controller' => 'sale_rfqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimations'), array('controller' => 'estimations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimation'), array('controller' => 'estimations', 'action' => 'add')); ?> </li>
	</ul>
</div>
