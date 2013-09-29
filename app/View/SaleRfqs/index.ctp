<div class="quotations index">
	<h2><?php echo __('Quotations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quote_no'); ?></th>
			<th><?php echo $this->Paginator->sort('quote_date'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_rfq_id'); ?></th>
			<th><?php echo $this->Paginator->sort('term_id'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($quotations as $quotation): ?>
	<tr>
		<td><?php echo h($quotation['Quotation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($quotation['Location']['name'], array('controller' => 'locations', 'action' => 'view', $quotation['Location']['id'])); ?>
		</td>
		<td><?php echo h($quotation['Quotation']['quote_no']); ?>&nbsp;</td>
		<td><?php echo h($quotation['Quotation']['quote_date']); ?>&nbsp;</td>
		<td><?php echo h($quotation['Quotation']['partner_id']); ?>&nbsp;</td>
		<td><?php echo h($quotation['Quotation']['sale_rfq_id']); ?>&nbsp;</td>		
		<td><?php echo h($quotation['Quotation']['term_id']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $quotation['Quotation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $quotation['Quotation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $quotation['Quotation']['id']), null, __('Are you sure you want to delete # %s?', $quotation['Quotation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Quotation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotation Dets'), array('controller' => 'quotation_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation Det'), array('controller' => 'quotation_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
