<div class="partners form">
<?php echo $this->Form->create('Partner'); ?>
	<fieldset>
		<legend><?php echo __('Add Partner'); ?></legend>
	<?php
		echo $this->Form->input('name');
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
		echo $this->Form->input('partner_contact');
		echo $this->Form->input('partner_tel_1');
		echo $this->Form->input('partner_email');
		echo $this->Form->input('vat_tin');
		echo $this->Form->input('cst_no');
		echo $this->Form->input('exc_no');
		echo $this->Form->input('serv_tax_no');
		echo $this->Form->input('bank_name');
		echo $this->Form->input('bank_branch');
		echo $this->Form->input('ac_no');
		echo $this->Form->input('bank_ifsc');
		echo $this->Form->input('approval_req');
		echo $this->Form->input('approved');
		echo $this->Form->input('approval_register_id');
		echo $this->Form->input('cust');
		echo $this->Form->input('sup');
		echo $this->Form->input('agent');
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

		<li><?php echo $this->Html->link(__('List Partners'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalans'), array('controller' => 'del_chalans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partner Deliveries'), array('controller' => 'partner_deliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner Delivery'), array('controller' => 'partner_deliveries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Agents'), array('controller' => 'sale_agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Agent'), array('controller' => 'sale_agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Rfqs'), array('controller' => 'sale_rfqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq'), array('controller' => 'sale_rfqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Invs'), array('controller' => 'sale_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Inv'), array('controller' => 'sale_invs', 'action' => 'add')); ?> </li>
	</ul>
</div>
