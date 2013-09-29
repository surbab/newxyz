<div class="purInvEntries index">
	<h2><?php echo __('Pur Inv Entries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('grn_id'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('inv_no'); ?></th>
			<th><?php echo $this->Paginator->sort('inv_date'); ?></th>
			<th><?php echo $this->Paginator->sort('inv_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_value'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_taxes'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_inv_value'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('approval'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_register_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($purInvEntries as $purInvEntry): ?>
	<tr>
		<td><?php echo h($purInvEntry['PurInvEntry']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($purInvEntry['Location']['name'], array('controller' => 'locations', 'action' => 'view', $purInvEntry['Location']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($purInvEntry['Grn']['id'], array('controller' => 'grns', 'action' => 'view', $purInvEntry['Grn']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($purInvEntry['PurchaseOrder']['id'], array('controller' => 'purchase_orders', 'action' => 'view', $purInvEntry['PurchaseOrder']['id'])); ?>
		</td>
		<td><?php echo h($purInvEntry['PurInvEntry']['inv_no']); ?>&nbsp;</td>
		<td><?php echo h($purInvEntry['PurInvEntry']['inv_date']); ?>&nbsp;</td>
		<td><?php echo h($purInvEntry['PurInvEntry']['inv_desc']); ?>&nbsp;</td>
		<td><?php echo h($purInvEntry['PurInvEntry']['tot_value']); ?>&nbsp;</td>
		<td><?php echo h($purInvEntry['PurInvEntry']['tot_taxes']); ?>&nbsp;</td>
		<td><?php echo h($purInvEntry['PurInvEntry']['tot_inv_value']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($purInvEntry['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $purInvEntry['FinYear']['id'])); ?>
		</td>
		<td><?php echo h($purInvEntry['PurInvEntry']['approval']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($purInvEntry['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $purInvEntry['ApprovalRegister']['id'])); ?>
		</td>
		<td><?php echo h($purInvEntry['PurInvEntry']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($purInvEntry['PurInvEntry']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($purInvEntry['PurInvEntry']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($purInvEntry['PurInvEntry']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $purInvEntry['PurInvEntry']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $purInvEntry['PurInvEntry']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $purInvEntry['PurInvEntry']['id']), null, __('Are you sure you want to delete # %s?', $purInvEntry['PurInvEntry']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pur Inv Entry'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grns'), array('controller' => 'grns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn'), array('controller' => 'grns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('controller' => 'mould_rework_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Dets'), array('controller' => 'pur_inv_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Det'), array('controller' => 'pur_inv_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
