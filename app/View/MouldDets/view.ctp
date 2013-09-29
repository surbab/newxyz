<div class="mouldDets view">
<h2><?php  echo __('Mould Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mouldDet['MouldDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mouldDet['AssetCode']['id'], array('controller' => 'asset_codes', 'action' => 'view', $mouldDet['AssetCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mould Life Est'); ?></dt>
		<dd>
			<?php echo h($mouldDet['MouldDet']['mould_life_est']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Cav'); ?></dt>
		<dd>
			<?php echo h($mouldDet['MouldDet']['no_cav']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dwg No'); ?></dt>
		<dd>
			<?php echo h($mouldDet['MouldDet']['dwg_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Own'); ?></dt>
		<dd>
			<?php echo h($mouldDet['MouldDet']['co_own']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mouldDet['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $mouldDet['Partner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Id'); ?></dt>
		<dd>
			<?php echo h($mouldDet['MouldDet']['supplier_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($mouldDet['MouldDet']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($mouldDet['MouldDet']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($mouldDet['MouldDet']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($mouldDet['MouldDet']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mould Det'), array('action' => 'edit', $mouldDet['MouldDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mould Det'), array('action' => 'delete', $mouldDet['MouldDet']['id']), null, __('Are you sure you want to delete # %s?', $mouldDet['MouldDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('controller' => 'mould_rework_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('controller' => 'work_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mould Rework Histories'); ?></h3>
	<?php if (!empty($mouldDet['MouldReworkHistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Mould Det Id'); ?></th>
		<th><?php echo __('Damage Date'); ?></th>
		<th><?php echo __('Mould Rew Reason Id'); ?></th>
		<th><?php echo __('Mould Rew Reason Desc'); ?></th>
		<th><?php echo __('Mould Disposition'); ?></th>
		<th><?php echo __('Dispatch Date'); ?></th>
		<th><?php echo __('Dc No Id'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Received Date'); ?></th>
		<th><?php echo __('Rewo Cost'); ?></th>
		<th><?php echo __('Comment Rew'); ?></th>
		<th><?php echo __('Inv No Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($mouldDet['MouldReworkHistory'] as $mouldReworkHistory): ?>
		<tr>
			<td><?php echo $mouldReworkHistory['id']; ?></td>
			<td><?php echo $mouldReworkHistory['location_id']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_det_id']; ?></td>
			<td><?php echo $mouldReworkHistory['damage_date']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_rew_reason_id']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_rew_reason_desc']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_disposition']; ?></td>
			<td><?php echo $mouldReworkHistory['dispatch_date']; ?></td>
			<td><?php echo $mouldReworkHistory['dc_no_id']; ?></td>
			<td><?php echo $mouldReworkHistory['vendor_id']; ?></td>
			<td><?php echo $mouldReworkHistory['received_date']; ?></td>
			<td><?php echo $mouldReworkHistory['rewo_cost']; ?></td>
			<td><?php echo $mouldReworkHistory['comment_rew']; ?></td>
			<td><?php echo $mouldReworkHistory['inv_no_id']; ?></td>
			<td><?php echo $mouldReworkHistory['creat_on']; ?></td>
			<td><?php echo $mouldReworkHistory['creat_by']; ?></td>
			<td><?php echo $mouldReworkHistory['mod_on']; ?></td>
			<td><?php echo $mouldReworkHistory['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mould_rework_histories', 'action' => 'view', $mouldReworkHistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mould_rework_histories', 'action' => 'edit', $mouldReworkHistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mould_rework_histories', 'action' => 'delete', $mouldReworkHistory['id']), null, __('Are you sure you want to delete # %s?', $mouldReworkHistory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Work Orders'); ?></h3>
	<?php if (!empty($mouldDet['WorkOrder'])): ?>
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
		foreach ($mouldDet['WorkOrder'] as $workOrder): ?>
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
