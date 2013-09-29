<div class="mouldRewReasons index">
	<h2><?php echo __('Mould Rew Reasons'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('rew_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mouldRewReasons as $mouldRewReason): ?>
	<tr>
		<td><?php echo h($mouldRewReason['MouldRewReason']['id']); ?>&nbsp;</td>
		<td><?php echo h($mouldRewReason['MouldRewReason']['name']); ?>&nbsp;</td>
		<td><?php echo h($mouldRewReason['MouldRewReason']['rew_desc']); ?>&nbsp;</td>
		<td><?php echo h($mouldRewReason['MouldRewReason']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($mouldRewReason['MouldRewReason']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($mouldRewReason['MouldRewReason']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($mouldRewReason['MouldRewReason']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mouldRewReason['MouldRewReason']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mouldRewReason['MouldRewReason']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mouldRewReason['MouldRewReason']['id']), null, __('Are you sure you want to delete # %s?', $mouldRewReason['MouldRewReason']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mould Rew Reason'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('controller' => 'mould_rework_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
