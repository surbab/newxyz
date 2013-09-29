<div class="employees index">
	<h2><?php echo __('Employees'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('add_1'); ?></th>
			<th><?php echo $this->Paginator->sort('add_2'); ?></th>
			<th><?php echo $this->Paginator->sort('post'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pin_code'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_1'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_2'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('web'); ?></th>
			<th><?php echo $this->Paginator->sort('joined_date'); ?></th>
			<th><?php echo $this->Paginator->sort('terminated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('term_reason'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_name'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_branch'); ?></th>
			<th><?php echo $this->Paginator->sort('ac_no'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_ifsc'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employees as $employee): ?>
	<tr>
		<td><?php echo h($employee['Employee']['id']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['name']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['add_1']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['add_2']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['post']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['city']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['district']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employee['State']['name'], array('controller' => 'states', 'action' => 'view', $employee['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employee['Country']['name'], array('controller' => 'countries', 'action' => 'view', $employee['Country']['id'])); ?>
		</td>
		<td><?php echo h($employee['Employee']['pin_code']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['tel_1']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['tel_2']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['fax']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['email']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['web']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['joined_date']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['terminated_date']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['term_reason']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['bank_name']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['bank_branch']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['ac_no']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['bank_ifsc']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employee['Employee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Register Dets'), array('controller' => 'approval_register_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register Det'), array('controller' => 'approval_register_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hr Attendances'), array('controller' => 'hr_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hr Attendance'), array('controller' => 'hr_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hr Employee Leave Quotas'), array('controller' => 'hr_employee_leave_quotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hr Employee Leave Quota'), array('controller' => 'hr_employee_leave_quotas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hr Employee Timesheet Periods'), array('controller' => 'hr_employee_timesheet_periods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hr Employee Timesheet Period'), array('controller' => 'hr_employee_timesheet_periods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hr Hsp Payment Requests'), array('controller' => 'hr_hsp_payment_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hr Hsp Payment Request'), array('controller' => 'hr_hsp_payment_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hr Hsps'), array('controller' => 'hr_hsps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hr Hsp'), array('controller' => 'hr_hsps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hr Leave Requests'), array('controller' => 'hr_leave_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hr Leave Request'), array('controller' => 'hr_leave_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hr Leaves'), array('controller' => 'hr_leaves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hr Leafe'), array('controller' => 'hr_leaves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hr Time Events'), array('controller' => 'hr_time_events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hr Time Event'), array('controller' => 'hr_time_events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hr Timesheets'), array('controller' => 'hr_timesheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hr Timesheet'), array('controller' => 'hr_timesheets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resource Men'), array('controller' => 'resource_men', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource Man'), array('controller' => 'resource_men', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Engs'), array('controller' => 'sale_engs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Eng'), array('controller' => 'sale_engs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
