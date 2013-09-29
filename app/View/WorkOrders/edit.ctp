<div class="workOrders form">
<?php echo $this->Form->create('WorkOrder'); ?>
	<fieldset>
		<legend><?php echo __('Edit Work Order'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('wo_no');
		echo $this->Form->input('sales_order_id');
		echo $this->Form->input('wo_date');
		echo $this->Form->input('item_code_id');
		echo $this->Form->input('wo_item_qty');
		echo $this->Form->input('mould_det_id');
		echo $this->Form->input('so_det_id');
		echo $this->Form->input('order_complete');
		echo $this->Form->input('target_date');
		echo $this->Form->input('outsource');
		echo $this->Form->input('fin_year_id');
		echo $this->Form->input('approval');
		echo $this->Form->input('approval_register_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('WorkOrder.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('WorkOrder.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('controller' => 'sales_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Dets'), array('controller' => 'mould_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Det'), array('controller' => 'mould_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List So Dets'), array('controller' => 'so_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wo Prods'), array('controller' => 'wo_prods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wo Prod'), array('controller' => 'wo_prods', 'action' => 'add')); ?> </li>
	</ul>
</div>
