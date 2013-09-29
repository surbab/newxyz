<div class="engBoms view">
<h2><?php  echo __('Eng Bom'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($engBom['EngBom']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($engBom['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $engBom['ItemCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bom Rev'); ?></dt>
		<dd>
			<?php echo h($engBom['EngBom']['bom_rev']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bom Rev Date'); ?></dt>
		<dd>
			<?php echo h($engBom['EngBom']['bom_rev_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bom Desc'); ?></dt>
		<dd>
			<?php echo h($engBom['EngBom']['bom_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bom Activ'); ?></dt>
		<dd>
			<?php echo h($engBom['EngBom']['bom_activ']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eng Chang Note'); ?></dt>
		<dd>
			<?php echo h($engBom['EngBom']['eng_chang_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eng Chang Desc'); ?></dt>
		<dd>
			<?php echo h($engBom['EngBom']['eng_chang_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval'); ?></dt>
		<dd>
			<?php echo h($engBom['EngBom']['approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Register'); ?></dt>
		<dd>
			<?php echo $this->Html->link($engBom['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $engBom['ApprovalRegister']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($engBom['EngBom']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($engBom['EngBom']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($engBom['EngBom']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($engBom['EngBom']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eng Bom'), array('action' => 'edit', $engBom['EngBom']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eng Bom'), array('action' => 'delete', $engBom['EngBom']['id']), null, __('Are you sure you want to delete # %s?', $engBom['EngBom']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Boms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Bom Dets'), array('controller' => 'eng_bom_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom Det'), array('controller' => 'eng_bom_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Eng Bom Dets'); ?></h3>
	<?php if (!empty($engBom['EngBomDet'])): ?>
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
		foreach ($engBom['EngBomDet'] as $engBomDet): ?>
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
