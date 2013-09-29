<div class="ledgerGroups view">
<h2><?php  echo __('Ledger Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ledgerGroup['LedgerGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ledger Gp Name'); ?></dt>
		<dd>
			<?php echo h($ledgerGroup['LedgerGroup']['ledger_gp_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($ledgerGroup['LedgerGroup']['desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($ledgerGroup['LedgerGroup']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Sub Ledger'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ledgerGroup['TypeSubLedger']['id'], array('controller' => 'type_sub_ledgers', 'action' => 'view', $ledgerGroup['TypeSubLedger']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ledger Group'), array('action' => 'edit', $ledgerGroup['LedgerGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ledger Group'), array('action' => 'delete', $ledgerGroup['LedgerGroup']['id']), null, __('Are you sure you want to delete # %s?', $ledgerGroup['LedgerGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ledger Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ledger Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Sub Ledgers'), array('controller' => 'type_sub_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Sub Ledger'), array('controller' => 'type_sub_ledgers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ledgers'), array('controller' => 'ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ledger'), array('controller' => 'ledgers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ledgers'); ?></h3>
	<?php if (!empty($ledgerGroup['Ledger'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ledger Name'); ?></th>
		<th><?php echo __('Ledger Group Id'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Open Balance'); ?></th>
		<th><?php echo __('Type Sub Ledger Id'); ?></th>
		<th><?php echo __('Type Ledger Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ledgerGroup['Ledger'] as $ledger): ?>
		<tr>
			<td><?php echo $ledger['id']; ?></td>
			<td><?php echo $ledger['ledger_name']; ?></td>
			<td><?php echo $ledger['ledger_group_id']; ?></td>
			<td><?php echo $ledger['active']; ?></td>
			<td><?php echo $ledger['open_balance']; ?></td>
			<td><?php echo $ledger['type_sub_ledger_id']; ?></td>
			<td><?php echo $ledger['type_ledger_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ledgers', 'action' => 'view', $ledger['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ledgers', 'action' => 'edit', $ledger['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ledgers', 'action' => 'delete', $ledger['id']), null, __('Are you sure you want to delete # %s?', $ledger['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ledger'), array('controller' => 'ledgers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
