<div class="countries view">
<h2><?php  echo __('Country'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($country['Country']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Code'); ?></dt>
		<dd>
			<?php echo h($country['Country']['country_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($country['Country']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Name'); ?></dt>
		<dd>
			<?php echo h($country['Country']['country_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iso3'); ?></dt>
		<dd>
			<?php echo h($country['Country']['iso3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numcode'); ?></dt>
		<dd>
			<?php echo h($country['Country']['numcode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Country'), array('action' => 'edit', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Country'), array('action' => 'delete', $country['Country']['id']), null, __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Company Regs'); ?></h3>
	<?php if (!empty($country['CompanyReg'])): ?>
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
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Pin Code'); ?></th>
		<th><?php echo __('Tel 1'); ?></th>
		<th><?php echo __('Tel 2'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Web'); ?></th>
		<th><?php echo __('Cont Name'); ?></th>
		<th><?php echo __('Cont Tel 1'); ?></th>
		<th><?php echo __('Cont Email'); ?></th>
		<th><?php echo __('Vat Tin'); ?></th>
		<th><?php echo __('Cst No'); ?></th>
		<th><?php echo __('Exc No'); ?></th>
		<th><?php echo __('Serv Tax No'); ?></th>
		<th><?php echo __('Bank Name'); ?></th>
		<th><?php echo __('Bank Branch'); ?></th>
		<th><?php echo __('Ac No'); ?></th>
		<th><?php echo __('Bank Ifsc'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['CompanyReg'] as $companyReg): ?>
		<tr>
			<td><?php echo $companyReg['id']; ?></td>
			<td><?php echo $companyReg['name']; ?></td>
			<td><?php echo $companyReg['add_1']; ?></td>
			<td><?php echo $companyReg['add_2']; ?></td>
			<td><?php echo $companyReg['post']; ?></td>
			<td><?php echo $companyReg['city']; ?></td>
			<td><?php echo $companyReg['district']; ?></td>
			<td><?php echo $companyReg['state_id']; ?></td>
			<td><?php echo $companyReg['country_id']; ?></td>
			<td><?php echo $companyReg['pin_code']; ?></td>
			<td><?php echo $companyReg['tel_1']; ?></td>
			<td><?php echo $companyReg['tel_2']; ?></td>
			<td><?php echo $companyReg['fax']; ?></td>
			<td><?php echo $companyReg['email']; ?></td>
			<td><?php echo $companyReg['web']; ?></td>
			<td><?php echo $companyReg['cont_name']; ?></td>
			<td><?php echo $companyReg['cont_tel_1']; ?></td>
			<td><?php echo $companyReg['cont_email']; ?></td>
			<td><?php echo $companyReg['vat_tin']; ?></td>
			<td><?php echo $companyReg['cst_no']; ?></td>
			<td><?php echo $companyReg['exc_no']; ?></td>
			<td><?php echo $companyReg['serv_tax_no']; ?></td>
			<td><?php echo $companyReg['bank_name']; ?></td>
			<td><?php echo $companyReg['bank_branch']; ?></td>
			<td><?php echo $companyReg['ac_no']; ?></td>
			<td><?php echo $companyReg['bank_ifsc']; ?></td>
			<td><?php echo $companyReg['creat_on']; ?></td>
			<td><?php echo $companyReg['creat_by']; ?></td>
			<td><?php echo $companyReg['mod_on']; ?></td>
			<td><?php echo $companyReg['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'company_regs', 'action' => 'view', $companyReg['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'company_regs', 'action' => 'edit', $companyReg['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'company_regs', 'action' => 'delete', $companyReg['id']), null, __('Are you sure you want to delete # %s?', $companyReg['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company Reg'), array('controller' => 'company_regs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($country['Employee'])): ?>
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
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Pin Code'); ?></th>
		<th><?php echo __('Tel 1'); ?></th>
		<th><?php echo __('Tel 2'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Web'); ?></th>
		<th><?php echo __('Joined Date'); ?></th>
		<th><?php echo __('Terminated Date'); ?></th>
		<th><?php echo __('Term Reason'); ?></th>
		<th><?php echo __('Bank Name'); ?></th>
		<th><?php echo __('Bank Branch'); ?></th>
		<th><?php echo __('Ac No'); ?></th>
		<th><?php echo __('Bank Ifsc'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['name']; ?></td>
			<td><?php echo $employee['add_1']; ?></td>
			<td><?php echo $employee['add_2']; ?></td>
			<td><?php echo $employee['post']; ?></td>
			<td><?php echo $employee['city']; ?></td>
			<td><?php echo $employee['district']; ?></td>
			<td><?php echo $employee['state_id']; ?></td>
			<td><?php echo $employee['country_id']; ?></td>
			<td><?php echo $employee['pin_code']; ?></td>
			<td><?php echo $employee['tel_1']; ?></td>
			<td><?php echo $employee['tel_2']; ?></td>
			<td><?php echo $employee['fax']; ?></td>
			<td><?php echo $employee['email']; ?></td>
			<td><?php echo $employee['web']; ?></td>
			<td><?php echo $employee['joined_date']; ?></td>
			<td><?php echo $employee['terminated_date']; ?></td>
			<td><?php echo $employee['term_reason']; ?></td>
			<td><?php echo $employee['bank_name']; ?></td>
			<td><?php echo $employee['bank_branch']; ?></td>
			<td><?php echo $employee['ac_no']; ?></td>
			<td><?php echo $employee['bank_ifsc']; ?></td>
			<td><?php echo $employee['creat_on']; ?></td>
			<td><?php echo $employee['creat_by']; ?></td>
			<td><?php echo $employee['mod_on']; ?></td>
			<td><?php echo $employee['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employees', 'action' => 'delete', $employee['id']), null, __('Are you sure you want to delete # %s?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Locations'); ?></h3>
	<?php if (!empty($country['Location'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Loc Name'); ?></th>
		<th><?php echo __('Name'); ?></th>
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
		<th><?php echo __('Ven Cont'); ?></th>
		<th><?php echo __('Cont Tel 1'); ?></th>
		<th><?php echo __('Cont Email'); ?></th>
		<th><?php echo __('Vat Tin'); ?></th>
		<th><?php echo __('Cst No'); ?></th>
		<th><?php echo __('Exc No'); ?></th>
		<th><?php echo __('Serv Tax No'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Location'] as $location): ?>
		<tr>
			<td><?php echo $location['id']; ?></td>
			<td><?php echo $location['loc_name']; ?></td>
			<td><?php echo $location['name']; ?></td>
			<td><?php echo $location['add_1']; ?></td>
			<td><?php echo $location['add_2']; ?></td>
			<td><?php echo $location['post']; ?></td>
			<td><?php echo $location['city']; ?></td>
			<td><?php echo $location['district']; ?></td>
			<td><?php echo $location['state_id']; ?></td>
			<td><?php echo $location['country_id']; ?></td>
			<td><?php echo $location['pin_code']; ?></td>
			<td><?php echo $location['tel_1']; ?></td>
			<td><?php echo $location['tel_2']; ?></td>
			<td><?php echo $location['fax']; ?></td>
			<td><?php echo $location['email']; ?></td>
			<td><?php echo $location['web']; ?></td>
			<td><?php echo $location['ven_cont']; ?></td>
			<td><?php echo $location['cont_tel_1']; ?></td>
			<td><?php echo $location['cont_email']; ?></td>
			<td><?php echo $location['vat_tin']; ?></td>
			<td><?php echo $location['cst_no']; ?></td>
			<td><?php echo $location['exc_no']; ?></td>
			<td><?php echo $location['serv_tax_no']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'locations', 'action' => 'view', $location['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'locations', 'action' => 'edit', $location['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'locations', 'action' => 'delete', $location['id']), null, __('Are you sure you want to delete # %s?', $location['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Partner Deliveries'); ?></h3>
	<?php if (!empty($country['PartnerDelivery'])): ?>
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
		foreach ($country['PartnerDelivery'] as $partnerDelivery): ?>
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
