<div class="approvalMatrices form">
<?php echo $this->Form->create('ApprovalMatrix'); ?>
	<fieldset>
		<legend><?php echo __('Add Approval Matrix'); ?></legend>
	<?php
		echo $this->Form->input('doc_name');
		echo $this->Form->input('table_name');
		echo $this->Form->input('approver_1');
		echo $this->Form->input('approver_2');
		echo $this->Form->input('approver_3');
		echo $this->Form->input('approver_4');
		echo $this->Form->input('approver_5');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Approval Matrices'), array('action' => 'index')); ?></li>
	</ul>
</div>
