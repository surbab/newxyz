<div class="mouldRewReasons view">
<h2><?php  echo __('Mould Rew Reason'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mouldRewReason['MouldRewReason']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($mouldRewReason['MouldRewReason']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rew Desc'); ?></dt>
		<dd>
			<?php echo h($mouldRewReason['MouldRewReason']['rew_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($mouldRewReason['MouldRewReason']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($mouldRewReason['MouldRewReason']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($mouldRewReason['MouldRewReason']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($mouldRewReason['MouldRewReason']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mould Rew Reason'), array('action' => 'edit', $mouldRewReason['MouldRewReason']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mould Rew Reason'), array('action' => 'delete', $mouldRewReason['MouldRewReason']['id']), null, __('Are you sure you want to delete # %s?', $mouldRewReason['MouldRewReason']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rew Reasons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rew Reason'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('controller' => 'mould_rework_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mould Rework Histories'); ?></h3>
	<?php if (!empty($mouldRewReason['MouldReworkHistory'])): ?>
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
		foreach ($mouldRewReason['MouldReworkHistory'] as $mouldReworkHistory): ?>
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
