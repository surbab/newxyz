<div class="engBomDets form">
<?php echo $this->Form->create('EngBomDet'); ?>
	<fieldset>
		<legend><?php echo __('Edit Eng Bom Det'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('eng_bom_id');
		echo $this->Form->input('item_code_id');
		echo $this->Form->input('bom_qty');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EngBomDet.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EngBomDet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eng Bom Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eng Boms'), array('controller' => 'eng_boms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom'), array('controller' => 'eng_boms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
