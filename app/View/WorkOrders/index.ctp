<div class="workOrders index">
	<h2><?php echo __('Work Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('wo_no'); ?></th>
			<th><?php echo $this->Paginator->sort('sales_order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('wo_date'); ?></th>
			<th><?php echo $this->Paginator->sort('item_code_id'); ?></th>
			<th><?php echo $this->Paginator->sort('wo_item_qty'); ?></th>
			<th><?php echo $this->Paginator->sort('mould_det_id'); ?></th>
			<th><?php echo $this->Paginator->sort('so_det_id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_complete'); ?></th>
			<th><?php echo $this->Paginator->sort('target_date'); ?></th>
			<th><?php echo $this->Paginator->sort('outsource'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('approval'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_register_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($workOrders as $workOrder): ?>
	<tr>
		<td><?php echo h($workOrder['WorkOrder']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($workOrder['Location']['name'], array('controller' => 'locations', 'action' => 'view', $workOrder['Location']['id'])); ?>
		</td>
		<td><?php echo h($workOrder['WorkOrder']['wo_no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($workOrder['SalesOrder']['id'], array('controller' => 'sales_orders', 'action' => 'view', $workOrder['SalesOrder']['id'])); ?>
		</td>
		<td><?php echo h($workOrder['WorkOrder']['wo_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($workOrder['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $workOrder['ItemCode']['id'])); ?>
		</td>
		<td><?php echo h($workOrder['WorkOrder']['wo_item_qty']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($workOrder['MouldDet']['id'], array('controller' => 'mould_dets', 'action' => 'view', $workOrder['MouldDet']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($workOrder['SoDet']['id'], array('controller' => 'so_dets', 'action' => 'view', $workOrder['SoDet']['id'])); ?>
		</td>
		<td><?php echo h($workOrder['WorkOrder']['order_complete']); ?>&nbsp;</td>
		<td><?php echo h($workOrder['WorkOrder']['target_date']); ?>&nbsp;</td>
		<td><?php echo h($workOrder['WorkOrder']['outsource']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($workOrder['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $workOrder['FinYear']['id'])); ?>
		</td>
		<td><?php echo h($workOrder['WorkOrder']['approval']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($workOrder['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $workOrder['ApprovalRegister']['id'])); ?>
		</td>
		<td><?php echo h($workOrder['WorkOrder']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($workOrder['WorkOrder']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($workOrder['WorkOrder']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($workOrder['WorkOrder']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $workOrder['WorkOrder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $workOrder['WorkOrder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $workOrder['WorkOrder']['id']), null, __('Are you sure you want to delete # %s?', $workOrder['WorkOrder']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Work Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('controller' => 'sales_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Dets'), array('controller' => 'mould_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Det'), array('controller' => 'mould_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List So Dets'), array('controller' => 'so_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wo Prods'), array('controller' => 'wo_prods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wo Prod'), array('controller' => 'wo_prods', 'action' => 'add')); ?> </li>
	</ul>
</div>
