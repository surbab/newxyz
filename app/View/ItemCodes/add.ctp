<div class="itemCodes form">
<?php echo $this->Form->create('ItemCode'); ?>
	<fieldset>
		<legend><?php echo __('Add Item Code'); ?></legend>
	<?php
		echo $this->Form->input('item_code');
		echo $this->Form->input('item_class_id');
		echo $this->Form->input('item_desc');
		echo $this->Form->input('item_stock');
		echo $this->Form->input('item_price');
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

		<li><?php echo $this->Html->link(__('List Item Codes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Classes'), array('controller' => 'item_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Class'), array('controller' => 'item_classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Bom Dets'), array('controller' => 'eng_bom_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom Det'), array('controller' => 'eng_bom_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Boms'), array('controller' => 'eng_boms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom'), array('controller' => 'eng_boms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Accs'), array('controller' => 'mat_accs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Acc'), array('controller' => 'mat_accs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Issue Dets'), array('controller' => 'mat_issue_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Issue Det'), array('controller' => 'mat_issue_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
