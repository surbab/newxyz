<div class="locations view">
<h2><?php  echo __('Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($location['Location']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loc Name'); ?></dt>
		<dd>
			<?php echo h($location['Location']['loc_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($location['Location']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add 1'); ?></dt>
		<dd>
			<?php echo h($location['Location']['add_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add 2'); ?></dt>
		<dd>
			<?php echo h($location['Location']['add_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo h($location['Location']['post']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($location['Location']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($location['Location']['district']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($location['State']['name'], array('controller' => 'states', 'action' => 'view', $location['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($location['Country']['name'], array('controller' => 'countries', 'action' => 'view', $location['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pin Code'); ?></dt>
		<dd>
			<?php echo h($location['Location']['pin_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel 1'); ?></dt>
		<dd>
			<?php echo h($location['Location']['tel_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel 2'); ?></dt>
		<dd>
			<?php echo h($location['Location']['tel_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($location['Location']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($location['Location']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($location['Location']['web']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ven Cont'); ?></dt>
		<dd>
			<?php echo h($location['Location']['ven_cont']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cont Tel 1'); ?></dt>
		<dd>
			<?php echo h($location['Location']['cont_tel_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cont Email'); ?></dt>
		<dd>
			<?php echo h($location['Location']['cont_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vat Tin'); ?></dt>
		<dd>
			<?php echo h($location['Location']['vat_tin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cst No'); ?></dt>
		<dd>
			<?php echo h($location['Location']['cst_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exc No'); ?></dt>
		<dd>
			<?php echo h($location['Location']['exc_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serv Tax No'); ?></dt>
		<dd>
			<?php echo h($location['Location']['serv_tax_no']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Location'), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Location'), array('action' => 'delete', $location['Location']['id']), null, __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Asset Codes'); ?></h3>
	<?php if (!empty($location['AssetCode'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Asset Code'); ?></th>
		<th><?php echo __('Asset Cat Id'); ?></th>
		<th><?php echo __('Asset Depr Id'); ?></th>
		<th><?php echo __('Asset Life'); ?></th>
		<th><?php echo __('Asset Desc'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Asset Po No'); ?></th>
		<th><?php echo __('Grn No Id'); ?></th>
		<th><?php echo __('Exp Life'); ?></th>
		<th><?php echo __('Asset Location Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['AssetCode'] as $assetCode): ?>
		<tr>
			<td><?php echo $assetCode['id']; ?></td>
			<td><?php echo $assetCode['location_id']; ?></td>
			<td><?php echo $assetCode['asset_code']; ?></td>
			<td><?php echo $assetCode['asset_cat_id']; ?></td>
			<td><?php echo $assetCode['asset_depr_id']; ?></td>
			<td><?php echo $assetCode['asset_life']; ?></td>
			<td><?php echo $assetCode['asset_desc']; ?></td>
			<td><?php echo $assetCode['vendor_id']; ?></td>
			<td><?php echo $assetCode['asset_po_no']; ?></td>
			<td><?php echo $assetCode['grn_no_id']; ?></td>
			<td><?php echo $assetCode['exp_life']; ?></td>
			<td><?php echo $assetCode['asset_location_id']; ?></td>
			<td><?php echo $assetCode['creat_on']; ?></td>
			<td><?php echo $assetCode['creat_by']; ?></td>
			<td><?php echo $assetCode['mod_on']; ?></td>
			<td><?php echo $assetCode['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'asset_codes', 'action' => 'view', $assetCode['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'asset_codes', 'action' => 'edit', $assetCode['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'asset_codes', 'action' => 'delete', $assetCode['id']), null, __('Are you sure you want to delete # %s?', $assetCode['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Bank Accs'); ?></h3>
	<?php if (!empty($location['BankAcc'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Vouch Type'); ?></th>
		<th><?php echo __('Ref Id'); ?></th>
		<th><?php echo __('Trans Date'); ?></th>
		<th><?php echo __('Credit'); ?></th>
		<th><?php echo __('Debit'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['BankAcc'] as $bankAcc): ?>
		<tr>
			<td><?php echo $bankAcc['id']; ?></td>
			<td><?php echo $bankAcc['location_id']; ?></td>
			<td><?php echo $bankAcc['vouch_type']; ?></td>
			<td><?php echo $bankAcc['ref_id']; ?></td>
			<td><?php echo $bankAcc['trans_date']; ?></td>
			<td><?php echo $bankAcc['credit']; ?></td>
			<td><?php echo $bankAcc['debit']; ?></td>
			<td><?php echo $bankAcc['fin_year_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bank_accs', 'action' => 'view', $bankAcc['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bank_accs', 'action' => 'edit', $bankAcc['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bank_accs', 'action' => 'delete', $bankAcc['id']), null, __('Are you sure you want to delete # %s?', $bankAcc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bank Acc'), array('controller' => 'bank_accs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cash Accs'); ?></h3>
	<?php if (!empty($location['CashAcc'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Vouch Type'); ?></th>
		<th><?php echo __('Ref Id'); ?></th>
		<th><?php echo __('Trans Date'); ?></th>
		<th><?php echo __('Credit'); ?></th>
		<th><?php echo __('Debit'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['CashAcc'] as $cashAcc): ?>
		<tr>
			<td><?php echo $cashAcc['id']; ?></td>
			<td><?php echo $cashAcc['location_id']; ?></td>
			<td><?php echo $cashAcc['vouch_type']; ?></td>
			<td><?php echo $cashAcc['ref_id']; ?></td>
			<td><?php echo $cashAcc['trans_date']; ?></td>
			<td><?php echo $cashAcc['credit']; ?></td>
			<td><?php echo $cashAcc['debit']; ?></td>
			<td><?php echo $cashAcc['fin_year_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cash_accs', 'action' => 'view', $cashAcc['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cash_accs', 'action' => 'edit', $cashAcc['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cash_accs', 'action' => 'delete', $cashAcc['id']), null, __('Are you sure you want to delete # %s?', $cashAcc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cash Acc'), array('controller' => 'cash_accs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Contras'); ?></h3>
	<?php if (!empty($location['Contra'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Contra No'); ?></th>
		<th><?php echo __('Contra Date'); ?></th>
		<th><?php echo __('Account From'); ?></th>
		<th><?php echo __('Desc'); ?></th>
		<th><?php echo __('Tot Value'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Contra'] as $contra): ?>
		<tr>
			<td><?php echo $contra['id']; ?></td>
			<td><?php echo $contra['location_id']; ?></td>
			<td><?php echo $contra['contra_no']; ?></td>
			<td><?php echo $contra['contra_date']; ?></td>
			<td><?php echo $contra['account_from']; ?></td>
			<td><?php echo $contra['desc']; ?></td>
			<td><?php echo $contra['tot_value']; ?></td>
			<td><?php echo $contra['fin_year_id']; ?></td>
			<td><?php echo $contra['creat_on']; ?></td>
			<td><?php echo $contra['creat_by']; ?></td>
			<td><?php echo $contra['mod_on']; ?></td>
			<td><?php echo $contra['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contras', 'action' => 'view', $contra['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contras', 'action' => 'edit', $contra['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contras', 'action' => 'delete', $contra['id']), null, __('Are you sure you want to delete # %s?', $contra['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contra'), array('controller' => 'contras', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Del Chalans'); ?></h3>
	<?php if (!empty($location['DelChalan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Del Chal No'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Sales Order Id'); ?></th>
		<th><?php echo __('Delv Date'); ?></th>
		<th><?php echo __('Del Desc'); ?></th>
		<th><?php echo __('Del Approval'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['DelChalan'] as $delChalan): ?>
		<tr>
			<td><?php echo $delChalan['id']; ?></td>
			<td><?php echo $delChalan['location_id']; ?></td>
			<td><?php echo $delChalan['del_chal_no']; ?></td>
			<td><?php echo $delChalan['partner_id']; ?></td>
			<td><?php echo $delChalan['sales_order_id']; ?></td>
			<td><?php echo $delChalan['delv_date']; ?></td>
			<td><?php echo $delChalan['del_desc']; ?></td>
			<td><?php echo $delChalan['del_approval']; ?></td>
			<td><?php echo $delChalan['fin_year_id']; ?></td>
			<td><?php echo $delChalan['creat_on']; ?></td>
			<td><?php echo $delChalan['creat_by']; ?></td>
			<td><?php echo $delChalan['mod_on']; ?></td>
			<td><?php echo $delChalan['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'del_chalans', 'action' => 'view', $delChalan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'del_chalans', 'action' => 'edit', $delChalan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'del_chalans', 'action' => 'delete', $delChalan['id']), null, __('Are you sure you want to delete # %s?', $delChalan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Estimations'); ?></h3>
	<?php if (!empty($location['Estimation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Item Name'); ?></th>
		<th><?php echo __('Item Desc'); ?></th>
		<th><?php echo __('Rfq Qty'); ?></th>
		<th><?php echo __('Rfq Comments'); ?></th>
		<th><?php echo __('Rfq Id'); ?></th>
		<th><?php echo __('Estim Value'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Estimation'] as $estimation): ?>
		<tr>
			<td><?php echo $estimation['id']; ?></td>
			<td><?php echo $estimation['location_id']; ?></td>
			<td><?php echo $estimation['item_id']; ?></td>
			<td><?php echo $estimation['item_name']; ?></td>
			<td><?php echo $estimation['item_desc']; ?></td>
			<td><?php echo $estimation['rfq_qty']; ?></td>
			<td><?php echo $estimation['rfq_comments']; ?></td>
			<td><?php echo $estimation['rfq_id']; ?></td>
			<td><?php echo $estimation['estim_value']; ?></td>
			<td><?php echo $estimation['fin_year_id']; ?></td>
			<td><?php echo $estimation['approval']; ?></td>
			<td><?php echo $estimation['approval_register_id']; ?></td>
			<td><?php echo $estimation['creat_on']; ?></td>
			<td><?php echo $estimation['creat_by']; ?></td>
			<td><?php echo $estimation['mod_on']; ?></td>
			<td><?php echo $estimation['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estimations', 'action' => 'view', $estimation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estimations', 'action' => 'edit', $estimation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estimations', 'action' => 'delete', $estimation['id']), null, __('Are you sure you want to delete # %s?', $estimation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estimation'), array('controller' => 'estimations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Grns'); ?></h3>
	<?php if (!empty($location['Grn'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Grn No'); ?></th>
		<th><?php echo __('Purchase Order Id'); ?></th>
		<th><?php echo __('Delv No'); ?></th>
		<th><?php echo __('Delv Date'); ?></th>
		<th><?php echo __('Po Desc'); ?></th>
		<th><?php echo __('Grn Location'); ?></th>
		<th><?php echo __('Grn Approval'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Grn'] as $grn): ?>
		<tr>
			<td><?php echo $grn['id']; ?></td>
			<td><?php echo $grn['location_id']; ?></td>
			<td><?php echo $grn['grn_no']; ?></td>
			<td><?php echo $grn['purchase_order_id']; ?></td>
			<td><?php echo $grn['delv_no']; ?></td>
			<td><?php echo $grn['delv_date']; ?></td>
			<td><?php echo $grn['po_desc']; ?></td>
			<td><?php echo $grn['grn_location']; ?></td>
			<td><?php echo $grn['grn_approval']; ?></td>
			<td><?php echo $grn['fin_year_id']; ?></td>
			<td><?php echo $grn['creat_on']; ?></td>
			<td><?php echo $grn['creat_by']; ?></td>
			<td><?php echo $grn['mod_on']; ?></td>
			<td><?php echo $grn['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grns', 'action' => 'view', $grn['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grns', 'action' => 'edit', $grn['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grns', 'action' => 'delete', $grn['id']), null, __('Are you sure you want to delete # %s?', $grn['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grn'), array('controller' => 'grns', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Journals'); ?></h3>
	<?php if (!empty($location['Journal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Journal No'); ?></th>
		<th><?php echo __('Journal Date'); ?></th>
		<th><?php echo __('Desc'); ?></th>
		<th><?php echo __('Tot Value'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Journal'] as $journal): ?>
		<tr>
			<td><?php echo $journal['id']; ?></td>
			<td><?php echo $journal['location_id']; ?></td>
			<td><?php echo $journal['journal_no']; ?></td>
			<td><?php echo $journal['journal_date']; ?></td>
			<td><?php echo $journal['desc']; ?></td>
			<td><?php echo $journal['tot_value']; ?></td>
			<td><?php echo $journal['fin_year_id']; ?></td>
			<td><?php echo $journal['creat_on']; ?></td>
			<td><?php echo $journal['creat_by']; ?></td>
			<td><?php echo $journal['mod_on']; ?></td>
			<td><?php echo $journal['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'journals', 'action' => 'view', $journal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'journals', 'action' => 'edit', $journal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'journals', 'action' => 'delete', $journal['id']), null, __('Are you sure you want to delete # %s?', $journal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Journal'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mat Accs'); ?></h3>
	<?php if (!empty($location['MatAcc'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Doc Type'); ?></th>
		<th><?php echo __('Doc Ref No'); ?></th>
		<th><?php echo __('Item Code Id'); ?></th>
		<th><?php echo __('Debit'); ?></th>
		<th><?php echo __('Credit'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['MatAcc'] as $matAcc): ?>
		<tr>
			<td><?php echo $matAcc['id']; ?></td>
			<td><?php echo $matAcc['location_id']; ?></td>
			<td><?php echo $matAcc['doc_type']; ?></td>
			<td><?php echo $matAcc['doc_ref_no']; ?></td>
			<td><?php echo $matAcc['item_code_id']; ?></td>
			<td><?php echo $matAcc['debit']; ?></td>
			<td><?php echo $matAcc['credit']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mat_accs', 'action' => 'view', $matAcc['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mat_accs', 'action' => 'edit', $matAcc['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mat_accs', 'action' => 'delete', $matAcc['id']), null, __('Are you sure you want to delete # %s?', $matAcc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mat Acc'), array('controller' => 'mat_accs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mould Rework Histories'); ?></h3>
	<?php if (!empty($location['MouldReworkHistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Mould Det Id'); ?></th>
		<th><?php echo __('Damage Date'); ?></th>
		<th><?php echo __('Mould Rew Reason Id'); ?></th>
		<th><?php echo __('Mould Rew Reason Desc'); ?></th>
		<th><?php echo __('Mould Disposition'); ?></th>
		<th><?php echo __('Dispatch Date'); ?></th>
		<th><?php echo __('Dc No Id'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Received Date'); ?></th>
		<th><?php echo __('Rewo Cost'); ?></th>
		<th><?php echo __('Comment Rew'); ?></th>
		<th><?php echo __('Inv No Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['MouldReworkHistory'] as $mouldReworkHistory): ?>
		<tr>
			<td><?php echo $mouldReworkHistory['id']; ?></td>
			<td><?php echo $mouldReworkHistory['location_id']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_det_id']; ?></td>
			<td><?php echo $mouldReworkHistory['damage_date']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_rew_reason_id']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_rew_reason_desc']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_disposition']; ?></td>
			<td><?php echo $mouldReworkHistory['dispatch_date']; ?></td>
			<td><?php echo $mouldReworkHistory['dc_no_id']; ?></td>
			<td><?php echo $mouldReworkHistory['vendor_id']; ?></td>
			<td><?php echo $mouldReworkHistory['received_date']; ?></td>
			<td><?php echo $mouldReworkHistory['rewo_cost']; ?></td>
			<td><?php echo $mouldReworkHistory['comment_rew']; ?></td>
			<td><?php echo $mouldReworkHistory['inv_no_id']; ?></td>
			<td><?php echo $mouldReworkHistory['creat_on']; ?></td>
			<td><?php echo $mouldReworkHistory['creat_by']; ?></td>
			<td><?php echo $mouldReworkHistory['mod_on']; ?></td>
			<td><?php echo $mouldReworkHistory['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mould_rework_histories', 'action' => 'view', $mouldReworkHistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mould_rework_histories', 'action' => 'edit', $mouldReworkHistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mould_rework_histories', 'action' => 'delete', $mouldReworkHistory['id']), null, __('Are you sure you want to delete # %s?', $mouldReworkHistory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Payments'); ?></h3>
	<?php if (!empty($location['Payment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Payment No'); ?></th>
		<th><?php echo __('Payment Date'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th><?php echo __('Desc'); ?></th>
		<th><?php echo __('Tot Value'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Payment'] as $payment): ?>
		<tr>
			<td><?php echo $payment['id']; ?></td>
			<td><?php echo $payment['location_id']; ?></td>
			<td><?php echo $payment['payment_no']; ?></td>
			<td><?php echo $payment['payment_date']; ?></td>
			<td><?php echo $payment['account_id']; ?></td>
			<td><?php echo $payment['desc']; ?></td>
			<td><?php echo $payment['tot_value']; ?></td>
			<td><?php echo $payment['fin_year_id']; ?></td>
			<td><?php echo $payment['creat_on']; ?></td>
			<td><?php echo $payment['creat_by']; ?></td>
			<td><?php echo $payment['mod_on']; ?></td>
			<td><?php echo $payment['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payments', 'action' => 'view', $payment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payments', 'action' => 'edit', $payment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payments', 'action' => 'delete', $payment['id']), null, __('Are you sure you want to delete # %s?', $payment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pur Inv Entries'); ?></h3>
	<?php if (!empty($location['PurInvEntry'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Grn Id'); ?></th>
		<th><?php echo __('Purchase Order Id'); ?></th>
		<th><?php echo __('Inv No'); ?></th>
		<th><?php echo __('Inv Date'); ?></th>
		<th><?php echo __('Inv Desc'); ?></th>
		<th><?php echo __('Tot Value'); ?></th>
		<th><?php echo __('Tot Taxes'); ?></th>
		<th><?php echo __('Tot Inv Value'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['PurInvEntry'] as $purInvEntry): ?>
		<tr>
			<td><?php echo $purInvEntry['id']; ?></td>
			<td><?php echo $purInvEntry['location_id']; ?></td>
			<td><?php echo $purInvEntry['grn_id']; ?></td>
			<td><?php echo $purInvEntry['purchase_order_id']; ?></td>
			<td><?php echo $purInvEntry['inv_no']; ?></td>
			<td><?php echo $purInvEntry['inv_date']; ?></td>
			<td><?php echo $purInvEntry['inv_desc']; ?></td>
			<td><?php echo $purInvEntry['tot_value']; ?></td>
			<td><?php echo $purInvEntry['tot_taxes']; ?></td>
			<td><?php echo $purInvEntry['tot_inv_value']; ?></td>
			<td><?php echo $purInvEntry['fin_year_id']; ?></td>
			<td><?php echo $purInvEntry['approval']; ?></td>
			<td><?php echo $purInvEntry['approval_register_id']; ?></td>
			<td><?php echo $purInvEntry['creat_on']; ?></td>
			<td><?php echo $purInvEntry['creat_by']; ?></td>
			<td><?php echo $purInvEntry['mod_on']; ?></td>
			<td><?php echo $purInvEntry['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pur_inv_entries', 'action' => 'view', $purInvEntry['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pur_inv_entries', 'action' => 'edit', $purInvEntry['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pur_inv_entries', 'action' => 'delete', $purInvEntry['id']), null, __('Are you sure you want to delete # %s?', $purInvEntry['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pur Inv Entry'), array('controller' => 'pur_inv_entries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Purchase Orders'); ?></h3>
	<?php if (!empty($location['PurchaseOrder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Po No'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Qtn Ref'); ?></th>
		<th><?php echo __('Qtn Date'); ?></th>
		<th><?php echo __('Po Date'); ?></th>
		<th><?php echo __('Po Desc'); ?></th>
		<th><?php echo __('Pay Term Id'); ?></th>
		<th><?php echo __('Bill Id'); ?></th>
		<th><?php echo __('Del Id'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['PurchaseOrder'] as $purchaseOrder): ?>
		<tr>
			<td><?php echo $purchaseOrder['id']; ?></td>
			<td><?php echo $purchaseOrder['location_id']; ?></td>
			<td><?php echo $purchaseOrder['po_no']; ?></td>
			<td><?php echo $purchaseOrder['vendor_id']; ?></td>
			<td><?php echo $purchaseOrder['qtn_ref']; ?></td>
			<td><?php echo $purchaseOrder['qtn_date']; ?></td>
			<td><?php echo $purchaseOrder['po_date']; ?></td>
			<td><?php echo $purchaseOrder['po_desc']; ?></td>
			<td><?php echo $purchaseOrder['pay_term_id']; ?></td>
			<td><?php echo $purchaseOrder['bill_id']; ?></td>
			<td><?php echo $purchaseOrder['del_id']; ?></td>
			<td><?php echo $purchaseOrder['fin_year_id']; ?></td>
			<td><?php echo $purchaseOrder['approval']; ?></td>
			<td><?php echo $purchaseOrder['approval_register_id']; ?></td>
			<td><?php echo $purchaseOrder['creat_on']; ?></td>
			<td><?php echo $purchaseOrder['creat_by']; ?></td>
			<td><?php echo $purchaseOrder['mod_on']; ?></td>
			<td><?php echo $purchaseOrder['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'purchase_orders', 'action' => 'view', $purchaseOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'purchase_orders', 'action' => 'edit', $purchaseOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'purchase_orders', 'action' => 'delete', $purchaseOrder['id']), null, __('Are you sure you want to delete # %s?', $purchaseOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Quotations'); ?></h3>
	<?php if (!empty($location['Quotation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Quote No'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Rfq Id'); ?></th>
		<th><?php echo __('Quote Date'); ?></th>
		<th><?php echo __('Term Id'); ?></th>
		<th><?php echo __('Pay Term Id'); ?></th>
		<th><?php echo __('Sales Eng Id'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Estimation Id'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Quotation'] as $quotation): ?>
		<tr>
			<td><?php echo $quotation['id']; ?></td>
			<td><?php echo $quotation['location_id']; ?></td>
			<td><?php echo $quotation['quote_no']; ?></td>
			<td><?php echo $quotation['vendor_id']; ?></td>
			<td><?php echo $quotation['rfq_id']; ?></td>
			<td><?php echo $quotation['quote_date']; ?></td>
			<td><?php echo $quotation['term_id']; ?></td>
			<td><?php echo $quotation['pay_term_id']; ?></td>
			<td><?php echo $quotation['sales_eng_id']; ?></td>
			<td><?php echo $quotation['fin_year_id']; ?></td>
			<td><?php echo $quotation['estimation_id']; ?></td>
			<td><?php echo $quotation['approval']; ?></td>
			<td><?php echo $quotation['approval_register_id']; ?></td>
			<td><?php echo $quotation['creat_on']; ?></td>
			<td><?php echo $quotation['creat_by']; ?></td>
			<td><?php echo $quotation['mod_on']; ?></td>
			<td><?php echo $quotation['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'quotations', 'action' => 'view', $quotation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'quotations', 'action' => 'edit', $quotation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'quotations', 'action' => 'delete', $quotation['id']), null, __('Are you sure you want to delete # %s?', $quotation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Receipts'); ?></h3>
	<?php if (!empty($location['Receipt'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Receipt No'); ?></th>
		<th><?php echo __('Receipt Date'); ?></th>
		<th><?php echo __('Account From'); ?></th>
		<th><?php echo __('Desc'); ?></th>
		<th><?php echo __('Tot Value'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Receipt'] as $receipt): ?>
		<tr>
			<td><?php echo $receipt['id']; ?></td>
			<td><?php echo $receipt['location_id']; ?></td>
			<td><?php echo $receipt['receipt_no']; ?></td>
			<td><?php echo $receipt['receipt_date']; ?></td>
			<td><?php echo $receipt['account_from']; ?></td>
			<td><?php echo $receipt['desc']; ?></td>
			<td><?php echo $receipt['tot_value']; ?></td>
			<td><?php echo $receipt['fin_year_id']; ?></td>
			<td><?php echo $receipt['creat_on']; ?></td>
			<td><?php echo $receipt['creat_by']; ?></td>
			<td><?php echo $receipt['mod_on']; ?></td>
			<td><?php echo $receipt['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'receipts', 'action' => 'view', $receipt['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'receipts', 'action' => 'edit', $receipt['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'receipts', 'action' => 'delete', $receipt['id']), null, __('Are you sure you want to delete # %s?', $receipt['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Receipt'), array('controller' => 'receipts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sale Rfqs'); ?></h3>
	<?php if (!empty($location['SaleRfq'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Rfq No'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Rfq Date'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['SaleRfq'] as $saleRfq): ?>
		<tr>
			<td><?php echo $saleRfq['id']; ?></td>
			<td><?php echo $saleRfq['location_id']; ?></td>
			<td><?php echo $saleRfq['rfq_no']; ?></td>
			<td><?php echo $saleRfq['partner_id']; ?></td>
			<td><?php echo $saleRfq['rfq_date']; ?></td>
			<td><?php echo $saleRfq['fin_year_id']; ?></td>
			<td><?php echo $saleRfq['approval']; ?></td>
			<td><?php echo $saleRfq['approval_register_id']; ?></td>
			<td><?php echo $saleRfq['creat_on']; ?></td>
			<td><?php echo $saleRfq['creat_by']; ?></td>
			<td><?php echo $saleRfq['mod_on']; ?></td>
			<td><?php echo $saleRfq['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sale_rfqs', 'action' => 'view', $saleRfq['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sale_rfqs', 'action' => 'edit', $saleRfq['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sale_rfqs', 'action' => 'delete', $saleRfq['id']), null, __('Are you sure you want to delete # %s?', $saleRfq['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sale Rfq'), array('controller' => 'sale_rfqs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sales Invs'); ?></h3>
	<?php if (!empty($location['SalesInv'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Invoice No'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Sales Order Id'); ?></th>
		<th><?php echo __('Inv Date'); ?></th>
		<th><?php echo __('Inv Desc'); ?></th>
		<th><?php echo __('Tot Value'); ?></th>
		<th><?php echo __('Tot Taxes'); ?></th>
		<th><?php echo __('Tot Inv'); ?></th>
		<th><?php echo __('Del Chalan Id'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['SalesInv'] as $salesInv): ?>
		<tr>
			<td><?php echo $salesInv['id']; ?></td>
			<td><?php echo $salesInv['location_id']; ?></td>
			<td><?php echo $salesInv['invoice_no']; ?></td>
			<td><?php echo $salesInv['partner_id']; ?></td>
			<td><?php echo $salesInv['sales_order_id']; ?></td>
			<td><?php echo $salesInv['inv_date']; ?></td>
			<td><?php echo $salesInv['inv_desc']; ?></td>
			<td><?php echo $salesInv['tot_value']; ?></td>
			<td><?php echo $salesInv['tot_taxes']; ?></td>
			<td><?php echo $salesInv['tot_inv']; ?></td>
			<td><?php echo $salesInv['del_chalan_id']; ?></td>
			<td><?php echo $salesInv['fin_year_id']; ?></td>
			<td><?php echo $salesInv['creat_on']; ?></td>
			<td><?php echo $salesInv['creat_by']; ?></td>
			<td><?php echo $salesInv['mod_on']; ?></td>
			<td><?php echo $salesInv['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sales_invs', 'action' => 'view', $salesInv['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sales_invs', 'action' => 'edit', $salesInv['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sales_invs', 'action' => 'delete', $salesInv['id']), null, __('Are you sure you want to delete # %s?', $salesInv['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sales Inv'), array('controller' => 'sales_invs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sales Orders'); ?></h3>
	<?php if (!empty($location['SalesOrder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Sales Order No'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Quotation Id'); ?></th>
		<th><?php echo __('Po Date'); ?></th>
		<th><?php echo __('So Date'); ?></th>
		<th><?php echo __('Term Id'); ?></th>
		<th><?php echo __('Pay Term Id'); ?></th>
		<th><?php echo __('Sales Eng Id'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['SalesOrder'] as $salesOrder): ?>
		<tr>
			<td><?php echo $salesOrder['id']; ?></td>
			<td><?php echo $salesOrder['location_id']; ?></td>
			<td><?php echo $salesOrder['sales_order_no']; ?></td>
			<td><?php echo $salesOrder['vendor_id']; ?></td>
			<td><?php echo $salesOrder['quotation_id']; ?></td>
			<td><?php echo $salesOrder['po_date']; ?></td>
			<td><?php echo $salesOrder['so_date']; ?></td>
			<td><?php echo $salesOrder['term_id']; ?></td>
			<td><?php echo $salesOrder['pay_term_id']; ?></td>
			<td><?php echo $salesOrder['sales_eng_id']; ?></td>
			<td><?php echo $salesOrder['fin_year_id']; ?></td>
			<td><?php echo $salesOrder['approval']; ?></td>
			<td><?php echo $salesOrder['approval_register_id']; ?></td>
			<td><?php echo $salesOrder['creat_on']; ?></td>
			<td><?php echo $salesOrder['creat_by']; ?></td>
			<td><?php echo $salesOrder['mod_on']; ?></td>
			<td><?php echo $salesOrder['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sales_orders', 'action' => 'view', $salesOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sales_orders', 'action' => 'edit', $salesOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sales_orders', 'action' => 'delete', $salesOrder['id']), null, __('Are you sure you want to delete # %s?', $salesOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tax Accs'); ?></h3>
	<?php if (!empty($location['TaxAcc'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Tax Date'); ?></th>
		<th><?php echo __('Doc Type'); ?></th>
		<th><?php echo __('Doc Ref No'); ?></th>
		<th><?php echo __('Doc Ref Det Type'); ?></th>
		<th><?php echo __('Doc Ref Det No'); ?></th>
		<th><?php echo __('Tax Id'); ?></th>
		<th><?php echo __('Tax Cr'); ?></th>
		<th><?php echo __('Tax Db'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['TaxAcc'] as $taxAcc): ?>
		<tr>
			<td><?php echo $taxAcc['id']; ?></td>
			<td><?php echo $taxAcc['location_id']; ?></td>
			<td><?php echo $taxAcc['tax_date']; ?></td>
			<td><?php echo $taxAcc['doc_type']; ?></td>
			<td><?php echo $taxAcc['doc_ref_no']; ?></td>
			<td><?php echo $taxAcc['doc_ref_det_type']; ?></td>
			<td><?php echo $taxAcc['doc_ref_det_no']; ?></td>
			<td><?php echo $taxAcc['tax_id']; ?></td>
			<td><?php echo $taxAcc['tax_cr']; ?></td>
			<td><?php echo $taxAcc['tax_db']; ?></td>
			<td><?php echo $taxAcc['fin_year_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tax_accs', 'action' => 'view', $taxAcc['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tax_accs', 'action' => 'edit', $taxAcc['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tax_accs', 'action' => 'delete', $taxAcc['id']), null, __('Are you sure you want to delete # %s?', $taxAcc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tax Acc'), array('controller' => 'tax_accs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Wo Prod Det Men'); ?></h3>
	<?php if (!empty($location['WoProdDetMan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Resource Man Id'); ?></th>
		<th><?php echo __('Wo Prod Id'); ?></th>
		<th><?php echo __('Resource Wc'); ?></th>
		<th><?php echo __('Tot Qty'); ?></th>
		<th><?php echo __('Qty Reject'); ?></th>
		<th><?php echo __('Qty Rework'); ?></th>
		<th><?php echo __('Qty Accept'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['WoProdDetMan'] as $woProdDetMan): ?>
		<tr>
			<td><?php echo $woProdDetMan['id']; ?></td>
			<td><?php echo $woProdDetMan['location_id']; ?></td>
			<td><?php echo $woProdDetMan['resource_man_id']; ?></td>
			<td><?php echo $woProdDetMan['wo_prod_id']; ?></td>
			<td><?php echo $woProdDetMan['resource_wc']; ?></td>
			<td><?php echo $woProdDetMan['tot_qty']; ?></td>
			<td><?php echo $woProdDetMan['qty_reject']; ?></td>
			<td><?php echo $woProdDetMan['qty_rework']; ?></td>
			<td><?php echo $woProdDetMan['qty_accept']; ?></td>
			<td><?php echo $woProdDetMan['creat_on']; ?></td>
			<td><?php echo $woProdDetMan['creat_by']; ?></td>
			<td><?php echo $woProdDetMan['mod_on']; ?></td>
			<td><?php echo $woProdDetMan['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wo_prod_det_men', 'action' => 'view', $woProdDetMan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wo_prod_det_men', 'action' => 'edit', $woProdDetMan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wo_prod_det_men', 'action' => 'delete', $woProdDetMan['id']), null, __('Are you sure you want to delete # %s?', $woProdDetMan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wo Prod Det Man'), array('controller' => 'wo_prod_det_men', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Work Orders'); ?></h3>
	<?php if (!empty($location['WorkOrder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Wo No'); ?></th>
		<th><?php echo __('Sales Order Id'); ?></th>
		<th><?php echo __('Wo Date'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Wo Item Qty'); ?></th>
		<th><?php echo __('Mould Det Id'); ?></th>
		<th><?php echo __('So Det Id'); ?></th>
		<th><?php echo __('Order Complete'); ?></th>
		<th><?php echo __('Target Date'); ?></th>
		<th><?php echo __('Outsource'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['WorkOrder'] as $workOrder): ?>
		<tr>
			<td><?php echo $workOrder['id']; ?></td>
			<td><?php echo $workOrder['location_id']; ?></td>
			<td><?php echo $workOrder['wo_no']; ?></td>
			<td><?php echo $workOrder['sales_order_id']; ?></td>
			<td><?php echo $workOrder['wo_date']; ?></td>
			<td><?php echo $workOrder['item_id']; ?></td>
			<td><?php echo $workOrder['wo_item_qty']; ?></td>
			<td><?php echo $workOrder['mould_det_id']; ?></td>
			<td><?php echo $workOrder['so_det_id']; ?></td>
			<td><?php echo $workOrder['order_complete']; ?></td>
			<td><?php echo $workOrder['target_date']; ?></td>
			<td><?php echo $workOrder['outsource']; ?></td>
			<td><?php echo $workOrder['fin_year_id']; ?></td>
			<td><?php echo $workOrder['approval']; ?></td>
			<td><?php echo $workOrder['approval_register_id']; ?></td>
			<td><?php echo $workOrder['creat_on']; ?></td>
			<td><?php echo $workOrder['creat_by']; ?></td>
			<td><?php echo $workOrder['mod_on']; ?></td>
			<td><?php echo $workOrder['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'work_orders', 'action' => 'view', $workOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'work_orders', 'action' => 'edit', $workOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'work_orders', 'action' => 'delete', $workOrder['id']), null, __('Are you sure you want to delete # %s?', $workOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Workflows'); ?></h3>
	<?php if (!empty($location['Workflow'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Work  Flow'); ?></th>
		<th><?php echo __('Priority'); ?></th>
		<th><?php echo __('Desc'); ?></th>
		<th><?php echo __('Wo Suffix'); ?></th>
		<th><?php echo __('Flow Active'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Workflow'] as $workflow): ?>
		<tr>
			<td><?php echo $workflow['id']; ?></td>
			<td><?php echo $workflow['location_id']; ?></td>
			<td><?php echo $workflow['work _flow']; ?></td>
			<td><?php echo $workflow['priority']; ?></td>
			<td><?php echo $workflow['desc']; ?></td>
			<td><?php echo $workflow['wo_suffix']; ?></td>
			<td><?php echo $workflow['flow_active']; ?></td>
			<td><?php echo $workflow['creat_on']; ?></td>
			<td><?php echo $workflow['creat_by']; ?></td>
			<td><?php echo $workflow['mod_on']; ?></td>
			<td><?php echo $workflow['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'workflows', 'action' => 'view', $workflow['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'workflows', 'action' => 'edit', $workflow['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'workflows', 'action' => 'delete', $workflow['id']), null, __('Are you sure you want to delete # %s?', $workflow['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Workflow'), array('controller' => 'workflows', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
