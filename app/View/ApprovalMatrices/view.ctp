<div class="approvalMatrices view">
<h2><?php  echo __('Approval Matrix'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($approvalMatrix['ApprovalMatrix']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doc Name'); ?></dt>
		<dd>
			<?php echo h($approvalMatrix['ApprovalMatrix']['doc_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Table Name'); ?></dt>
		<dd>
			<?php echo h($approvalMatrix['ApprovalMatrix']['table_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approver 1'); ?></dt>
		<dd>
			<?php echo h($approvalMatrix['ApprovalMatrix']['approver_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approver 2'); ?></dt>
		<dd>
			<?php echo h($approvalMatrix['ApprovalMatrix']['approver_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approver 3'); ?></dt>
		<dd>
			<?php echo h($approvalMatrix['ApprovalMatrix']['approver_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approver 4'); ?></dt>
		<dd>
			<?php echo h($approvalMatrix['ApprovalMatrix']['approver_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approver 5'); ?></dt>
		<dd>
			<?php echo h($approvalMatrix['ApprovalMatrix']['approver_5']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Approval Matrix'), array('action' => 'edit', $approvalMatrix['ApprovalMatrix']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Approval Matrix'), array('action' => 'delete', $approvalMatrix['ApprovalMatrix']['id']), null, __('Are you sure you want to delete # %s?', $approvalMatrix['ApprovalMatrix']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Matrices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Matrix'), array('action' => 'add')); ?> </li>
	</ul>
</div>
