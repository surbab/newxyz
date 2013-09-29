<div class="journalDets index">
	<h2><?php echo __('Journal Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('journal_id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_by_id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_to_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($journalDets as $journalDet): ?>
	<tr>
		<td><?php echo h($journalDet['JournalDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($journalDet['Journal']['id'], array('controller' => 'journals', 'action' => 'view', $journalDet['Journal']['id'])); ?>
		</td>
		<td><?php echo h($journalDet['JournalDet']['account_by_id']); ?>&nbsp;</td>
		<td><?php echo h($journalDet['JournalDet']['account_to_id']); ?>&nbsp;</td>
		<td><?php echo h($journalDet['JournalDet']['amount']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $journalDet['JournalDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $journalDet['JournalDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $journalDet['JournalDet']['id']), null, __('Are you sure you want to delete # %s?', $journalDet['JournalDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Journal Det'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Journals'), array('controller' => 'journals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
	</ul>
</div>
