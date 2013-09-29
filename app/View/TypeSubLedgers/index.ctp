<div class="typeSubLedgers index">
	<h2><?php echo __('Type Sub Ledgers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type_ledger_id'); ?></th>
			<th><?php echo $this->Paginator->sort('type_name'); ?></th>
			<th><?php echo $this->Paginator->sort('desc'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($typeSubLedgers as $typeSubLedger): ?>
	<tr>
		<td><?php echo h($typeSubLedger['TypeSubLedger']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($typeSubLedger['TypeLedger']['type_name'], array('controller' => 'type_ledgers', 'action' => 'view', $typeSubLedger['TypeLedger']['id'])); ?>
		</td>
		<td><?php echo h($typeSubLedger['TypeSubLedger']['type_name']); ?>&nbsp;</td>
		<td><?php echo h($typeSubLedger['TypeSubLedger']['desc']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $typeSubLedger['TypeSubLedger']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $typeSubLedger['TypeSubLedger']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $typeSubLedger['TypeSubLedger']['id']), null, __('Are you sure you want to delete # %s?', $typeSubLedger['TypeSubLedger']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Type Sub Ledger'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Type Ledgers'), array('controller' => 'type_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Ledger'), array('controller' => 'type_ledgers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ledger Groups'), array('controller' => 'ledger_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ledger Group'), array('controller' => 'ledger_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
