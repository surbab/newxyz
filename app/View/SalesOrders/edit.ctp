<div class="salesOrders form">
<?php echo $this->Form->create('SalesOrder'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sales Order'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('sales_order_no');
		echo $this->Form->input('partner_id');
		echo $this->Form->input('quotation_id');
		echo $this->Form->input('po_date');
		echo $this->Form->input('so_date');
		echo $this->Form->input('term_id');
		echo $this->Form->input('pay_term_id');
		echo $this->Form->input('sale_eng_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SalesOrder.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SalesOrder.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotations'), array('controller' => 'quotations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terms'), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Term'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pay Terms'), array('controller' => 'pay_terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pay Term'), array('controller' => 'pay_terms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Engs'), array('controller' => 'sale_engs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Eng'), array('controller' => 'sale_engs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalans'), array('controller' => 'del_chalans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Invs'), array('controller' => 'sales_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Inv'), array('controller' => 'sales_invs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List So Dets'), array('controller' => 'so_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('controller' => 'work_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
