<div class="employees view">
<h2><?php  echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add 1'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['add_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add 2'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['add_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['post']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['district']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['State']['name'], array('controller' => 'states', 'action' => 'view', $employee['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['Country']['name'], array('controller' => 'countries', 'action' => 'view', $employee['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pin Code'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['pin_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel 1'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['tel_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel 2'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['tel_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['web']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Joined Date'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['joined_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terminated Date'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['terminated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Term Reason'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['term_reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Name'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['bank_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Branch'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['bank_branch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ac No'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['ac_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Ifsc'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['bank_ifsc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Approval Register Dets'); ?></h3>
	<?php if (!empty($employee['ApprovalRegisterDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Approved'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Approval Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['ApprovalRegisterDet'] as $approvalRegisterDet): ?>
		<tr>
			<td><?php echo $approvalRegisterDet['id']; ?></td>
			<td><?php echo $approvalRegisterDet['approval_register_id']; ?></td>
			<td><?php echo $approvalRegisterDet['employee_id']; ?></td>
			<td><?php echo $approvalRegisterDet['approved']; ?></td>
			<td><?php echo $approvalRegisterDet['comment']; ?></td>
			<td><?php echo $approvalRegisterDet['approval_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'approval_register_dets', 'action' => 'view', $approvalRegisterDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'approval_register_dets', 'action' => 'edit', $approvalRegisterDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'approval_register_dets', 'action' => 'delete', $approvalRegisterDet['id']), null, __('Are you sure you want to delete # %s?', $approvalRegisterDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Approval Register Det'), array('controller' => 'approval_register_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hr Attendances'); ?></h3>
	<?php if (!empty($employee['HrAttendance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Attendance Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Punchin Time'); ?></th>
		<th><?php echo __('Punchout Time'); ?></th>
		<th><?php echo __('In Note'); ?></th>
		<th><?php echo __('Out Note'); ?></th>
		<th><?php echo __('Timestamp Diff'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['HrAttendance'] as $hrAttendance): ?>
		<tr>
			<td><?php echo $hrAttendance['id']; ?></td>
			<td><?php echo $hrAttendance['attendance_id']; ?></td>
			<td><?php echo $hrAttendance['employee_id']; ?></td>
			<td><?php echo $hrAttendance['punchin_time']; ?></td>
			<td><?php echo $hrAttendance['punchout_time']; ?></td>
			<td><?php echo $hrAttendance['in_note']; ?></td>
			<td><?php echo $hrAttendance['out_note']; ?></td>
			<td><?php echo $hrAttendance['timestamp_diff']; ?></td>
			<td><?php echo $hrAttendance['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hr_attendances', 'action' => 'view', $hrAttendance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hr_attendances', 'action' => 'edit', $hrAttendance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hr_attendances', 'action' => 'delete', $hrAttendance['id']), null, __('Are you sure you want to delete # %s?', $hrAttendance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hr Attendance'), array('controller' => 'hr_attendances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hr Employee Leave Quotas'); ?></h3>
	<?php if (!empty($employee['HrEmployeeLeaveQuota'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Leave Type Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('No Of Days Allotted'); ?></th>
		<th><?php echo __('Leave Taken'); ?></th>
		<th><?php echo __('Leave Brought Forward'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['HrEmployeeLeaveQuota'] as $hrEmployeeLeaveQuota): ?>
		<tr>
			<td><?php echo $hrEmployeeLeaveQuota['id']; ?></td>
			<td><?php echo $hrEmployeeLeaveQuota['year']; ?></td>
			<td><?php echo $hrEmployeeLeaveQuota['leave_type_id']; ?></td>
			<td><?php echo $hrEmployeeLeaveQuota['employee_id']; ?></td>
			<td><?php echo $hrEmployeeLeaveQuota['no_of_days_allotted']; ?></td>
			<td><?php echo $hrEmployeeLeaveQuota['leave_taken']; ?></td>
			<td><?php echo $hrEmployeeLeaveQuota['leave_brought_forward']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hr_employee_leave_quotas', 'action' => 'view', $hrEmployeeLeaveQuota['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hr_employee_leave_quotas', 'action' => 'edit', $hrEmployeeLeaveQuota['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hr_employee_leave_quotas', 'action' => 'delete', $hrEmployeeLeaveQuota['id']), null, __('Are you sure you want to delete # %s?', $hrEmployeeLeaveQuota['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hr Employee Leave Quota'), array('controller' => 'hr_employee_leave_quotas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hr Employee Timesheet Periods'); ?></h3>
	<?php if (!empty($employee['HrEmployeeTimesheetPeriod'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Timesheet Period Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['HrEmployeeTimesheetPeriod'] as $hrEmployeeTimesheetPeriod): ?>
		<tr>
			<td><?php echo $hrEmployeeTimesheetPeriod['id']; ?></td>
			<td><?php echo $hrEmployeeTimesheetPeriod['timesheet_period_id']; ?></td>
			<td><?php echo $hrEmployeeTimesheetPeriod['employee_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hr_employee_timesheet_periods', 'action' => 'view', $hrEmployeeTimesheetPeriod['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hr_employee_timesheet_periods', 'action' => 'edit', $hrEmployeeTimesheetPeriod['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hr_employee_timesheet_periods', 'action' => 'delete', $hrEmployeeTimesheetPeriod['id']), null, __('Are you sure you want to delete # %s?', $hrEmployeeTimesheetPeriod['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hr Employee Timesheet Period'), array('controller' => 'hr_employee_timesheet_periods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hr Hsp Payment Requests'); ?></h3>
	<?php if (!empty($employee['HrHspPaymentRequest'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hsp Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Date Incurred'); ?></th>
		<th><?php echo __('Provider Name'); ?></th>
		<th><?php echo __('Person Incurring Expense'); ?></th>
		<th><?php echo __('Expense Description'); ?></th>
		<th><?php echo __('Expense Amount'); ?></th>
		<th><?php echo __('Payment Made To'); ?></th>
		<th><?php echo __('Third Party Account Number'); ?></th>
		<th><?php echo __('Mail Address'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th><?php echo __('Date Paid'); ?></th>
		<th><?php echo __('Check Number'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Hr Notes'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['HrHspPaymentRequest'] as $hrHspPaymentRequest): ?>
		<tr>
			<td><?php echo $hrHspPaymentRequest['id']; ?></td>
			<td><?php echo $hrHspPaymentRequest['hsp_id']; ?></td>
			<td><?php echo $hrHspPaymentRequest['employee_id']; ?></td>
			<td><?php echo $hrHspPaymentRequest['date_incurred']; ?></td>
			<td><?php echo $hrHspPaymentRequest['provider_name']; ?></td>
			<td><?php echo $hrHspPaymentRequest['person_incurring_expense']; ?></td>
			<td><?php echo $hrHspPaymentRequest['expense_description']; ?></td>
			<td><?php echo $hrHspPaymentRequest['expense_amount']; ?></td>
			<td><?php echo $hrHspPaymentRequest['payment_made_to']; ?></td>
			<td><?php echo $hrHspPaymentRequest['third_party_account_number']; ?></td>
			<td><?php echo $hrHspPaymentRequest['mail_address']; ?></td>
			<td><?php echo $hrHspPaymentRequest['comments']; ?></td>
			<td><?php echo $hrHspPaymentRequest['date_paid']; ?></td>
			<td><?php echo $hrHspPaymentRequest['check_number']; ?></td>
			<td><?php echo $hrHspPaymentRequest['status']; ?></td>
			<td><?php echo $hrHspPaymentRequest['hr_notes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hr_hsp_payment_requests', 'action' => 'view', $hrHspPaymentRequest['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hr_hsp_payment_requests', 'action' => 'edit', $hrHspPaymentRequest['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hr_hsp_payment_requests', 'action' => 'delete', $hrHspPaymentRequest['id']), null, __('Are you sure you want to delete # %s?', $hrHspPaymentRequest['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hr Hsp Payment Request'), array('controller' => 'hr_hsp_payment_requests', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hr Hsps'); ?></h3>
	<?php if (!empty($employee['HrHsp'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Benefit Year'); ?></th>
		<th><?php echo __('Hsp Value'); ?></th>
		<th><?php echo __('Total Acrued'); ?></th>
		<th><?php echo __('Accrued Last Updated'); ?></th>
		<th><?php echo __('Amount Per Day'); ?></th>
		<th><?php echo __('Edited Status'); ?></th>
		<th><?php echo __('Termination Date'); ?></th>
		<th><?php echo __('Halted'); ?></th>
		<th><?php echo __('Halted Date'); ?></th>
		<th><?php echo __('Terminated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['HrHsp'] as $hrHsp): ?>
		<tr>
			<td><?php echo $hrHsp['id']; ?></td>
			<td><?php echo $hrHsp['employee_id']; ?></td>
			<td><?php echo $hrHsp['benefit_year']; ?></td>
			<td><?php echo $hrHsp['hsp_value']; ?></td>
			<td><?php echo $hrHsp['total_acrued']; ?></td>
			<td><?php echo $hrHsp['accrued_last_updated']; ?></td>
			<td><?php echo $hrHsp['amount_per_day']; ?></td>
			<td><?php echo $hrHsp['edited_status']; ?></td>
			<td><?php echo $hrHsp['termination_date']; ?></td>
			<td><?php echo $hrHsp['halted']; ?></td>
			<td><?php echo $hrHsp['halted_date']; ?></td>
			<td><?php echo $hrHsp['terminated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hr_hsps', 'action' => 'view', $hrHsp['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hr_hsps', 'action' => 'edit', $hrHsp['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hr_hsps', 'action' => 'delete', $hrHsp['id']), null, __('Are you sure you want to delete # %s?', $hrHsp['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hr Hsp'), array('controller' => 'hr_hsps', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hr Leave Requests'); ?></h3>
	<?php if (!empty($employee['HrLeaveRequest'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Leave Request Id'); ?></th>
		<th><?php echo __('Leave Type Id'); ?></th>
		<th><?php echo __('Leave Type Name'); ?></th>
		<th><?php echo __('Date Applied'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['HrLeaveRequest'] as $hrLeaveRequest): ?>
		<tr>
			<td><?php echo $hrLeaveRequest['id']; ?></td>
			<td><?php echo $hrLeaveRequest['leave_request_id']; ?></td>
			<td><?php echo $hrLeaveRequest['leave_type_id']; ?></td>
			<td><?php echo $hrLeaveRequest['leave_type_name']; ?></td>
			<td><?php echo $hrLeaveRequest['date_applied']; ?></td>
			<td><?php echo $hrLeaveRequest['employee_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hr_leave_requests', 'action' => 'view', $hrLeaveRequest['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hr_leave_requests', 'action' => 'edit', $hrLeaveRequest['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hr_leave_requests', 'action' => 'delete', $hrLeaveRequest['id']), null, __('Are you sure you want to delete # %s?', $hrLeaveRequest['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hr Leave Request'), array('controller' => 'hr_leave_requests', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hr Leaves'); ?></h3>
	<?php if (!empty($employee['HrLeafe'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Leave Id'); ?></th>
		<th><?php echo __('Leave Date'); ?></th>
		<th><?php echo __('Leave Length Hours'); ?></th>
		<th><?php echo __('Leave Length Days'); ?></th>
		<th><?php echo __('Leave Status'); ?></th>
		<th><?php echo __('Leave Comments'); ?></th>
		<th><?php echo __('Leave Request Id'); ?></th>
		<th><?php echo __('Leave Type Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['HrLeafe'] as $hrLeafe): ?>
		<tr>
			<td><?php echo $hrLeafe['id']; ?></td>
			<td><?php echo $hrLeafe['leave_id']; ?></td>
			<td><?php echo $hrLeafe['leave_date']; ?></td>
			<td><?php echo $hrLeafe['leave_length_hours']; ?></td>
			<td><?php echo $hrLeafe['leave_length_days']; ?></td>
			<td><?php echo $hrLeafe['leave_status']; ?></td>
			<td><?php echo $hrLeafe['leave_comments']; ?></td>
			<td><?php echo $hrLeafe['leave_request_id']; ?></td>
			<td><?php echo $hrLeafe['leave_type_id']; ?></td>
			<td><?php echo $hrLeafe['employee_id']; ?></td>
			<td><?php echo $hrLeafe['start_time']; ?></td>
			<td><?php echo $hrLeafe['end_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hr_leaves', 'action' => 'view', $hrLeafe['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hr_leaves', 'action' => 'edit', $hrLeafe['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hr_leaves', 'action' => 'delete', $hrLeafe['id']), null, __('Are you sure you want to delete # %s?', $hrLeafe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hr Leafe'), array('controller' => 'hr_leaves', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hr Time Events'); ?></h3>
	<?php if (!empty($employee['HrTimeEvent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Time Event Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Activity Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Timesheet Id'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Reported Date'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['HrTimeEvent'] as $hrTimeEvent): ?>
		<tr>
			<td><?php echo $hrTimeEvent['id']; ?></td>
			<td><?php echo $hrTimeEvent['time_event_id']; ?></td>
			<td><?php echo $hrTimeEvent['project_id']; ?></td>
			<td><?php echo $hrTimeEvent['activity_id']; ?></td>
			<td><?php echo $hrTimeEvent['employee_id']; ?></td>
			<td><?php echo $hrTimeEvent['timesheet_id']; ?></td>
			<td><?php echo $hrTimeEvent['start_time']; ?></td>
			<td><?php echo $hrTimeEvent['end_time']; ?></td>
			<td><?php echo $hrTimeEvent['reported_date']; ?></td>
			<td><?php echo $hrTimeEvent['duration']; ?></td>
			<td><?php echo $hrTimeEvent['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hr_time_events', 'action' => 'view', $hrTimeEvent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hr_time_events', 'action' => 'edit', $hrTimeEvent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hr_time_events', 'action' => 'delete', $hrTimeEvent['id']), null, __('Are you sure you want to delete # %s?', $hrTimeEvent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hr Time Event'), array('controller' => 'hr_time_events', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hr Timesheets'); ?></h3>
	<?php if (!empty($employee['HrTimesheet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Timesheet Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Timesheet Period Id'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['HrTimesheet'] as $hrTimesheet): ?>
		<tr>
			<td><?php echo $hrTimesheet['id']; ?></td>
			<td><?php echo $hrTimesheet['timesheet_id']; ?></td>
			<td><?php echo $hrTimesheet['employee_id']; ?></td>
			<td><?php echo $hrTimesheet['timesheet_period_id']; ?></td>
			<td><?php echo $hrTimesheet['start_date']; ?></td>
			<td><?php echo $hrTimesheet['end_date']; ?></td>
			<td><?php echo $hrTimesheet['status']; ?></td>
			<td><?php echo $hrTimesheet['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hr_timesheets', 'action' => 'view', $hrTimesheet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hr_timesheets', 'action' => 'edit', $hrTimesheet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hr_timesheets', 'action' => 'delete', $hrTimesheet['id']), null, __('Are you sure you want to delete # %s?', $hrTimesheet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hr Timesheet'), array('controller' => 'hr_timesheets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Resource Men'); ?></h3>
	<?php if (!empty($employee['ResourceMan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Res Nick'); ?></th>
		<th><?php echo __('Dept Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['ResourceMan'] as $resourceMan): ?>
		<tr>
			<td><?php echo $resourceMan['id']; ?></td>
			<td><?php echo $resourceMan['res_nick']; ?></td>
			<td><?php echo $resourceMan['dept_id']; ?></td>
			<td><?php echo $resourceMan['employee_id']; ?></td>
			<td><?php echo $resourceMan['creat_on']; ?></td>
			<td><?php echo $resourceMan['creat_by']; ?></td>
			<td><?php echo $resourceMan['mod_on']; ?></td>
			<td><?php echo $resourceMan['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'resource_men', 'action' => 'view', $resourceMan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'resource_men', 'action' => 'edit', $resourceMan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'resource_men', 'action' => 'delete', $resourceMan['id']), null, __('Are you sure you want to delete # %s?', $resourceMan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Resource Man'), array('controller' => 'resource_men', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sale Engs'); ?></h3>
	<?php if (!empty($employee['SaleEng'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Sale Region Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['SaleEng'] as $saleEng): ?>
		<tr>
			<td><?php echo $saleEng['id']; ?></td>
			<td><?php echo $saleEng['employee_id']; ?></td>
			<td><?php echo $saleEng['sale_region_id']; ?></td>
			<td><?php echo $saleEng['creat_on']; ?></td>
			<td><?php echo $saleEng['creat_by']; ?></td>
			<td><?php echo $saleEng['mod_on']; ?></td>
			<td><?php echo $saleEng['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sale_engs', 'action' => 'view', $saleEng['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sale_engs', 'action' => 'edit', $saleEng['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sale_engs', 'action' => 'delete', $saleEng['id']), null, __('Are you sure you want to delete # %s?', $saleEng['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sale Eng'), array('controller' => 'sale_engs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($employee['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('User Name'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Is Admin'); ?></th>
		<th><?php echo __('Desc'); ?></th>
		<th><?php echo __('Date Entered'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['user_group_id']; ?></td>
			<td><?php echo $user['user_name']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['employee_id']; ?></td>
			<td><?php echo $user['is_admin']; ?></td>
			<td><?php echo $user['desc']; ?></td>
			<td><?php echo $user['date_entered']; ?></td>
			<td><?php echo $user['date_modified']; ?></td>
			<td><?php echo $user['created_by']; ?></td>
			<td><?php echo $user['status_id']; ?></td>
			<td><?php echo $user['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
