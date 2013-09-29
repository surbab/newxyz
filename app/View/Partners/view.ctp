<div class="partners view">
<h2><?php  echo __('Partner'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add 1'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['add_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add 2'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['add_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['post']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['district']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($partner['State']['name'], array('controller' => 'states', 'action' => 'view', $partner['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($partner['Country']['name'], array('controller' => 'countries', 'action' => 'view', $partner['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pin Code'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['pin_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel 1'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['tel_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel 2'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['tel_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['web']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner Contact'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['partner_contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner Tel 1'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['partner_tel_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner Email'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['partner_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vat Tin'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['vat_tin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cst No'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['cst_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exc No'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['exc_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serv Tax No'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['serv_tax_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Name'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['bank_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Branch'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['bank_branch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ac No'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['ac_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Ifsc'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['bank_ifsc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Req'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['approval_req']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Register'); ?></dt>
		<dd>
			<?php echo $this->Html->link($partner['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $partner['ApprovalRegister']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['cust']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sup'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['sup']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agent'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['agent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Partner'), array('action' => 'edit', $partner['Partner']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Partner'), array('action' => 'delete', $partner['Partner']['id']), null, __('Are you sure you want to delete # %s?', $partner['Partner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Del Chalans'); ?></h3>
	<?php if (!empty($partner['DelChalan'])): ?>
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
		foreach ($partner['DelChalan'] as $delChalan): ?>
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
	<h3><?php echo __('Related Partner Deliveries'); ?></h3>
	<?php if (!empty($partner['PartnerDelivery'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Add 1'); ?></th>
		<th><?php echo __('Add 2'); ?></th>
		<th><?php echo __('Post'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('District'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Pin Code'); ?></th>
		<th><?php echo __('Tel 1'); ?></th>
		<th><?php echo __('Tel 2'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Web'); ?></th>
		<th><?php echo __('Vat Tin'); ?></th>
		<th><?php echo __('Cst No'); ?></th>
		<th><?php echo __('Exc No'); ?></th>
		<th><?php echo __('Serv Tax No'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($partner['PartnerDelivery'] as $partnerDelivery): ?>
		<tr>
			<td><?php echo $partnerDelivery['id']; ?></td>
			<td><?php echo $partnerDelivery['partner_id']; ?></td>
			<td><?php echo $partnerDelivery['add_1']; ?></td>
			<td><?php echo $partnerDelivery['add_2']; ?></td>
			<td><?php echo $partnerDelivery['post']; ?></td>
			<td><?php echo $partnerDelivery['city']; ?></td>
			<td><?php echo $partnerDelivery['district']; ?></td>
			<td><?php echo $partnerDelivery['state_id']; ?></td>
			<td><?php echo $partnerDelivery['country_id']; ?></td>
			<td><?php echo $partnerDelivery['pin_code']; ?></td>
			<td><?php echo $partnerDelivery['tel_1']; ?></td>
			<td><?php echo $partnerDelivery['tel_2']; ?></td>
			<td><?php echo $partnerDelivery['fax']; ?></td>
			<td><?php echo $partnerDelivery['email']; ?></td>
			<td><?php echo $partnerDelivery['web']; ?></td>
			<td><?php echo $partnerDelivery['vat_tin']; ?></td>
			<td><?php echo $partnerDelivery['cst_no']; ?></td>
			<td><?php echo $partnerDelivery['exc_no']; ?></td>
			<td><?php echo $partnerDelivery['serv_tax_no']; ?></td>
			<td><?php echo $partnerDelivery['creat_on']; ?></td>
			<td><?php echo $partnerDelivery['creat_by']; ?></td>
			<td><?php echo $partnerDelivery['mod_on']; ?></td>
			<td><?php echo $partnerDelivery['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'partner_deliveries', 'action' => 'view', $partnerDelivery['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'partner_deliveries', 'action' => 'edit', $partnerDelivery['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'partner_deliveries', 'action' => 'delete', $partnerDelivery['id']), null, __('Are you sure you want to delete # %s?', $partnerDelivery['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Partner Delivery'), array('controller' => 'partner_deliveries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sale Agents'); ?></h3>
	<?php if (!empty($partner['SaleAgent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Sale Region Id'); ?></th>
		<th><?php echo __('Sale Comm Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($partner['SaleAgent'] as $saleAgent): ?>
		<tr>
			<td><?php echo $saleAgent['id']; ?></td>
			<td><?php echo $saleAgent['partner_id']; ?></td>
			<td><?php echo $saleAgent['sale_region_id']; ?></td>
			<td><?php echo $saleAgent['sale_comm_id']; ?></td>
			<td><?php echo $saleAgent['creat_on']; ?></td>
			<td><?php echo $saleAgent['creat_by']; ?></td>
			<td><?php echo $saleAgent['mod_on']; ?></td>
			<td><?php echo $saleAgent['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sale_agents', 'action' => 'view', $saleAgent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sale_agents', 'action' => 'edit', $saleAgent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sale_agents', 'action' => 'delete', $saleAgent['id']), null, __('Are you sure you want to delete # %s?', $saleAgent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sale Agent'), array('controller' => 'sale_agents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sale Rfqs'); ?></h3>
	<?php if (!empty($partner['SaleRfq'])): ?>
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
		foreach ($partner['SaleRfq'] as $saleRfq): ?>
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
	<h3><?php echo __('Related Sale Invs'); ?></h3>
	<?php if (!empty($partner['SaleInv'])): ?>
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
		foreach ($partner['SaleInv'] as $saleInv): ?>
		<tr>
			<td><?php echo $saleInv['id']; ?></td>
			<td><?php echo $saleInv['location_id']; ?></td>
			<td><?php echo $saleInv['invoice_no']; ?></td>
			<td><?php echo $saleInv['partner_id']; ?></td>
			<td><?php echo $saleInv['sales_order_id']; ?></td>
			<td><?php echo $saleInv['inv_date']; ?></td>
			<td><?php echo $saleInv['inv_desc']; ?></td>
			<td><?php echo $saleInv['tot_value']; ?></td>
			<td><?php echo $saleInv['tot_taxes']; ?></td>
			<td><?php echo $saleInv['tot_inv']; ?></td>
			<td><?php echo $saleInv['del_chalan_id']; ?></td>
			<td><?php echo $saleInv['fin_year_id']; ?></td>
			<td><?php echo $saleInv['creat_on']; ?></td>
			<td><?php echo $saleInv['creat_by']; ?></td>
			<td><?php echo $saleInv['mod_on']; ?></td>
			<td><?php echo $saleInv['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sale_invs', 'action' => 'view', $saleInv['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sale_invs', 'action' => 'edit', $saleInv['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sale_invs', 'action' => 'delete', $saleInv['id']), null, __('Are you sure you want to delete # %s?', $saleInv['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sale Inv'), array('controller' => 'sale_invs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
