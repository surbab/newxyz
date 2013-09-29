<div class="soDets view">
<h2><?php  echo __('So Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($soDet['SoDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sales Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($soDet['SalesOrder']['id'], array('controller' => 'sales_orders', 'action' => 'view', $soDet['SalesOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($soDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $soDet['ItemCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uom'); ?></dt>
		<dd>
			<?php echo $this->Html->link($soDet['Uom']['id'], array('controller' => 'uoms', 'action' => 'view', $soDet['Uom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($soDet['SoDet']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($soDet['SoDet']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Price'); ?></dt>
		<dd>
			<?php echo h($soDet['SoDet']['tot_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval'); ?></dt>
		<dd>
			<?php echo h($soDet['SoDet']['approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Register'); ?></dt>
		<dd>
			<?php echo $this->Html->link($soDet['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $soDet['ApprovalRegister']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Comb'); ?></dt>
		<dd>
			<?php echo $this->Html->link($soDet['TaxComb']['id'], array('controller' => 'tax_combs', 'action' => 'view', $soDet['TaxComb']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit So Det'), array('action' => 'edit', $soDet['SoDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete So Det'), array('action' => 'delete', $soDet['SoDet']['id']), null, __('Are you sure you want to delete # %s?', $soDet['SoDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List So Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New So Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('controller' => 'sales_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('controller' => 'uoms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uom'), array('controller' => 'uoms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('controller' => 'tax_combs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('controller' => 'tax_combs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('controller' => 'work_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Work Orders'); ?></h3>
	<?php if (!empty($soDet['WorkOrder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Wo No'); ?></th>
		<th><?php echo __('Sales Order Id'); ?></th>
		<th><?php echo __('Wo Date'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Wo Item Qty'); ?></th>
		<th><?php echo __('Mould Det Id'); ?></th>
		<th><?php echo __('So Det Id'); ?></th>
		<th><?php echo __('Order Complete'); ?></th>
		<th><?php echo __('Target Date'); ?></th>
		<th><?php echo __('Outsource'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($soDet['WorkOrder'] as $workOrder): ?>
		<tr>
			<td><?php echo $workOrder['id']; ?></td>
			<td><?php echo $workOrder['location_id']; ?></td>
			<td><?php echo $workOrder['wo_no']; ?></td>
			<td><?php echo $workOrder['sales_order_id']; ?></td>
			<td><?php echo $workOrder['wo_date']; ?></td>
			<td><?php echo $workOrder['item_id']; ?></td>
			<td><?php echo $workOrder['wo_item_qty']; ?></td>
			<td><?php echo $workOrder['mould_det_id']; ?></td>
			<td><?php echo $workOrder['so_det_id']; ?></td>
			<td><?php echo $workOrder['order_complete']; ?></td>
			<td><?php echo $workOrder['target_date']; ?></td>
			<td><?php echo $workOrder['outsource']; ?></td>
			<td><?php echo $workOrder['fin_year_id']; ?></td>
			<td><?php echo $workOrder['approval']; ?></td>
			<td><?php echo $workOrder['approval_register_id']; ?></td>
			<td><?php echo $workOrder['creat_on']; ?></td>
			<td><?php echo $workOrder['creat_by']; ?></td>
			<td><?php echo $workOrder['mod_on']; ?></td>
			<td><?php echo $workOrder['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'work_orders', 'action' => 'view', $workOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'work_orders', 'action' => 'edit', $workOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'work_orders', 'action' => 'delete', $workOrder['id']), null, __('Are you sure you want to delete # %s?', $workOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
