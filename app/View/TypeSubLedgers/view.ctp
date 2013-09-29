<div class="typeSubLedgers view">
<h2><?php  echo __('Type Sub Ledger'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typeSubLedger['TypeSubLedger']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Ledger'); ?></dt>
		<dd>
			<?php echo $this->Html->link($typeSubLedger['TypeLedger']['type_name'], array('controller' => 'type_ledgers', 'action' => 'view', $typeSubLedger['TypeLedger']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Name'); ?></dt>
		<dd>
			<?php echo h($typeSubLedger['TypeSubLedger']['type_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($typeSubLedger['TypeSubLedger']['desc']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type Sub Ledger'), array('action' => 'edit', $typeSubLedger['TypeSubLedger']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Type Sub Ledger'), array('action' => 'delete', $typeSubLedger['TypeSubLedger']['id']), null, __('Are you sure you want to delete # %s?', $typeSubLedger['TypeSubLedger']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Sub Ledgers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Sub Ledger'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Ledgers'), array('controller' => 'type_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Ledger'), array('controller' => 'type_ledgers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ledger Groups'), array('controller' => 'ledger_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ledger Group'), array('controller' => 'ledger_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ledger Groups'); ?></h3>
	<?php if (!empty($typeSubLedger['LedgerGroup'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ledger Gp Name'); ?></th>
		<th><?php echo __('Desc'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Type Sub Ledger Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($typeSubLedger['LedgerGroup'] as $ledgerGroup): ?>
		<tr>
			<td><?php echo $ledgerGroup['id']; ?></td>
			<td><?php echo $ledgerGroup['ledger_gp_name']; ?></td>
			<td><?php echo $ledgerGroup['desc']; ?></td>
			<td><?php echo $ledgerGroup['active']; ?></td>
			<td><?php echo $ledgerGroup['type_sub_ledger_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ledger_groups', 'action' => 'view', $ledgerGroup['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ledger_groups', 'action' => 'edit', $ledgerGroup['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ledger_groups', 'action' => 'delete', $ledgerGroup['id']), null, __('Are you sure you want to delete # %s?', $ledgerGroup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ledger Group'), array('controller' => 'ledger_groups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
