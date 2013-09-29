<div class="delChalans form">
<?php echo $this->Form->create('DelChalan'); ?>
	<fieldset>
		<legend><?php echo __('Add Del Chalan'); ?></legend>
	<?php
		echo $this->Form->input('location_id');
		echo $this->Form->input('del_chal_no');
		echo $this->Form->input('partner_id');
		echo $this->Form->input('sales_order_id');
		echo $this->Form->input('delv_date');
		echo $this->Form->input('del_desc');
		echo $this->Form->input('del_approval');
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

		<li><?php echo $this->Html->link(__('List Del Chalans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('controller' => 'sales_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalan Dets'), array('controller' => 'del_chalan_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan Det'), array('controller' => 'del_chalan_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('controller' => 'mould_rework_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Invs'), array('controller' => 'sale_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Inv'), array('controller' => 'sale_invs', 'action' => 'add')); ?> </li>
	</ul>
</div>
