<div class="itemCats form">
<?php echo $this->Form->create('ItemCat'); ?>
	<fieldset>
		<legend><?php echo __('Edit Item Cat'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_cat');
		echo $this->Form->input('item_desc');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ItemCat.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ItemCat.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Item Cats'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Classes'), array('controller' => 'item_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Class'), array('controller' => 'item_classes', 'action' => 'add')); ?> </li>
	</ul>
</div>
