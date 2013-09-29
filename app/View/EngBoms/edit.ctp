<div class="engBoms form">
<?php echo $this->Form->create('EngBom'); ?>
	<fieldset>
		<legend><?php echo __('Edit Eng Bom'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_code_id');
		echo $this->Form->input('bom_rev');
		echo $this->Form->input('bom_rev_date');
		echo $this->Form->input('bom_desc');
		echo $this->Form->input('bom_activ');
		echo $this->Form->input('eng_chang_note');
		echo $this->Form->input('eng_chang_desc');
		echo $this->Form->input('approval');
		echo $this->Form->input('approval_register_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EngBom.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EngBom.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eng Boms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Bom Dets'), array('controller' => 'eng_bom_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom Det'), array('controller' => 'eng_bom_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
