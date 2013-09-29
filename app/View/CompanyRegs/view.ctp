<div class="companyRegs view">
<h2><?php  echo __('Company Reg'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add 1'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['add_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add 2'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['add_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['post']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['district']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companyReg['State']['name'], array('controller' => 'states', 'action' => 'view', $companyReg['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companyReg['Country']['name'], array('controller' => 'countries', 'action' => 'view', $companyReg['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pin Code'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['pin_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel 1'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['tel_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel 2'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['tel_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['web']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cont Name'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['cont_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cont Tel 1'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['cont_tel_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cont Email'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['cont_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vat Tin'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['vat_tin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cst No'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['cst_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exc No'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['exc_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serv Tax No'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['serv_tax_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Name'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['bank_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Branch'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['bank_branch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ac No'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['ac_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Ifsc'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['bank_ifsc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($companyReg['CompanyReg']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Reg'), array('action' => 'edit', $companyReg['CompanyReg']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Reg'), array('action' => 'delete', $companyReg['CompanyReg']['id']), null, __('Are you sure you want to delete # %s?', $companyReg['CompanyReg']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Regs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Reg'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
