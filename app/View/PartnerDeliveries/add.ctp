<div class="partnerDeliveries form">
<?php echo $this->Form->create('PartnerDelivery'); ?>
	<fieldset>
		<legend><?php echo __('Add Partner Delivery'); ?></legend>
	<?php
		echo $this->Form->input('partner_id');
		echo $this->Form->input('add_1');
		echo $this->Form->input('add_2');
		echo $this->Form->input('post');
		echo $this->Form->input('city');
		echo $this->Form->input('district');
		echo $this->Form->input('state_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('pin_code');
		echo $this->Form->input('tel_1');
		echo $this->Form->input('tel_2');
		echo $this->Form->input('fax');
		echo $this->Form->input('email');
		echo $this->Form->input('web');
		echo $this->Form->input('vat_tin');
		echo $this->Form->input('cst_no');
		echo $this->Form->input('exc_no');
		echo $this->Form->input('serv_tax_no');
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

		<li><?php echo $this->Html->link(__('List Partner Deliveries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
