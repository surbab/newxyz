<div class="taxCombs view">
<h2><?php  echo __('Tax Comb'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($taxComb['TaxComb']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Description'); ?></dt>
		<dd>
			<?php echo h($taxComb['TaxComb']['tax_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($taxComb['TaxComb']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Fr'); ?></dt>
		<dd>
			<?php echo h($taxComb['TaxComb']['effective_fr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective To'); ?></dt>
		<dd>
			<?php echo h($taxComb['TaxComb']['effective_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($taxComb['TaxComb']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($taxComb['TaxComb']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($taxComb['TaxComb']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($taxComb['TaxComb']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tax Comb'), array('action' => 'edit', $taxComb['TaxComb']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tax Comb'), array('action' => 'delete', $taxComb['TaxComb']['id']), null, __('Are you sure you want to delete # %s?', $taxComb['TaxComb']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Dets'), array('controller' => 'pur_inv_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Det'), array('controller' => 'pur_inv_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sal Inv Dets'), array('controller' => 'sal_inv_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sal Inv Det'), array('controller' => 'sal_inv_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List So Dets'), array('controller' => 'so_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Comb Dets'), array('controller' => 'tax_comb_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb Det'), array('controller' => 'tax_comb_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pur Inv Dets'); ?></h3>
	<?php if (!empty($taxComb['PurInvDet'])): ?>
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
		foreach ($taxComb['PurInvDet'] as $purInvDet): ?>
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
<div class="related">
	<h3><?php echo __('Related Sal Inv Dets'); ?></h3>
	<?php if (!empty($taxComb['SalInvDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sal Inv Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Tot Price'); ?></th>
		<th><?php echo __('Tax Comb Id'); ?></th>
		<th><?php echo __('Tax Amt'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($taxComb['SalInvDet'] as $salInvDet): ?>
		<tr>
			<td><?php echo $salInvDet['id']; ?></td>
			<td><?php echo $salInvDet['sal_inv_id']; ?></td>
			<td><?php echo $salInvDet['item_id']; ?></td>
			<td><?php echo $salInvDet['qty']; ?></td>
			<td><?php echo $salInvDet['price']; ?></td>
			<td><?php echo $salInvDet['tot_price']; ?></td>
			<td><?php echo $salInvDet['tax_comb_id']; ?></td>
			<td><?php echo $salInvDet['tax_amt']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sal_inv_dets', 'action' => 'view', $salInvDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sal_inv_dets', 'action' => 'edit', $salInvDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sal_inv_dets', 'action' => 'delete', $salInvDet['id']), null, __('Are you sure you want to delete # %s?', $salInvDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sal Inv Det'), array('controller' => 'sal_inv_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related So Dets'); ?></h3>
	<?php if (!empty($taxComb['SoDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sales Order Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Uom Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Tot Price'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Tax Comb Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($taxComb['SoDet'] as $soDet): ?>
		<tr>
			<td><?php echo $soDet['id']; ?></td>
			<td><?php echo $soDet['sales_order_id']; ?></td>
			<td><?php echo $soDet['item_id']; ?></td>
			<td><?php echo $soDet['uom_id']; ?></td>
			<td><?php echo $soDet['qty']; ?></td>
			<td><?php echo $soDet['price']; ?></td>
			<td><?php echo $soDet['tot_price']; ?></td>
			<td><?php echo $soDet['approval']; ?></td>
			<td><?php echo $soDet['approval_register_id']; ?></td>
			<td><?php echo $soDet['tax_comb_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'so_dets', 'action' => 'view', $soDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'so_dets', 'action' => 'edit', $soDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'so_dets', 'action' => 'delete', $soDet['id']), null, __('Are you sure you want to delete # %s?', $soDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tax Comb Dets'); ?></h3>
	<?php if (!empty($taxComb['TaxCombDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tax Comb Id'); ?></th>
		<th><?php echo __('Tax Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($taxComb['TaxCombDet'] as $taxCombDet): ?>
		<tr>
			<td><?php echo $taxCombDet['id']; ?></td>
			<td><?php echo $taxCombDet['tax_comb_id']; ?></td>
			<td><?php echo $taxCombDet['tax_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tax_comb_dets', 'action' => 'view', $taxCombDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tax_comb_dets', 'action' => 'edit', $taxCombDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tax_comb_dets', 'action' => 'delete', $taxCombDet['id']), null, __('Are you sure you want to delete # %s?', $taxCombDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tax Comb Det'), array('controller' => 'tax_comb_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
