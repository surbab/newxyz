<div class="purInvEntries form">
<?php echo $this->Form->create('PurInvEntry'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pur Inv Entry'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('grn_id');
		echo $this->Form->input('purchase_order_id');
		echo $this->Form->input('inv_no');
		echo $this->Form->input('inv_date');
		echo $this->Form->input('inv_desc');
		echo $this->Form->input('tot_value');
		echo $this->Form->input('tot_taxes');
		echo $this->Form->input('tot_inv_value');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PurInvEntry.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PurInvEntry.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pur Inv Entries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grns'), array('controller' => 'grns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn'), array('controller' => 'grns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('controller' => 'mould_rework_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Dets'), array('controller' => 'pur_inv_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Det'), array('controller' => 'pur_inv_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
