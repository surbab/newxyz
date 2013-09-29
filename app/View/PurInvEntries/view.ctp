<div class="purInvEntries view">
<h2><?php  echo __('Pur Inv Entry'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($purInvEntry['PurInvEntry']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purInvEntry['Location']['name'], array('controller' => 'locations', 'action' => 'view', $purInvEntry['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grn'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purInvEntry['Grn']['id'], array('controller' => 'grns', 'action' => 'view', $purInvEntry['Grn']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purInvEntry['PurchaseOrder']['id'], array('controller' => 'purchase_orders', 'action' => 'view', $purInvEntry['PurchaseOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inv No'); ?></dt>
		<dd>
			<?php echo h($purInvEntry['PurInvEntry']['inv_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inv Date'); ?></dt>
		<dd>
			<?php echo h($purInvEntry['PurInvEntry']['inv_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inv Desc'); ?></dt>
		<dd>
			<?php echo h($purInvEntry['PurInvEntry']['inv_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Value'); ?></dt>
		<dd>
			<?php echo h($purInvEntry['PurInvEntry']['tot_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Taxes'); ?></dt>
		<dd>
			<?php echo h($purInvEntry['PurInvEntry']['tot_taxes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Inv Value'); ?></dt>
		<dd>
			<?php echo h($purInvEntry['PurInvEntry']['tot_inv_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purInvEntry['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $purInvEntry['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval'); ?></dt>
		<dd>
			<?php echo h($purInvEntry['PurInvEntry']['approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Register'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purInvEntry['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $purInvEntry['ApprovalRegister']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($purInvEntry['PurInvEntry']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($purInvEntry['PurInvEntry']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($purInvEntry['PurInvEntry']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($purInvEntry['PurInvEntry']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pur Inv Entry'), array('action' => 'edit', $purInvEntry['PurInvEntry']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pur Inv Entry'), array('action' => 'delete', $purInvEntry['PurInvEntry']['id']), null, __('Are you sure you want to delete # %s?', $purInvEntry['PurInvEntry']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Entries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Entry'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Mould Rework Histories'); ?></h3>
	<?php if (!empty($purInvEntry['MouldReworkHistory'])): ?>
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
		<th><?php echo __('Del Chalan Id'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Received Date'); ?></th>
		<th><?php echo __('Rewo Cost'); ?></th>
		<th><?php echo __('Comment Rew'); ?></th>
		<th><?php echo __('Pur Inv Entry Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($purInvEntry['MouldReworkHistory'] as $mouldReworkHistory): ?>
		<tr>
			<td><?php echo $mouldReworkHistory['id']; ?></td>
			<td><?php echo $mouldReworkHistory['location_id']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_det_id']; ?></td>
			<td><?php echo $mouldReworkHistory['damage_date']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_rew_reason_id']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_rew_reason_desc']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_disposition']; ?></td>
			<td><?php echo $mouldReworkHistory['dispatch_date']; ?></td>
			<td><?php echo $mouldReworkHistory['del_chalan_id']; ?></td>
			<td><?php echo $mouldReworkHistory['partner_id']; ?></td>
			<td><?php echo $mouldReworkHistory['received_date']; ?></td>
			<td><?php echo $mouldReworkHistory['rewo_cost']; ?></td>
			<td><?php echo $mouldReworkHistory['comment_rew']; ?></td>
			<td><?php echo $mouldReworkHistory['pur_inv_entry_id']; ?></td>
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
	<h3><?php echo __('Related Pur Inv Dets'); ?></h3>
	<?php if (!empty($purInvEntry['PurInvDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pur Inv Entry Id'); ?></th>
		<th><?php echo __('Po Det Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Tot Price'); ?></th>
		<th><?php echo __('Tax Comb Id'); ?></th>
		<th><?php echo __('Tot Tax'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($purInvEntry['PurInvDet'] as $purInvDet): ?>
		<tr>
			<td><?php echo $purInvDet['id']; ?></td>
			<td><?php echo $purInvDet['pur_inv_entry_id']; ?></td>
			<td><?php echo $purInvDet['po_det_id']; ?></td>
			<td><?php echo $purInvDet['qty']; ?></td>
			<td><?php echo $purInvDet['price']; ?></td>
			<td><?php echo $purInvDet['tot_price']; ?></td>
			<td><?php echo $purInvDet['tax_comb_id']; ?></td>
			<td><?php echo $purInvDet['tot_tax']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pur_inv_dets', 'action' => 'view', $purInvDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pur_inv_dets', 'action' => 'edit', $purInvDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pur_inv_dets', 'action' => 'delete', $purInvDet['id']), null, __('Are you sure you want to delete # %s?', $purInvDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pur Inv Det'), array('controller' => 'pur_inv_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
