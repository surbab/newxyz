<div class="workOrders view">
<h2><?php  echo __('Work Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($workOrder['Location']['name'], array('controller' => 'locations', 'action' => 'view', $workOrder['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wo No'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['wo_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sales Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($workOrder['SalesOrder']['id'], array('controller' => 'sales_orders', 'action' => 'view', $workOrder['SalesOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wo Date'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['wo_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($workOrder['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $workOrder['ItemCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wo Item Qty'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['wo_item_qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mould Det'); ?></dt>
		<dd>
			<?php echo $this->Html->link($workOrder['MouldDet']['id'], array('controller' => 'mould_dets', 'action' => 'view', $workOrder['MouldDet']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('So Det'); ?></dt>
		<dd>
			<?php echo $this->Html->link($workOrder['SoDet']['id'], array('controller' => 'so_dets', 'action' => 'view', $workOrder['SoDet']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Complete'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['order_complete']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Target Date'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['target_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Outsource'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['outsource']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($workOrder['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $workOrder['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Register'); ?></dt>
		<dd>
			<?php echo $this->Html->link($workOrder['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $workOrder['ApprovalRegister']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Work Order'), array('action' => 'edit', $workOrder['WorkOrder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Work Order'), array('action' => 'delete', $workOrder['WorkOrder']['id']), null, __('Are you sure you want to delete # %s?', $workOrder['WorkOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Wo Prods'); ?></h3>
	<?php if (!empty($workOrder['WoProd'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Work Order Id'); ?></th>
		<th><?php echo __('Pdn Date'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($workOrder['WoProd'] as $woProd): ?>
		<tr>
			<td><?php echo $woProd['id']; ?></td>
			<td><?php echo $woProd['work_order_id']; ?></td>
			<td><?php echo $woProd['pdn_date']; ?></td>
			<td><?php echo $woProd['item_id']; ?></td>
			<td><?php echo $woProd['fin_year_id']; ?></td>
			<td><?php echo $woProd['creat_on']; ?></td>
			<td><?php echo $woProd['creat_by']; ?></td>
			<td><?php echo $woProd['mod_on']; ?></td>
			<td><?php echo $woProd['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wo_prods', 'action' => 'view', $woProd['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wo_prods', 'action' => 'edit', $woProd['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wo_prods', 'action' => 'delete', $woProd['id']), null, __('Are you sure you want to delete # %s?', $woProd['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wo Prod'), array('controller' => 'wo_prods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
