<div class="itemClasses form">
<?php echo $this->Form->create('ItemClass'); ?>
	<fieldset>
		<legend><?php echo __('Add Item Class'); ?></legend>
	<?php
		echo $this->Form->input('item_class');
		echo $this->Form->input('item_cat_id');
		echo $this->Form->input('item_class_desc');
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

		<li><?php echo $this->Html->link(__('List Item Classes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Cats'), array('controller' => 'item_cats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Cat'), array('controller' => 'item_cats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
