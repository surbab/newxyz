<div class="poDets view">

<?php
	
	print_r($poDet);
	
	?>
<h2><?php  echo __('Po Det'); ?></h2>
	<dl>
	
	
	
	
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($poDet['PoDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($poDet['PurchaseOrder']['id'], array('controller' => 'purchase_orders', 'action' => 'view', $poDet['PurchaseOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($poDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $poDet['ItemCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uom'); ?></dt>
		<dd>
			<?php echo $this->Html->link($poDet['Uom']['id'], array('controller' => 'uoms', 'action' => 'view', $poDet['Uom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($poDet['PoDet']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($poDet['PoDet']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Price'); ?></dt>
		<dd>
			<?php echo h($poDet['PoDet']['tot_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Comb'); ?></dt>
		<dd>
			<?php echo $this->Html->link($poDet['TaxComb']['id'], array('controller' => 'tax_combs', 'action' => 'view', $poDet['TaxComb']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requird Date'); ?></dt>
		<dd>
			<?php echo h($poDet['PoDet']['requird_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Po Det'), array('action' => 'edit', $poDet['PoDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Po Det'), array('action' => 'delete', $poDet['PoDet']['id']), null, __('Are you sure you want to delete # %s?', $poDet['PoDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Po Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Po Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('controller' => 'uoms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uom'), array('controller' => 'uoms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('controller' => 'tax_combs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('controller' => 'tax_combs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grn Dets'), array('controller' => 'grn_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn Det'), array('controller' => 'grn_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Dets'), array('controller' => 'pur_inv_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Det'), array('controller' => 'pur_inv_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Grn Dets'); ?></h3>
	<?php if (!empty($poDet['GrnDet'])): ?>
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
		foreach ($poDet['GrnDet'] as $grnDet): ?>
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
	<h3><?php echo __('Related Pur Inv Dets'); ?></h3>
	<?php if (!empty($poDet['PurInvDet'])): ?>
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
		foreach ($poDet['PurInvDet'] as $purInvDet): ?>
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
