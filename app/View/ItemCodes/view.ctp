<div class="itemCodes view">
<h2><?php  echo __('Item Code'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemCode['ItemCode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Code'); ?></dt>
		<dd>
			<?php echo h($itemCode['ItemCode']['item_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Class'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemCode['ItemClass']['id'], array('controller' => 'item_classes', 'action' => 'view', $itemCode['ItemClass']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Desc'); ?></dt>
		<dd>
			<?php echo h($itemCode['ItemCode']['item_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Stock'); ?></dt>
		<dd>
			<?php echo h($itemCode['ItemCode']['item_stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Price'); ?></dt>
		<dd>
			<?php echo h($itemCode['ItemCode']['item_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($itemCode['ItemCode']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($itemCode['ItemCode']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($itemCode['ItemCode']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($itemCode['ItemCode']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Code'), array('action' => 'edit', $itemCode['ItemCode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Code'), array('action' => 'delete', $itemCode['ItemCode']['id']), null, __('Are you sure you want to delete # %s?', $itemCode['ItemCode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Classes'), array('controller' => 'item_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Class'), array('controller' => 'item_classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Bom Dets'), array('controller' => 'eng_bom_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom Det'), array('controller' => 'eng_bom_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Boms'), array('controller' => 'eng_boms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom'), array('controller' => 'eng_boms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Accs'), array('controller' => 'mat_accs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Acc'), array('controller' => 'mat_accs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Issue Dets'), array('controller' => 'mat_issue_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Issue Det'), array('controller' => 'mat_issue_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Eng Bom Dets'); ?></h3>
	<?php if (!empty($itemCode['EngBomDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Eng Bom Id'); ?></th>
		<th><?php echo __('Item Code Id'); ?></th>
		<th><?php echo __('Bom Qty'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($itemCode['EngBomDet'] as $engBomDet): ?>
		<tr>
			<td><?php echo $engBomDet['id']; ?></td>
			<td><?php echo $engBomDet['eng_bom_id']; ?></td>
			<td><?php echo $engBomDet['item_code_id']; ?></td>
			<td><?php echo $engBomDet['bom_qty']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'eng_bom_dets', 'action' => 'view', $engBomDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'eng_bom_dets', 'action' => 'edit', $engBomDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'eng_bom_dets', 'action' => 'delete', $engBomDet['id']), null, __('Are you sure you want to delete # %s?', $engBomDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Eng Bom Det'), array('controller' => 'eng_bom_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Eng Boms'); ?></h3>
	<?php if (!empty($itemCode['EngBom'])): ?>
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
		foreach ($itemCode['EngBom'] as $engBom): ?>
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
	<h3><?php echo __('Related Mat Accs'); ?></h3>
	<?php if (!empty($itemCode['MatAcc'])): ?>
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
		foreach ($itemCode['MatAcc'] as $matAcc): ?>
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
	<h3><?php echo __('Related Mat Issue Dets'); ?></h3>
	<?php if (!empty($itemCode['MatIssueDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Mat Issue No'); ?></th>
		<th><?php echo __('Item Code Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($itemCode['MatIssueDet'] as $matIssueDet): ?>
		<tr>
			<td><?php echo $matIssueDet['id']; ?></td>
			<td><?php echo $matIssueDet['mat_issue_no']; ?></td>
			<td><?php echo $matIssueDet['item_code_id']; ?></td>
			<td><?php echo $matIssueDet['qty']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mat_issue_dets', 'action' => 'view', $matIssueDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mat_issue_dets', 'action' => 'edit', $matIssueDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mat_issue_dets', 'action' => 'delete', $matIssueDet['id']), null, __('Are you sure you want to delete # %s?', $matIssueDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mat Issue Det'), array('controller' => 'mat_issue_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
