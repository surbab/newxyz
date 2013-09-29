<div class="purchaseorders index">
	<h2><?php echo __('PurchaseOrders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('po_no'); ?></th>
			<th><?php echo $this->Paginator->sort('po_date'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qtn_ref'); ?></th>
			<th><?php echo $this->Paginator->sort('qtn_date'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_term_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($purchaseOrders as $purchaseorder): ?>
	<tr>
		<td><?php echo h($purchaseorder['PurchaseOrder']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($purchaseorder['Location']['name'], array('controller' => 'locations', 'action' => 'view', $purchaseorder['Location']['id'])); ?>
		</td>
		<td><?php echo h($purchaseorder['PurchaseOrder']['po_no']); ?>&nbsp;</td>
		<td><?php echo h($purchaseorder['PurchaseOrder']['po_date']); ?>&nbsp;</td>
		<td><?php echo h($purchaseorder['PurchaseOrder']['partner_id']); ?>&nbsp;</td>
		<td><?php echo h($purchaseorder['PurchaseOrder']['qtn_ref']); ?>&nbsp;</td>		
		<td><?php echo h($purchaseorder['PurchaseOrder']['qtn_date']); ?>&nbsp;</td>
		
		<td>
			<?php echo $this->Html->link($purchaseorder['FinYear']['fin_year'], array('controller' => 'fin_years', 'action' => 'view', $purchaseorder['FinYear']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($purchaseorder['PayTerm']['term_desc'], array('controller' => 'pay_terms', 'action' => 'view', $purchaseorder['PayTerm']['id'])); ?>
		</td>
		
		<td><?php echo h($purchaseorder['PurchaseOrder']['po_desc']); ?>&nbsp;</td>
	
		<td><?php echo h($purchaseorder['PurchaseOrder']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($purchaseorder['PurchaseOrder']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($purchaseorder['PurchaseOrder']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($purchaseorder['PurchaseOrder']['mod_by']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $purchaseorder['PurchaseOrder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $purchaseorder['PurchaseOrder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $purchaseorder['PurchaseOrder']['id']), null, __('Are you sure you want to delete # %s?', $purchaseorder['PurchaseOrder']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New PurchaseOrder'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List PurchaseOrder Dets'), array('controller' => 'purchaseorder_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New PurchaseOrder Det'), array('controller' => 'purchaseorder_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
