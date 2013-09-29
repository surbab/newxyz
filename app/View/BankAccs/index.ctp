<div class="bankAccs index">
	<h2><?php echo __('Bank Accs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vouch_type'); ?></th>
			<th><?php echo $this->Paginator->sort('ref_id'); ?></th>
			<th><?php echo $this->Paginator->sort('trans_date'); ?></th>
			<th><?php echo $this->Paginator->sort('credit'); ?></th>
			<th><?php echo $this->Paginator->sort('debit'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bankAccs as $bankAcc): ?>
	<tr>
		<td><?php echo h($bankAcc['BankAcc']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bankAcc['Location']['name'], array('controller' => 'locations', 'action' => 'view', $bankAcc['Location']['id'])); ?>
		</td>
		<td><?php echo h($bankAcc['BankAcc']['vouch_type']); ?>&nbsp;</td>
		<td><?php echo h($bankAcc['BankAcc']['ref_id']); ?>&nbsp;</td>
		<td><?php echo h($bankAcc['BankAcc']['trans_date']); ?>&nbsp;</td>
		<td><?php echo h($bankAcc['BankAcc']['credit']); ?>&nbsp;</td>
		<td><?php echo h($bankAcc['BankAcc']['debit']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bankAcc['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $bankAcc['FinYear']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bankAcc['BankAcc']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bankAcc['BankAcc']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bankAcc['BankAcc']['id']), null, __('Are you sure you want to delete # %s?', $bankAcc['BankAcc']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bank Acc'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
	</ul>
</div>
