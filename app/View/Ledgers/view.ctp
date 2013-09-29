<div class="ledgers view">
<h2><?php  echo __('Ledger'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ledger['Ledger']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ledger Name'); ?></dt>
		<dd>
			<?php echo h($ledger['Ledger']['ledger_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ledger Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ledger['LedgerGroup']['id'], array('controller' => 'ledger_groups', 'action' => 'view', $ledger['LedgerGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($ledger['Ledger']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open Balance'); ?></dt>
		<dd>
			<?php echo h($ledger['Ledger']['open_balance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Sub Ledger'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ledger['TypeSubLedger']['id'], array('controller' => 'type_sub_ledgers', 'action' => 'view', $ledger['TypeSubLedger']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Ledger'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ledger['TypeLedger']['id'], array('controller' => 'type_ledgers', 'action' => 'view', $ledger['TypeLedger']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ledger'), array('action' => 'edit', $ledger['Ledger']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ledger'), array('action' => 'delete', $ledger['Ledger']['id']), null, __('Are you sure you want to delete # %s?', $ledger['Ledger']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ledgers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ledger'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ledger Groups'), array('controller' => 'ledger_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ledger Group'), array('controller' => 'ledger_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Sub Ledgers'), array('controller' => 'type_sub_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Sub Ledger'), array('controller' => 'type_sub_ledgers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Ledgers'), array('controller' => 'type_ledgers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Ledger'), array('controller' => 'type_ledgers', 'action' => 'add')); ?> </li>
	</ul>
</div>
