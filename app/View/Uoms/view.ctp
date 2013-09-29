<div class="uoms view">
<h2><?php  echo __('Uom'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($uom['Uom']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uom'); ?></dt>
		<dd>
			<?php echo h($uom['Uom']['uom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Desc'); ?></dt>
		<dd>
			<?php echo h($uom['Uom']['asset_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uom Symbol'); ?></dt>
		<dd>
			<?php echo h($uom['Uom']['uom_symbol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($uom['Uom']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($uom['Uom']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($uom['Uom']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($uom['Uom']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Uom'), array('action' => 'edit', $uom['Uom']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Uom'), array('action' => 'delete', $uom['Uom']['id']), null, __('Are you sure you want to delete # %s?', $uom['Uom']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uom'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimination Dets'), array('controller' => 'estimination_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimination Det'), array('controller' => 'estimination_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Po Dets'), array('controller' => 'po_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Po Det'), array('controller' => 'po_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quote Dets'), array('controller' => 'quote_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote Det'), array('controller' => 'quote_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List So Dets'), array('controller' => 'so_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estimination Dets'); ?></h3>
	<?php if (!empty($uom['EstiminationDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estimation Id'); ?></th>
		<th><?php echo __('Estim Class Id'); ?></th>
		<th><?php echo __('Estim Qty'); ?></th>
		<th><?php echo __('Uom Id'); ?></th>
		<th><?php echo __('Estim Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($uom['EstiminationDet'] as $estiminationDet): ?>
		<tr>
			<td><?php echo $estiminationDet['id']; ?></td>
			<td><?php echo $estiminationDet['estimation_id']; ?></td>
			<td><?php echo $estiminationDet['estim_class_id']; ?></td>
			<td><?php echo $estiminationDet['estim_qty']; ?></td>
			<td><?php echo $estiminationDet['uom_id']; ?></td>
			<td><?php echo $estiminationDet['estim_value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estimination_dets', 'action' => 'view', $estiminationDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estimination_dets', 'action' => 'edit', $estiminationDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estimination_dets', 'action' => 'delete', $estiminationDet['id']), null, __('Are you sure you want to delete # %s?', $estiminationDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estimination Det'), array('controller' => 'estimination_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Po Dets'); ?></h3>
	<?php if (!empty($uom['PoDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Purchase Order Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Uom Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Tot Price'); ?></th>
		<th><?php echo __('Tax Id'); ?></th>
		<th><?php echo __('Requird Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($uom['PoDet'] as $poDet): ?>
		<tr>
			<td><?php echo $poDet['id']; ?></td>
			<td><?php echo $poDet['purchase_order_id']; ?></td>
			<td><?php echo $poDet['item_id']; ?></td>
			<td><?php echo $poDet['uom_id']; ?></td>
			<td><?php echo $poDet['qty']; ?></td>
			<td><?php echo $poDet['price']; ?></td>
			<td><?php echo $poDet['tot_price']; ?></td>
			<td><?php echo $poDet['tax_id']; ?></td>
			<td><?php echo $poDet['requird_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'po_dets', 'action' => 'view', $poDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'po_dets', 'action' => 'edit', $poDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'po_dets', 'action' => 'delete', $poDet['id']), null, __('Are you sure you want to delete # %s?', $poDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Po Det'), array('controller' => 'po_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Quote Dets'); ?></h3>
	<?php if (!empty($uom['QuoteDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Quotation Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Uom Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Tot Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($uom['QuoteDet'] as $quoteDet): ?>
		<tr>
			<td><?php echo $quoteDet['id']; ?></td>
			<td><?php echo $quoteDet['quotation_id']; ?></td>
			<td><?php echo $quoteDet['item_id']; ?></td>
			<td><?php echo $quoteDet['uom_id']; ?></td>
			<td><?php echo $quoteDet['qty']; ?></td>
			<td><?php echo $quoteDet['price']; ?></td>
			<td><?php echo $quoteDet['tot_price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'quote_dets', 'action' => 'view', $quoteDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'quote_dets', 'action' => 'edit', $quoteDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'quote_dets', 'action' => 'delete', $quoteDet['id']), null, __('Are you sure you want to delete # %s?', $quoteDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Quote Det'), array('controller' => 'quote_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related So Dets'); ?></h3>
	<?php if (!empty($uom['SoDet'])): ?>
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
		foreach ($uom['SoDet'] as $soDet): ?>
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
