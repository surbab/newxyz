<div class="quoteDets index">
	<h2><?php echo __('Quote Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('quotation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_code_id'); ?></th>
			<th><?php echo $this->Paginator->sort('uom_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_price'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($quoteDets as $quoteDet): ?>
	<tr>
		<td><?php echo h($quoteDet['QuoteDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($quoteDet['Quotation']['id'], array('controller' => 'quotations', 'action' => 'view', $quoteDet['Quotation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($quoteDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $quoteDet['ItemCode']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($quoteDet['Uom']['id'], array('controller' => 'uoms', 'action' => 'view', $quoteDet['Uom']['id'])); ?>
		</td>
		<td><?php echo h($quoteDet['QuoteDet']['qty']); ?>&nbsp;</td>
		<td><?php echo h($quoteDet['QuoteDet']['price']); ?>&nbsp;</td>
		<td><?php echo h($quoteDet['QuoteDet']['tot_price']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $quoteDet['QuoteDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $quoteDet['QuoteDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $quoteDet['QuoteDet']['id']), null, __('Are you sure you want to delete # %s?', $quoteDet['QuoteDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Quote Det'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Quotations'), array('controller' => 'quotations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('controller' => 'uoms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uom'), array('controller' => 'uoms', 'action' => 'add')); ?> </li>
	</ul>
</div>
