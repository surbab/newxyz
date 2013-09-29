<div class="poDets form">
<?php echo $this->Form->create('PoDet'); ?>
	<fieldset>
		<legend><?php echo __('Add Po Det'); ?></legend>
	<?php
		echo $this->Form->input('purchase_order_id');
		echo $this->Form->input('item_code_id');
		echo $this->Form->input('uom_id');
		echo $this->Form->input('qty');
		echo $this->Form->input('price');
		echo $this->Form->input('tot_price');
		echo $this->Form->input('tax_comb_id');
		echo $this->Form->input('requird_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Po Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('controller' => 'uoms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uom'), array('controller' => 'uoms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('controller' => 'tax_combs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('controller' => 'tax_combs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grn Dets'), array('controller' => 'grn_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn Det'), array('controller' => 'grn_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Dets'), array('controller' => 'pur_inv_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Det'), array('controller' => 'pur_inv_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
