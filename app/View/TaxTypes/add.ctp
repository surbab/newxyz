<div class="taxTypes form">
<?php echo $this->Form->create('TaxType'); ?>
	<fieldset>
		<legend><?php echo __('Add Tax Type'); ?></legend>
	<?php
		echo $this->Form->input('tax_type');
		echo $this->Form->input('tax_perc');
		echo $this->Form->input('tax_active');
		echo $this->Form->input('is_tax_on');
		echo $this->Form->input('tax_on');
		echo $this->Form->input('effective_fr');
		echo $this->Form->input('effective_to');
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

		<li><?php echo $this->Html->link(__('List Tax Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tax Comb Dets'), array('controller' => 'tax_comb_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb Det'), array('controller' => 'tax_comb_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
