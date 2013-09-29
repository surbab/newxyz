<div class="ledgers index">
	<h2><?php echo __('Ledgers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ledger_name'); ?></th>
			<th><?php echo $this->Paginator->sort('ledger_group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('open_balance'); ?></th>
			<th><?php echo $this->Paginator->sort('type_sub_ledger_id'); ?></th>
			<th><?php echo $this->Paginator->sort('type_ledger_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ledgers as $ledger): ?>
	<tr>
		<td><?php echo h($ledger['Ledger']['id']); ?>&nbsp;</td>
		<td><?php echo h($ledger['Ledger']['ledger_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ledger['LedgerGroup']['id'], array('controller' => 'ledger_groups', 'action' => 'view', $ledger['LedgerGroup']['id'])); ?>
		</td>
		<td><?php echo h($ledger['Ledger']['active']); ?>&nbsp;</td>
		<td><?php echo h($ledger['Ledger']['open_balance']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ledger['TypeSubLedger']['id'], array('controller' => 'type_sub_ledgers', 'action' => 'view', $ledger['TypeSubLedger']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ledger['TypeLedger']['id'], array('controller' => 'type_ledgers', 'action' => 'view', $ledger['TypeLedger']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ledger['Ledger']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ledger['Ledger']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ledger['Ledger']['id']), null, __('Are you sure you want to delete # %s?', $ledger['Ledger']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ledger'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ledger Groups'), array('controller' => 'ledger_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ledger Group'), array('controller' => 'ledger_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Sub Ledgers'), array('controller' => 'type_sub_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Sub Ledger'), array('controller' => 'type_sub_ledgers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Ledgers'), array('controller' => 'type_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Ledger'), array('controller' => 'type_ledgers', 'action' => 'add')); ?> </li>
	</ul>
</div>
