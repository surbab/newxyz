<div class="journals index">
	<h2><?php echo __('Journals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('journal_no'); ?></th>
			<th><?php echo $this->Paginator->sort('journal_date'); ?></th>
			<th><?php echo $this->Paginator->sort('desc'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_value'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($journals as $journal): ?>
	<tr>
		<td><?php echo h($journal['Journal']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($journal['Location']['name'], array('controller' => 'locations', 'action' => 'view', $journal['Location']['id'])); ?>
		</td>
		<td><?php echo h($journal['Journal']['journal_no']); ?>&nbsp;</td>
		<td><?php echo h($journal['Journal']['journal_date']); ?>&nbsp;</td>
		<td><?php echo h($journal['Journal']['desc']); ?>&nbsp;</td>
		<td><?php echo h($journal['Journal']['tot_value']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($journal['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $journal['FinYear']['id'])); ?>
		</td>
		<td><?php echo h($journal['Journal']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($journal['Journal']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($journal['Journal']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($journal['Journal']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $journal['Journal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $journal['Journal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $journal['Journal']['id']), null, __('Are you sure you want to delete # %s?', $journal['Journal']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Journal'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journal Dets'), array('controller' => 'journal_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal Det'), array('controller' => 'journal_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
