<div class="approvalRegisterDets view">
<h2><?php  echo __('Approval Register Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($approvalRegisterDet['ApprovalRegisterDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Register'); ?></dt>
		<dd>
			<?php echo $this->Html->link($approvalRegisterDet['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $approvalRegisterDet['ApprovalRegister']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($approvalRegisterDet['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $approvalRegisterDet['Employee']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved'); ?></dt>
		<dd>
			<?php echo h($approvalRegisterDet['ApprovalRegisterDet']['approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($approvalRegisterDet['ApprovalRegisterDet']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Date'); ?></dt>
		<dd>
			<?php echo h($approvalRegisterDet['ApprovalRegisterDet']['approval_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Approval Register Det'), array('action' => 'edit', $approvalRegisterDet['ApprovalRegisterDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Approval Register Det'), array('action' => 'delete', $approvalRegisterDet['ApprovalRegisterDet']['id']), null, __('Are you sure you want to delete # %s?', $approvalRegisterDet['ApprovalRegisterDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Register Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
