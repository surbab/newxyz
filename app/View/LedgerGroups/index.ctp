<div class="ledgerGroups index">
	<h2><?php echo __('Ledger Groups'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ledger_gp_name'); ?></th>
			<th><?php echo $this->Paginator->sort('desc'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('type_sub_ledger_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ledgerGroups as $ledgerGroup): ?>
	<tr>
		<td><?php echo h($ledgerGroup['LedgerGroup']['id']); ?>&nbsp;</td>
		<td><?php echo h($ledgerGroup['LedgerGroup']['ledger_gp_name']); ?>&nbsp;</td>
		<td><?php echo h($ledgerGroup['LedgerGroup']['desc']); ?>&nbsp;</td>
		<td><?php echo h($ledgerGroup['LedgerGroup']['active']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ledgerGroup['TypeSubLedger']['id'], array('controller' => 'type_sub_ledgers', 'action' => 'view', $ledgerGroup['TypeSubLedger']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ledgerGroup['LedgerGroup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ledgerGroup['LedgerGroup']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ledgerGroup['LedgerGroup']['id']), null, __('Are you sure you want to delete # %s?', $ledgerGroup['LedgerGroup']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ledger Group'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Type Sub Ledgers'), array('controller' => 'type_sub_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Sub Ledger'), array('controller' => 'type_sub_ledgers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ledgers'), array('controller' => 'ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ledger'), array('controller' => 'ledgers', 'action' => 'add')); ?> </li>
	</ul>
</div>
