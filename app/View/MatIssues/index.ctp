<div class="matIssues index">
	<h2><?php echo __('Mat Issues'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mat_issue_no'); ?></th>
			<th><?php echo $this->Paginator->sort('work_order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_date'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_location'); ?></th>
			<th><?php echo $this->Paginator->sort('approval'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_register_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($matIssues as $matIssue): ?>
	<tr>
		<td><?php echo h($matIssue['MatIssue']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($matIssue['Location']['name'], array('controller' => 'locations', 'action' => 'view', $matIssue['Location']['id'])); ?>
		</td>
		<td><?php echo h($matIssue['MatIssue']['mat_issue_no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($matIssue['WorkOrder']['id'], array('controller' => 'work_orders', 'action' => 'view', $matIssue['WorkOrder']['id'])); ?>
		</td>
		<td><?php echo h($matIssue['MatIssue']['issue_date']); ?>&nbsp;</td>
		<td><?php echo h($matIssue['MatIssue']['issue_desc']); ?>&nbsp;</td>
		<td><?php echo h($matIssue['MatIssue']['issue_location']); ?>&nbsp;</td>
		<td><?php echo h($matIssue['MatIssue']['approval']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($matIssue['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $matIssue['ApprovalRegister']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($matIssue['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $matIssue['FinYear']['id'])); ?>
		</td>
		<td><?php echo h($matIssue['MatIssue']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($matIssue['MatIssue']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($matIssue['MatIssue']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($matIssue['MatIssue']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $matIssue['MatIssue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $matIssue['MatIssue']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $matIssue['MatIssue']['id']), null, __('Are you sure you want to delete # %s?', $matIssue['MatIssue']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mat Issue'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('controller' => 'work_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Issue Dets'), array('controller' => 'mat_issue_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Issue Det'), array('controller' => 'mat_issue_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
