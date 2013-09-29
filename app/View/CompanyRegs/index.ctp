<div class="companyRegs index">
	<h2><?php echo __('Company Regs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('add_1'); ?></th>
			<th><?php echo $this->Paginator->sort('add_2'); ?></th>
			<th><?php echo $this->Paginator->sort('post'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pin_code'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_1'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_2'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('web'); ?></th>
			<th><?php echo $this->Paginator->sort('cont_name'); ?></th>
			<th><?php echo $this->Paginator->sort('cont_tel_1'); ?></th>
			<th><?php echo $this->Paginator->sort('cont_email'); ?></th>
			<th><?php echo $this->Paginator->sort('vat_tin'); ?></th>
			<th><?php echo $this->Paginator->sort('cst_no'); ?></th>
			<th><?php echo $this->Paginator->sort('exc_no'); ?></th>
			<th><?php echo $this->Paginator->sort('serv_tax_no'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_name'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_branch'); ?></th>
			<th><?php echo $this->Paginator->sort('ac_no'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_ifsc'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($companyRegs as $companyReg): ?>
	<tr>
		<td><?php echo h($companyReg['CompanyReg']['id']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['name']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['add_1']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['add_2']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['post']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['city']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['district']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($companyReg['State']['name'], array('controller' => 'states', 'action' => 'view', $companyReg['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($companyReg['Country']['name'], array('controller' => 'countries', 'action' => 'view', $companyReg['Country']['id'])); ?>
		</td>
		<td><?php echo h($companyReg['CompanyReg']['pin_code']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['tel_1']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['tel_2']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['fax']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['email']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['web']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['cont_name']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['cont_tel_1']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['cont_email']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['vat_tin']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['cst_no']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['exc_no']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['serv_tax_no']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['bank_name']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['bank_branch']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['ac_no']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['bank_ifsc']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($companyReg['CompanyReg']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companyReg['CompanyReg']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companyReg['CompanyReg']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companyReg['CompanyReg']['id']), null, __('Are you sure you want to delete # %s?', $companyReg['CompanyReg']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Company Reg'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
