<div class="poDets index">
	<h2><?php echo __('Po Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_code_id'); ?></th>
			<th><?php echo $this->Paginator->sort('uom_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_price'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_comb_id'); ?></th>
			<th><?php echo $this->Paginator->sort('requird_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($poDets as $poDet): ?>
	<tr>
		<td><?php echo h($poDet['PoDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($poDet['PurchaseOrder']['id'], array('controller' => 'purchase_orders', 'action' => 'view', $poDet['PurchaseOrder']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($poDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $poDet['ItemCode']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($poDet['Uom']['id'], array('controller' => 'uoms', 'action' => 'view', $poDet['Uom']['id'])); ?>
		</td>
		<td><?php echo h($poDet['PoDet']['qty']); ?>&nbsp;</td>
		<td><?php echo h($poDet['PoDet']['price']); ?>&nbsp;</td>
		<td><?php echo h($poDet['PoDet']['tot_price']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($poDet['TaxComb']['id'], array('controller' => 'tax_combs', 'action' => 'view', $poDet['TaxComb']['id'])); ?>
		</td>
		<td><?php echo h($poDet['PoDet']['requird_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $poDet['PoDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $poDet['PoDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $poDet['PoDet']['id']), null, __('Are you sure you want to delete # %s?', $poDet['PoDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Po Det'), array('action' => 'add')); ?></li>
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
