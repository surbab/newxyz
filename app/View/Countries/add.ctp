<div class="countries form">
<?php echo $this->Form->create('Country'); ?>
	<fieldset>
		<legend><?php echo __('Add Country'); ?></legend>
	<?php
		echo $this->Form->input('country_code');
		echo $this->Form->input('name');
		echo $this->Form->input('country_name');
		echo $this->Form->input('iso3');
		echo $this->Form->input('numcode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Company Regs'), array('controller' => 'company_regs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Reg'), array('controller' => 'company_regs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partner Deliveries'), array('controller' => 'partner_deliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner Delivery'), array('controller' => 'partner_deliveries', 'action' => 'add')); ?> </li>
	</ul>
</div>
