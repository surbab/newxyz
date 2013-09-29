<div class="soDets index">
	<h2><?php echo __('So Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sales_order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_code_id'); ?></th>
			<th><?php echo $this->Paginator->sort('uom_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_price'); ?></th>
			<th><?php echo $this->Paginator->sort('approval'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_register_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_comb_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($soDets as $soDet): ?>
	<tr>
		<td><?php echo h($soDet['SoDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($soDet['SalesOrder']['id'], array('controller' => 'sales_orders', 'action' => 'view', $soDet['SalesOrder']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($soDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $soDet['ItemCode']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($soDet['Uom']['id'], array('controller' => 'uoms', 'action' => 'view', $soDet['Uom']['id'])); ?>
		</td>
		<td><?php echo h($soDet['SoDet']['qty']); ?>&nbsp;</td>
		<td><?php echo h($soDet['SoDet']['price']); ?>&nbsp;</td>
		<td><?php echo h($soDet['SoDet']['tot_price']); ?>&nbsp;</td>
		<td><?php echo h($soDet['SoDet']['approval']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($soDet['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $soDet['ApprovalRegister']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($soDet['TaxComb']['id'], array('controller' => 'tax_combs', 'action' => 'view', $soDet['TaxComb']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $soDet['SoDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $soDet['SoDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $soDet['SoDet']['id']), null, __('Are you sure you want to delete # %s?', $soDet['SoDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New So Det'), array('action' => 'add')); ?></li>
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
