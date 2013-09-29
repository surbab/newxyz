<div class="saleAgents form">
<?php echo $this->Form->create('SaleAgent'); ?>
	<fieldset>
		<legend><?php echo __('Add Sale Agent'); ?></legend>
	<?php
		echo $this->Form->input('partner_id');
		echo $this->Form->input('sale_region_id');
		echo $this->Form->input('sale_comm_id');
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

		<li><?php echo $this->Html->link(__('List Sale Agents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Regions'), array('controller' => 'sale_regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Region'), array('controller' => 'sale_regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Comms'), array('controller' => 'sale_comms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Comm'), array('controller' => 'sale_comms', 'action' => 'add')); ?> </li>
	</ul>
</div>
