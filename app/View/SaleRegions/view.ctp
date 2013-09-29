<div class="saleRegions view">
<h2><?php  echo __('Sale Region'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($saleRegion['SaleRegion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Region'); ?></dt>
		<dd>
			<?php echo h($saleRegion['SaleRegion']['sale_region']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($saleRegion['SaleRegion']['desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($saleRegion['SaleRegion']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($saleRegion['SaleRegion']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($saleRegion['SaleRegion']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($saleRegion['SaleRegion']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sale Region'), array('action' => 'edit', $saleRegion['SaleRegion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sale Region'), array('action' => 'delete', $saleRegion['SaleRegion']['id']), null, __('Are you sure you want to delete # %s?', $saleRegion['SaleRegion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Regions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Region'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Agents'), array('controller' => 'sale_agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Agent'), array('controller' => 'sale_agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Engs'), array('controller' => 'sale_engs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Eng'), array('controller' => 'sale_engs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sale Agents'); ?></h3>
	<?php if (!empty($saleRegion['SaleAgent'])): ?>
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
		foreach ($saleRegion['SaleAgent'] as $saleAgent): ?>
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
	<h3><?php echo __('Related Sale Engs'); ?></h3>
	<?php if (!empty($saleRegion['SaleEng'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Sale Region Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($saleRegion['SaleEng'] as $saleEng): ?>
		<tr>
			<td><?php echo $saleEng['id']; ?></td>
			<td><?php echo $saleEng['employee_id']; ?></td>
			<td><?php echo $saleEng['sale_region_id']; ?></td>
			<td><?php echo $saleEng['creat_on']; ?></td>
			<td><?php echo $saleEng['creat_by']; ?></td>
			<td><?php echo $saleEng['mod_on']; ?></td>
			<td><?php echo $saleEng['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sale_engs', 'action' => 'view', $saleEng['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sale_engs', 'action' => 'edit', $saleEng['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sale_engs', 'action' => 'delete', $saleEng['id']), null, __('Are you sure you want to delete # %s?', $saleEng['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sale Eng'), array('controller' => 'sale_engs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
