<div class="taxCombs form">
<?php echo $this->Form->create('TaxComb'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tax Comb'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tax_description');
		echo $this->Form->input('is_active');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TaxComb.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TaxComb.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pur Inv Dets'), array('controller' => 'pur_inv_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Det'), array('controller' => 'pur_inv_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sal Inv Dets'), array('controller' => 'sal_inv_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sal Inv Det'), array('controller' => 'sal_inv_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List So Dets'), array('controller' => 'so_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Comb Dets'), array('controller' => 'tax_comb_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb Det'), array('controller' => 'tax_comb_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
