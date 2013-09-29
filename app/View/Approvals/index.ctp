<div class="approvals index">
	<h2><?php echo __('Approvals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($approvals as $approval): ?>
	<tr>
		<td><?php echo h($approval['Approval']['id']); ?>&nbsp;</td>
		<td><?php echo h($approval['Approval']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $approval['Approval']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $approval['Approval']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $approval['Approval']['id']), null, __('Are you sure you want to delete # %s?', $approval['Approval']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Approval'), array('action' => 'add')); ?></li>
	</ul>
</div>
