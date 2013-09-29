<div class="contraDets index">
	<h2><?php echo __('Contra Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('contra_id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_to'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contraDets as $contraDet): ?>
	<tr>
		<td><?php echo h($contraDet['ContraDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contraDet['Contra']['id'], array('controller' => 'contras', 'action' => 'view', $contraDet['Contra']['id'])); ?>
		</td>
		<td><?php echo h($contraDet['ContraDet']['account_to']); ?>&nbsp;</td>
		<td><?php echo h($contraDet['ContraDet']['amount']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contraDet['ContraDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contraDet['ContraDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contraDet['ContraDet']['id']), null, __('Are you sure you want to delete # %s?', $contraDet['ContraDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contra Det'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contras'), array('controller' => 'contras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contra'), array('controller' => 'contras', 'action' => 'add')); ?> </li>
	</ul>
</div>
