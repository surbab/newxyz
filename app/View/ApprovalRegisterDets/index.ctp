<div class="approvalRegisterDets index">
	<h2><?php echo __('Approval Register Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_register_id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('approved'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($approvalRegisterDets as $approvalRegisterDet): ?>
	<tr>
		<td><?php echo h($approvalRegisterDet['ApprovalRegisterDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($approvalRegisterDet['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $approvalRegisterDet['ApprovalRegister']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($approvalRegisterDet['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $approvalRegisterDet['Employee']['ID'])); ?>
		</td>
		<td><?php echo h($approvalRegisterDet['ApprovalRegisterDet']['approved']); ?>&nbsp;</td>
		<td><?php echo h($approvalRegisterDet['ApprovalRegisterDet']['comment']); ?>&nbsp;</td>
		<td><?php echo h($approvalRegisterDet['ApprovalRegisterDet']['approval_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $approvalRegisterDet['ApprovalRegisterDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $approvalRegisterDet['ApprovalRegisterDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $approvalRegisterDet['ApprovalRegisterDet']['id']), null, __('Are you sure you want to delete # %s?', $approvalRegisterDet['ApprovalRegisterDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Approval Register Det'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
