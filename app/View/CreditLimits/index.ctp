<div class="creditLimits index">
	<h2><?php echo __('Credit Limits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('credit_limit'); ?></th>
			<th><?php echo $this->Paginator->sort('approval'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_register_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($creditLimits as $creditLimit): ?>
	<tr>
		<td><?php echo h($creditLimit['CreditLimit']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($creditLimit['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $creditLimit['Partner']['id'])); ?>
		</td>
		<td><?php echo h($creditLimit['CreditLimit']['credit_limit']); ?>&nbsp;</td>
		<td><?php echo h($creditLimit['CreditLimit']['approval']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($creditLimit['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $creditLimit['ApprovalRegister']['id'])); ?>
		</td>
		<td><?php echo h($creditLimit['CreditLimit']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($creditLimit['CreditLimit']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($creditLimit['CreditLimit']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($creditLimit['CreditLimit']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $creditLimit['CreditLimit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $creditLimit['CreditLimit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $creditLimit['CreditLimit']['id']), null, __('Are you sure you want to delete # %s?', $creditLimit['CreditLimit']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Credit Limit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
	</ul>
</div>
