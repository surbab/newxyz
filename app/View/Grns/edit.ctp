<div class="grns form">
<?php echo $this->Form->create('Grn'); ?>
	<fieldset>
		<legend><?php echo __('Edit Grn'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('grn_no');
		echo $this->Form->input('purchase_order_id');
		echo $this->Form->input('delv_no');
		echo $this->Form->input('delv_date');
		echo $this->Form->input('po_desc');
		echo $this->Form->input('grn_location');
		echo $this->Form->input('grn_approval');
		echo $this->Form->input('fin_year_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Grn.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Grn.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grn Dets'), array('controller' => 'grn_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn Det'), array('controller' => 'grn_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Entries'), array('controller' => 'pur_inv_entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Entry'), array('controller' => 'pur_inv_entries', 'action' => 'add')); ?> </li>
	</ul>
</div>
