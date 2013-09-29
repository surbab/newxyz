<div class="approvalRegisters view">
<h2><?php  echo __('Approval Register'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($approvalRegister['ApprovalRegister']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doc Id'); ?></dt>
		<dd>
			<?php echo h($approvalRegister['ApprovalRegister']['doc_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Table Name'); ?></dt>
		<dd>
			<?php echo h($approvalRegister['ApprovalRegister']['table_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($approvalRegister['User']['id'], array('controller' => 'users', 'action' => 'view', $approvalRegister['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved'); ?></dt>
		<dd>
			<?php echo h($approvalRegister['ApprovalRegister']['approved']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Approval Register'), array('action' => 'edit', $approvalRegister['ApprovalRegister']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Approval Register'), array('action' => 'delete', $approvalRegister['ApprovalRegister']['id']), null, __('Are you sure you want to delete # %s?', $approvalRegister['ApprovalRegister']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Credit Limits'), array('controller' => 'credit_limits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Limit'), array('controller' => 'credit_limits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Register Dets'), array('controller' => 'approval_register_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register Det'), array('controller' => 'approval_register_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Boms'), array('controller' => 'eng_boms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom'), array('controller' => 'eng_boms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimations'), array('controller' => 'estimations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimation'), array('controller' => 'estimations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grn Dets'), array('controller' => 'grn_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn Det'), array('controller' => 'grn_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Issues'), array('controller' => 'mat_issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Issue'), array('controller' => 'mat_issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Entries'), array('controller' => 'pur_inv_entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Entry'), array('controller' => 'pur_inv_entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotations'), array('controller' => 'quotations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Rfqs'), array('controller' => 'sale_rfqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq'), array('controller' => 'sale_rfqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('controller' => 'sales_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List So Dets'), array('controller' => 'so_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('controller' => 'work_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Credit Limits'); ?></h3>
	<?php if (!empty($approvalRegister['CreditLimit'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $approvalRegister['CreditLimit']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Partner ID'); ?></dt>
		<dd>
	<?php echo $approvalRegister['CreditLimit']['partner_ID']; ?>
&nbsp;</dd>
		<dt><?php echo __('Credit Limit'); ?></dt>
		<dd>
	<?php echo $approvalRegister['CreditLimit']['credit_limit']; ?>
&nbsp;</dd>
		<dt><?php echo __('Approval'); ?></dt>
		<dd>
	<?php echo $approvalRegister['CreditLimit']['approval']; ?>
&nbsp;</dd>
		<dt><?php echo __('Approval Register Id'); ?></dt>
		<dd>
	<?php echo $approvalRegister['CreditLimit']['approval_register_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
	<?php echo $approvalRegister['CreditLimit']['creat_on']; ?>
&nbsp;</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
	<?php echo $approvalRegister['CreditLimit']['creat_by']; ?>
&nbsp;</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
	<?php echo $approvalRegister['CreditLimit']['mod_on']; ?>
&nbsp;</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
	<?php echo $approvalRegister['CreditLimit']['mod_by']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Credit Limit'), array('controller' => 'credit_limits', 'action' => 'edit', $approvalRegister['CreditLimit']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Approval Register Dets'); ?></h3>
	<?php if (!empty($approvalRegister['ApprovalRegisterDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Approved'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Approval Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($approvalRegister['ApprovalRegisterDet'] as $approvalRegisterDet): ?>
		<tr>
			<td><?php echo $approvalRegisterDet['id']; ?></td>
			<td><?php echo $approvalRegisterDet['approval_register_id']; ?></td>
			<td><?php echo $approvalRegisterDet['employee_id']; ?></td>
			<td><?php echo $approvalRegisterDet['approved']; ?></td>
			<td><?php echo $approvalRegisterDet['comment']; ?></td>
			<td><?php echo $approvalRegisterDet['approval_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'approval_register_dets', 'action' => 'view', $approvalRegisterDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'approval_register_dets', 'action' => 'edit', $approvalRegisterDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'approval_register_dets', 'action' => 'delete', $approvalRegisterDet['id']), null, __('Are you sure you want to delete # %s?', $approvalRegisterDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Approval Register Det'), array('controller' => 'approval_register_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Eng Boms'); ?></h3>
	<?php if (!empty($approvalRegister['EngBom'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Code Id'); ?></th>
		<th><?php echo __('Bom Rev'); ?></th>
		<th><?php echo __('Bom Rev Date'); ?></th>
		<th><?php echo __('Bom Desc'); ?></th>
		<th><?php echo __('Bom Activ'); ?></th>
		<th><?php echo __('Eng Chang Note'); ?></th>
		<th><?php echo __('Eng Chang Desc'); ?></th>
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
		foreach ($approvalRegister['EngBom'] as $engBom): ?>
		<tr>
			<td><?php echo $engBom['id']; ?></td>
			<td><?php echo $engBom['item_code_id']; ?></td>
			<td><?php echo $engBom['bom_rev']; ?></td>
			<td><?php echo $engBom['bom_rev_date']; ?></td>
			<td><?php echo $engBom['bom_desc']; ?></td>
			<td><?php echo $engBom['bom_activ']; ?></td>
			<td><?php echo $engBom['eng_chang_note']; ?></td>
			<td><?php echo $engBom['eng_chang_desc']; ?></td>
			<td><?php echo $engBom['approval']; ?></td>
			<td><?php echo $engBom['approval_register_id']; ?></td>
			<td><?php echo $engBom['creat_on']; ?></td>
			<td><?php echo $engBom['creat_by']; ?></td>
			<td><?php echo $engBom['mod_on']; ?></td>
			<td><?php echo $engBom['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'eng_boms', 'action' => 'view', $engBom['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'eng_boms', 'action' => 'edit', $engBom['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'eng_boms', 'action' => 'delete', $engBom['id']), null, __('Are you sure you want to delete # %s?', $engBom['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Eng Bom'), array('controller' => 'eng_boms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Estimations'); ?></h3>
	<?php if (!empty($approvalRegister['Estimation'])): ?>
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
		foreach ($approvalRegister['Estimation'] as $estimation): ?>
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
	<h3><?php echo __('Related Grn Dets'); ?></h3>
	<?php if (!empty($approvalRegister['GrnDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Grn Id'); ?></th>
		<th><?php echo __('Po Det Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Tot Price'); ?></th>
		<th><?php echo __('Tax Id'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($approvalRegister['GrnDet'] as $grnDet): ?>
		<tr>
			<td><?php echo $grnDet['id']; ?></td>
			<td><?php echo $grnDet['grn_id']; ?></td>
			<td><?php echo $grnDet['po_det_id']; ?></td>
			<td><?php echo $grnDet['qty']; ?></td>
			<td><?php echo $grnDet['price']; ?></td>
			<td><?php echo $grnDet['tot_price']; ?></td>
			<td><?php echo $grnDet['tax_id']; ?></td>
			<td><?php echo $grnDet['approval']; ?></td>
			<td><?php echo $grnDet['approval_register_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grn_dets', 'action' => 'view', $grnDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grn_dets', 'action' => 'edit', $grnDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grn_dets', 'action' => 'delete', $grnDet['id']), null, __('Are you sure you want to delete # %s?', $grnDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grn Det'), array('controller' => 'grn_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mat Issues'); ?></h3>
	<?php if (!empty($approvalRegister['MatIssue'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Mat Issue No'); ?></th>
		<th><?php echo __('Wo No'); ?></th>
		<th><?php echo __('Issue Date'); ?></th>
		<th><?php echo __('Issue Desc'); ?></th>
		<th><?php echo __('Issue Location'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($approvalRegister['MatIssue'] as $matIssue): ?>
		<tr>
			<td><?php echo $matIssue['id']; ?></td>
			<td><?php echo $matIssue['location']; ?></td>
			<td><?php echo $matIssue['mat_issue_no']; ?></td>
			<td><?php echo $matIssue['wo_no']; ?></td>
			<td><?php echo $matIssue['issue_date']; ?></td>
			<td><?php echo $matIssue['issue_desc']; ?></td>
			<td><?php echo $matIssue['issue_location']; ?></td>
			<td><?php echo $matIssue['approval']; ?></td>
			<td><?php echo $matIssue['approval_register_id']; ?></td>
			<td><?php echo $matIssue['fin_year_id']; ?></td>
			<td><?php echo $matIssue['creat_on']; ?></td>
			<td><?php echo $matIssue['creat_by']; ?></td>
			<td><?php echo $matIssue['mod_on']; ?></td>
			<td><?php echo $matIssue['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mat_issues', 'action' => 'view', $matIssue['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mat_issues', 'action' => 'edit', $matIssue['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mat_issues', 'action' => 'delete', $matIssue['id']), null, __('Are you sure you want to delete # %s?', $matIssue['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mat Issue'), array('controller' => 'mat_issues', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Partners'); ?></h3>
	<?php if (!empty($approvalRegister['Partner'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Add 1'); ?></th>
		<th><?php echo __('Add 2'); ?></th>
		<th><?php echo __('Post'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('District'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Country ID'); ?></th>
		<th><?php echo __('Pin Code'); ?></th>
		<th><?php echo __('Tel 1'); ?></th>
		<th><?php echo __('Tel 2'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Web'); ?></th>
		<th><?php echo __('Partner Contact'); ?></th>
		<th><?php echo __('Partner Tel 1'); ?></th>
		<th><?php echo __('Partner Email'); ?></th>
		<th><?php echo __('Vat Tin'); ?></th>
		<th><?php echo __('Cst No'); ?></th>
		<th><?php echo __('Exc No'); ?></th>
		<th><?php echo __('Serv Tax No'); ?></th>
		<th><?php echo __('Bank Name'); ?></th>
		<th><?php echo __('Bank Branch'); ?></th>
		<th><?php echo __('Ac No'); ?></th>
		<th><?php echo __('Bank Ifsc'); ?></th>
		<th><?php echo __('Approval Req'); ?></th>
		<th><?php echo __('Approved'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Cust'); ?></th>
		<th><?php echo __('Sup'); ?></th>
		<th><?php echo __('Agent'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($approvalRegister['Partner'] as $partner): ?>
		<tr>
			<td><?php echo $partner['id']; ?></td>
			<td><?php echo $partner['name']; ?></td>
			<td><?php echo $partner['add_1']; ?></td>
			<td><?php echo $partner['add_2']; ?></td>
			<td><?php echo $partner['post']; ?></td>
			<td><?php echo $partner['city']; ?></td>
			<td><?php echo $partner['district']; ?></td>
			<td><?php echo $partner['state_id']; ?></td>
			<td><?php echo $partner['country_ID']; ?></td>
			<td><?php echo $partner['pin_code']; ?></td>
			<td><?php echo $partner['tel_1']; ?></td>
			<td><?php echo $partner['tel_2']; ?></td>
			<td><?php echo $partner['fax']; ?></td>
			<td><?php echo $partner['email']; ?></td>
			<td><?php echo $partner['web']; ?></td>
			<td><?php echo $partner['partner_contact']; ?></td>
			<td><?php echo $partner['partner_tel_1']; ?></td>
			<td><?php echo $partner['partner_email']; ?></td>
			<td><?php echo $partner['vat_tin']; ?></td>
			<td><?php echo $partner['cst_no']; ?></td>
			<td><?php echo $partner['exc_no']; ?></td>
			<td><?php echo $partner['serv_tax_no']; ?></td>
			<td><?php echo $partner['bank_name']; ?></td>
			<td><?php echo $partner['bank_branch']; ?></td>
			<td><?php echo $partner['ac_no']; ?></td>
			<td><?php echo $partner['bank_ifsc']; ?></td>
			<td><?php echo $partner['approval_req']; ?></td>
			<td><?php echo $partner['approved']; ?></td>
			<td><?php echo $partner['approval_register_id']; ?></td>
			<td><?php echo $partner['cust']; ?></td>
			<td><?php echo $partner['sup']; ?></td>
			<td><?php echo $partner['agent']; ?></td>
			<td><?php echo $partner['creat_on']; ?></td>
			<td><?php echo $partner['creat_by']; ?></td>
			<td><?php echo $partner['mod_on']; ?></td>
			<td><?php echo $partner['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'partners', 'action' => 'view', $partner['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'partners', 'action' => 'edit', $partner['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'partners', 'action' => 'delete', $partner['id']), null, __('Are you sure you want to delete # %s?', $partner['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pur Inv Entries'); ?></h3>
	<?php if (!empty($approvalRegister['PurInvEntry'])): ?>
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
		foreach ($approvalRegister['PurInvEntry'] as $purInvEntry): ?>
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
	<?php if (!empty($approvalRegister['PurchaseOrder'])): ?>
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
		foreach ($approvalRegister['PurchaseOrder'] as $purchaseOrder): ?>
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
	<?php if (!empty($approvalRegister['Quotation'])): ?>
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
		foreach ($approvalRegister['Quotation'] as $quotation): ?>
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
	<h3><?php echo __('Related Sale Rfqs'); ?></h3>
	<?php if (!empty($approvalRegister['SaleRfq'])): ?>
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
		foreach ($approvalRegister['SaleRfq'] as $saleRfq): ?>
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
	<h3><?php echo __('Related Sales Orders'); ?></h3>
	<?php if (!empty($approvalRegister['SalesOrder'])): ?>
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
		foreach ($approvalRegister['SalesOrder'] as $salesOrder): ?>
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
	<h3><?php echo __('Related So Dets'); ?></h3>
	<?php if (!empty($approvalRegister['SoDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sales Order Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Uom Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Tot Price'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Tax Comb Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($approvalRegister['SoDet'] as $soDet): ?>
		<tr>
			<td><?php echo $soDet['id']; ?></td>
			<td><?php echo $soDet['sales_order_id']; ?></td>
			<td><?php echo $soDet['item_id']; ?></td>
			<td><?php echo $soDet['uom_id']; ?></td>
			<td><?php echo $soDet['qty']; ?></td>
			<td><?php echo $soDet['price']; ?></td>
			<td><?php echo $soDet['tot_price']; ?></td>
			<td><?php echo $soDet['approval']; ?></td>
			<td><?php echo $soDet['approval_register_id']; ?></td>
			<td><?php echo $soDet['tax_comb_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'so_dets', 'action' => 'view', $soDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'so_dets', 'action' => 'edit', $soDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'so_dets', 'action' => 'delete', $soDet['id']), null, __('Are you sure you want to delete # %s?', $soDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Work Orders'); ?></h3>
	<?php if (!empty($approvalRegister['WorkOrder'])): ?>
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
		foreach ($approvalRegister['WorkOrder'] as $workOrder): ?>
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
