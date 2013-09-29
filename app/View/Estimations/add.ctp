<div class="estimations form">
<?php echo $this->Form->create('Estimation'); ?>
	<fieldset>
		<legend><?php echo __('Add Estimation'); ?></legend>
	<?php
		echo $this->Form->input('location_id');
		echo $this->Form->input('item_code_id');
		echo $this->Form->input('sale_rfq_id');
		echo $this->Form->input('sale_rfq_det_id');
		echo $this->Form->input('estim_value');
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

		<li><?php echo $this->Html->link(__('List Estimations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Rfqs'), array('controller' => 'sale_rfqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq'), array('controller' => 'sale_rfqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Rfq Dets'), array('controller' => 'sale_rfq_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq Det'), array('controller' => 'sale_rfq_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimination Dets'), array('controller' => 'estimination_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimination Det'), array('controller' => 'estimination_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotations'), array('controller' => 'quotations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
	</ul>
</div>
