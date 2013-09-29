<div class="saleComms form">
<?php echo $this->Form->create('SaleComm'); ?>
	<fieldset>
		<legend><?php echo __('Add Sale Comm'); ?></legend>
	<?php
		echo $this->Form->input('sale_comm');
		echo $this->Form->input('comm_rate');
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

		<li><?php echo $this->Html->link(__('List Sale Comms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sale Agents'), array('controller' => 'sale_agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Agent'), array('controller' => 'sale_agents', 'action' => 'add')); ?> </li>
	</ul>
</div>
