<div class="grns view">
<h2><?php  echo __('Grn'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grn['Grn']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grn['Location']['name'], array('controller' => 'locations', 'action' => 'view', $grn['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grn No'); ?></dt>
		<dd>
			<?php echo h($grn['Grn']['grn_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grn['PurchaseOrder']['id'], array('controller' => 'purchase_orders', 'action' => 'view', $grn['PurchaseOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delv No'); ?></dt>
		<dd>
			<?php echo h($grn['Grn']['delv_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delv Date'); ?></dt>
		<dd>
			<?php echo h($grn['Grn']['delv_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Po Desc'); ?></dt>
		<dd>
			<?php echo h($grn['Grn']['po_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grn Location'); ?></dt>
		<dd>
			<?php echo h($grn['Grn']['grn_location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grn Approval'); ?></dt>
		<dd>
			<?php echo h($grn['Grn']['grn_approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grn['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $grn['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($grn['Grn']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($grn['Grn']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($grn['Grn']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($grn['Grn']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grn'), array('action' => 'edit', $grn['Grn']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grn'), array('action' => 'delete', $grn['Grn']['id']), null, __('Are you sure you want to delete # %s?', $grn['Grn']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Asset Codes'); ?></h3>
	<?php if (!empty($grn['AssetCode'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Asset Code'); ?></th>
		<th><?php echo __('Asset Cat Id'); ?></th>
		<th><?php echo __('Asset Depr Id'); ?></th>
		<th><?php echo __('Asset Life'); ?></th>
		<th><?php echo __('Asset Desc'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Asset Po Id'); ?></th>
		<th><?php echo __('Grn Id'); ?></th>
		<th><?php echo __('Exp Life'); ?></th>
		<th><?php echo __('Asset Location Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($grn['AssetCode'] as $assetCode): ?>
		<tr>
			<td><?php echo $assetCode['id']; ?></td>
			<td><?php echo $assetCode['location_id']; ?></td>
			<td><?php echo $assetCode['asset_code']; ?></td>
			<td><?php echo $assetCode['asset_cat_id']; ?></td>
			<td><?php echo $assetCode['asset_depr_id']; ?></td>
			<td><?php echo $assetCode['asset_life']; ?></td>
			<td><?php echo $assetCode['asset_desc']; ?></td>
			<td><?php echo $assetCode['partner_id']; ?></td>
			<td><?php echo $assetCode['asset_po_id']; ?></td>
			<td><?php echo $assetCode['grn_id']; ?></td>
			<td><?php echo $assetCode['exp_life']; ?></td>
			<td><?php echo $assetCode['asset_location_id']; ?></td>
			<td><?php echo $assetCode['creat_on']; ?></td>
			<td><?php echo $assetCode['creat_by']; ?></td>
			<td><?php echo $assetCode['mod_on']; ?></td>
			<td><?php echo $assetCode['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'asset_codes', 'action' => 'view', $assetCode['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'asset_codes', 'action' => 'edit', $assetCode['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'asset_codes', 'action' => 'delete', $assetCode['id']), null, __('Are you sure you want to delete # %s?', $assetCode['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Grn Dets'); ?></h3>
	<?php if (!empty($grn['GrnDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Grn Id'); ?></th>
		<th><?php echo __('Po Det Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Tot Price'); ?></th>
		<th><?php echo __('Tax Id'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($grn['GrnDet'] as $grnDet): ?>
		<tr>
			<td><?php echo $grnDet['id']; ?></td>
			<td><?php echo $grnDet['grn_id']; ?></td>
			<td><?php echo $grnDet['po_det_id']; ?></td>
			<td><?php echo $grnDet['qty']; ?></td>
			<td><?php echo $grnDet['price']; ?></td>
			<td><?php echo $grnDet['tot_price']; ?></td>
			<td><?php echo $grnDet['tax_id']; ?></td>
			<td><?php echo $grnDet['approval']; ?></td>
			<td><?php echo $grnDet['approval_register_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grn_dets', 'action' => 'view', $grnDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grn_dets', 'action' => 'edit', $grnDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grn_dets', 'action' => 'delete', $grnDet['id']), null, __('Are you sure you want to delete # %s?', $grnDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grn Det'), array('controller' => 'grn_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pur Inv Entries'); ?></h3>
	<?php if (!empty($grn['PurInvEntry'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Grn Id'); ?></th>
		<th><?php echo __('Purchase Order Id'); ?></th>
		<th><?php echo __('Inv No'); ?></th>
		<th><?php echo __('Inv Date'); ?></th>
		<th><?php echo __('Inv Desc'); ?></th>
		<th><?php echo __('Tot Value'); ?></th>
		<th><?php echo __('Tot Taxes'); ?></th>
		<th><?php echo __('Tot Inv Value'); ?></th>
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
		foreach ($grn['PurInvEntry'] as $purInvEntry): ?>
		<tr>
			<td><?php echo $purInvEntry['id']; ?></td>
			<td><?php echo $purInvEntry['location_id']; ?></td>
			<td><?php echo $purInvEntry['grn_id']; ?></td>
			<td><?php echo $purInvEntry['purchase_order_id']; ?></td>
			<td><?php echo $purInvEntry['inv_no']; ?></td>
			<td><?php echo $purInvEntry['inv_date']; ?></td>
			<td><?php echo $purInvEntry['inv_desc']; ?></td>
			<td><?php echo $purInvEntry['tot_value']; ?></td>
			<td><?php echo $purInvEntry['tot_taxes']; ?></td>
			<td><?php echo $purInvEntry['tot_inv_value']; ?></td>
			<td><?php echo $purInvEntry['fin_year_id']; ?></td>
			<td><?php echo $purInvEntry['approval']; ?></td>
			<td><?php echo $purInvEntry['approval_register_id']; ?></td>
			<td><?php echo $purInvEntry['creat_on']; ?></td>
			<td><?php echo $purInvEntry['creat_by']; ?></td>
			<td><?php echo $purInvEntry['mod_on']; ?></td>
			<td><?php echo $purInvEntry['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pur_inv_entries', 'action' => 'view', $purInvEntry['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pur_inv_entries', 'action' => 'edit', $purInvEntry['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pur_inv_entries', 'action' => 'delete', $purInvEntry['id']), null, __('Are you sure you want to delete # %s?', $purInvEntry['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pur Inv Entry'), array('controller' => 'pur_inv_entries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
