<div class="taxCombDets form">
<?php echo $this->Form->create('TaxCombDet'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tax Comb Det'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tax_comb_id');
		echo $this->Form->input('tax_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TaxCombDet.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TaxCombDet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tax Comb Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('controller' => 'tax_combs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('controller' => 'tax_combs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Types'), array('controller' => 'tax_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Type'), array('controller' => 'tax_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
