<div class="quoteDets form">
<?php echo $this->Form->create('QuoteDet'); ?>
	<fieldset>
		<legend><?php echo __('Edit Quote Det'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('quotation_id');
		echo $this->Form->input('item_code_id');
		echo $this->Form->input('uom_id');
		echo $this->Form->input('qty');
		echo $this->Form->input('price');
		echo $this->Form->input('tot_price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('QuoteDet.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('QuoteDet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Quote Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Quotations'), array('controller' => 'quotations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('controller' => 'uoms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uom'), array('controller' => 'uoms', 'action' => 'add')); ?> </li>
	</ul>
</div>
