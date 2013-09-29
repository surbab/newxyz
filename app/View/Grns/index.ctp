<div class="grns index">
	<h2><?php echo __('Grns'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('grn_no'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('delv_no'); ?></th>
			<th><?php echo $this->Paginator->sort('delv_date'); ?></th>
			<th><?php echo $this->Paginator->sort('po_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('grn_location'); ?></th>
			<th><?php echo $this->Paginator->sort('grn_approval'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grns as $grn): ?>
	<tr>
		<td><?php echo h($grn['Grn']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grn['Location']['name'], array('controller' => 'locations', 'action' => 'view', $grn['Location']['id'])); ?>
		</td>
		<td><?php echo h($grn['Grn']['grn_no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grn['PurchaseOrder']['id'], array('controller' => 'purchase_orders', 'action' => 'view', $grn['PurchaseOrder']['id'])); ?>
		</td>
		<td><?php echo h($grn['Grn']['delv_no']); ?>&nbsp;</td>
		<td><?php echo h($grn['Grn']['delv_date']); ?>&nbsp;</td>
		<td><?php echo h($grn['Grn']['po_desc']); ?>&nbsp;</td>
		<td><?php echo h($grn['Grn']['grn_location']); ?>&nbsp;</td>
		<td><?php echo h($grn['Grn']['grn_approval']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grn['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $grn['FinYear']['id'])); ?>
		</td>
		<td><?php echo h($grn['Grn']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($grn['Grn']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($grn['Grn']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($grn['Grn']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $grn['Grn']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grn['Grn']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grn['Grn']['id']), null, __('Are you sure you want to delete # %s?', $grn['Grn']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grn'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grn Dets'), array('controller' => 'grn_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn Det'), array('controller' => 'grn_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Entries'), array('controller' => 'pur_inv_entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Entry'), array('controller' => 'pur_inv_entries', 'action' => 'add')); ?> </li>
	</ul>
</div>
