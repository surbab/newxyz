<div class="locations form">
<?php echo $this->Form->create('Location'); ?>
	<fieldset>
		<legend><?php echo __('Add Location'); ?></legend>
	<?php
		echo $this->Form->input('loc_name');
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
		echo $this->Form->input('ven_cont');
		echo $this->Form->input('cont_tel_1');
		echo $this->Form->input('cont_email');
		echo $this->Form->input('vat_tin');
		echo $this->Form->input('cst_no');
		echo $this->Form->input('exc_no');
		echo $this->Form->input('serv_tax_no');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accs'), array('controller' => 'bank_accs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Acc'), array('controller' => 'bank_accs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cash Accs'), array('controller' => 'cash_accs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash Acc'), array('controller' => 'cash_accs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contras'), array('controller' => 'contras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contra'), array('controller' => 'contras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalans'), array('controller' => 'del_chalans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimations'), array('controller' => 'estimations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimation'), array('controller' => 'estimations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grns'), array('controller' => 'grns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn'), array('controller' => 'grns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journals'), array('controller' => 'journals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Accs'), array('controller' => 'mat_accs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Acc'), array('controller' => 'mat_accs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('controller' => 'mould_rework_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Entries'), array('controller' => 'pur_inv_entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Entry'), array('controller' => 'pur_inv_entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotations'), array('controller' => 'quotations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receipts'), array('controller' => 'receipts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt'), array('controller' => 'receipts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Rfqs'), array('controller' => 'sale_rfqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq'), array('controller' => 'sale_rfqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Invs'), array('controller' => 'sales_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Inv'), array('controller' => 'sales_invs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('controller' => 'sales_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Accs'), array('controller' => 'tax_accs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Acc'), array('controller' => 'tax_accs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wo Prod Det Men'), array('controller' => 'wo_prod_det_men', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wo Prod Det Man'), array('controller' => 'wo_prod_det_men', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('controller' => 'work_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Workflows'), array('controller' => 'workflows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workflow'), array('controller' => 'workflows', 'action' => 'add')); ?> </li>
	</ul>
</div>
