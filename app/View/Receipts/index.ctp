<div class="Receipts index">
	<h2><?php echo __('Receipts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Receipt_no'); ?></th>
			<th><?php echo $this->Paginator->sort('Receipt_date'); ?></th>
			<th><?php echo $this->Paginator->sort('account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('desc'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_value'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	
	
	<?php 
	
	foreach ($Receipts as $Receipt): ?>
	<tr>
		<td><?php echo h($Receipt['Receipt']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($Receipt['Location']['name'], array('controller' => 'locations', 'action' => 'view', $Receipt['Location']['id'])); ?>
		</td>
		<td><?php echo h($Receipt['Receipt']['receipt_no']); ?>&nbsp;</td>
		<td><?php echo h($Receipt['Receipt']['receipt_date']); ?>&nbsp;</td>
		<td><?php echo h($Receipt['Receipt']['account_id']); ?>&nbsp;</td>
		<td><?php echo h($Receipt['Receipt']['desc']); ?>&nbsp;</td>
		<td><?php echo h($Receipt['Receipt']['tot_value']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($Receipt['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $Receipt['FinYear']['id'])); ?>
		</td>
		<td><?php echo h($Receipt['Receipt']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($Receipt['Receipt']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($Receipt['Receipt']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($Receipt['Receipt']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $Receipt['Receipt']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $Receipt['Receipt']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $Receipt['Receipt']['id']), null, __('Are you sure you want to delete # %s?', $Receipt['Receipt']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Receipt'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receipt Dets'), array('controller' => 'Receipt_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt Det'), array('controller' => 'Receipt_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
