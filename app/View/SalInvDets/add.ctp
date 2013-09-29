<div class="salInvDets form">
<?php echo $this->Form->create('SalInvDet'); ?>
	<fieldset>
		<legend><?php echo __('Add Sal Inv Det'); ?></legend>
	<?php
		echo $this->Form->input('sale_inv_id');
		echo $this->Form->input('item_code_id');
		echo $this->Form->input('qty');
		echo $this->Form->input('price');
		echo $this->Form->input('tot_price');
		echo $this->Form->input('tax_comb_id');
		echo $this->Form->input('tax_amt');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sal Inv Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sale Invs'), array('controller' => 'sale_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Inv'), array('controller' => 'sale_invs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('controller' => 'tax_combs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('controller' => 'tax_combs', 'action' => 'add')); ?> </li>
	</ul>
</div>
