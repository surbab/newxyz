<div class="matIssueDets form">
<?php echo $this->Form->create('MatIssueDet'); ?>
	<fieldset>
		<legend><?php echo __('Add Mat Issue Det'); ?></legend>
	<?php
		echo $this->Form->input('mat_issue_id');
		echo $this->Form->input('item_code_id');
		echo $this->Form->input('qty');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mat Issue Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mat Issues'), array('controller' => 'mat_issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Issue'), array('controller' => 'mat_issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
