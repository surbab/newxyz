<div class="employees form">
<?php echo $this->Form->create('Employee'); ?>
	<fieldset>
		<legend><?php echo __('Add Employee'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('add_1');
		echo $this->Form->input('add_2');
		echo $this->Form->input('post');
		echo $this->Form->input('city');
		echo $this->Form->input('district');
		echo $this->Form->input('state_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('pin_code');
		echo $this->Form->input('tel_1');
		echo $this->Form->input('tel_2');
		echo $this->Form->input('fax');
		echo $this->Form->input('email');
		echo $this->Form->input('web');
		echo $this->Form->input('joined_date');
		echo $this->Form->input('terminated_date');
		echo $this->Form->input('term_reason');
		echo $this->Form->input('bank_name');
		echo $this->Form->input('bank_branch');
		echo $this->Form->input('ac_no');
		echo $this->Form->input('bank_ifsc');
		echo $this->Form->input('creat_on');
		echo $this->Form->input('creat_by');
		echo $this->Form->input('mod_on');
		echo $this->Form->input('mod_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
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
