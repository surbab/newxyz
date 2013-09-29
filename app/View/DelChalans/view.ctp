<div class="delChalans view">
<h2><?php  echo __('Del Chalan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($delChalan['DelChalan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($delChalan['Location']['name'], array('controller' => 'locations', 'action' => 'view', $delChalan['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Chal No'); ?></dt>
		<dd>
			<?php echo h($delChalan['DelChalan']['del_chal_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($delChalan['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $delChalan['Partner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sales Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($delChalan['SalesOrder']['id'], array('controller' => 'sales_orders', 'action' => 'view', $delChalan['SalesOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delv Date'); ?></dt>
		<dd>
			<?php echo h($delChalan['DelChalan']['delv_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Desc'); ?></dt>
		<dd>
			<?php echo h($delChalan['DelChalan']['del_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Approval'); ?></dt>
		<dd>
			<?php echo h($delChalan['DelChalan']['del_approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($delChalan['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $delChalan['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($delChalan['DelChalan']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($delChalan['DelChalan']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($delChalan['DelChalan']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($delChalan['DelChalan']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Del Chalan'), array('action' => 'edit', $delChalan['DelChalan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Del Chalan'), array('action' => 'delete', $delChalan['DelChalan']['id']), null, __('Are you sure you want to delete # %s?', $delChalan['DelChalan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('controller' => 'sales_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalan Dets'), array('controller' => 'del_chalan_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan Det'), array('controller' => 'del_chalan_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('controller' => 'mould_rework_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Invs'), array('controller' => 'sale_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Inv'), array('controller' => 'sale_invs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Del Chalan Dets'); ?></h3>
	<?php if (!empty($delChalan['DelChalanDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Del Chalan Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Tot Price'); ?></th>
		<th><?php echo __('Tax Comb Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($delChalan['DelChalanDet'] as $delChalanDet): ?>
		<tr>
			<td><?php echo $delChalanDet['id']; ?></td>
			<td><?php echo $delChalanDet['del_chalan_id']; ?></td>
			<td><?php echo $delChalanDet['item_id']; ?></td>
			<td><?php echo $delChalanDet['qty']; ?></td>
			<td><?php echo $delChalanDet['price']; ?></td>
			<td><?php echo $delChalanDet['tot_price']; ?></td>
			<td><?php echo $delChalanDet['tax_comb_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'del_chalan_dets', 'action' => 'view', $delChalanDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'del_chalan_dets', 'action' => 'edit', $delChalanDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'del_chalan_dets', 'action' => 'delete', $delChalanDet['id']), null, __('Are you sure you want to delete # %s?', $delChalanDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Del Chalan Det'), array('controller' => 'del_chalan_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mould Rework Histories'); ?></h3>
	<?php if (!empty($delChalan['MouldReworkHistory'])): ?>
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
		<th><?php echo __('Del Chalan Id'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Received Date'); ?></th>
		<th><?php echo __('Rewo Cost'); ?></th>
		<th><?php echo __('Comment Rew'); ?></th>
		<th><?php echo __('Pur Inv Entry Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($delChalan['MouldReworkHistory'] as $mouldReworkHistory): ?>
		<tr>
			<td><?php echo $mouldReworkHistory['id']; ?></td>
			<td><?php echo $mouldReworkHistory['location_id']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_det_id']; ?></td>
			<td><?php echo $mouldReworkHistory['damage_date']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_rew_reason_id']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_rew_reason_desc']; ?></td>
			<td><?php echo $mouldReworkHistory['mould_disposition']; ?></td>
			<td><?php echo $mouldReworkHistory['dispatch_date']; ?></td>
			<td><?php echo $mouldReworkHistory['del_chalan_id']; ?></td>
			<td><?php echo $mouldReworkHistory['partner_id']; ?></td>
			<td><?php echo $mouldReworkHistory['received_date']; ?></td>
			<td><?php echo $mouldReworkHistory['rewo_cost']; ?></td>
			<td><?php echo $mouldReworkHistory['comment_rew']; ?></td>
			<td><?php echo $mouldReworkHistory['pur_inv_entry_id']; ?></td>
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
	<h3><?php echo __('Related Sale Invs'); ?></h3>
	<?php if (!empty($delChalan['SaleInv'])): ?>
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
		foreach ($delChalan['SaleInv'] as $saleInv): ?>
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
