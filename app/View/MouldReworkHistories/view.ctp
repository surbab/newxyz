<div class="mouldReworkHistories view">
<h2><?php  echo __('Mould Rework History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mouldReworkHistory['MouldReworkHistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mouldReworkHistory['Location']['name'], array('controller' => 'locations', 'action' => 'view', $mouldReworkHistory['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mould Det'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mouldReworkHistory['MouldDet']['id'], array('controller' => 'mould_dets', 'action' => 'view', $mouldReworkHistory['MouldDet']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damage Date'); ?></dt>
		<dd>
			<?php echo h($mouldReworkHistory['MouldReworkHistory']['damage_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mould Rew Reason'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mouldReworkHistory['MouldRewReason']['name'], array('controller' => 'mould_rew_reasons', 'action' => 'view', $mouldReworkHistory['MouldRewReason']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mould Rew Reason Desc'); ?></dt>
		<dd>
			<?php echo h($mouldReworkHistory['MouldReworkHistory']['mould_rew_reason_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mould Disposition'); ?></dt>
		<dd>
			<?php echo h($mouldReworkHistory['MouldReworkHistory']['mould_disposition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dispatch Date'); ?></dt>
		<dd>
			<?php echo h($mouldReworkHistory['MouldReworkHistory']['dispatch_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Chalan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mouldReworkHistory['DelChalan']['id'], array('controller' => 'del_chalans', 'action' => 'view', $mouldReworkHistory['DelChalan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mouldReworkHistory['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $mouldReworkHistory['Partner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Received Date'); ?></dt>
		<dd>
			<?php echo h($mouldReworkHistory['MouldReworkHistory']['received_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rewo Cost'); ?></dt>
		<dd>
			<?php echo h($mouldReworkHistory['MouldReworkHistory']['rewo_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Rew'); ?></dt>
		<dd>
			<?php echo h($mouldReworkHistory['MouldReworkHistory']['comment_rew']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pur Inv Entry'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mouldReworkHistory['PurInvEntry']['id'], array('controller' => 'pur_inv_entries', 'action' => 'view', $mouldReworkHistory['PurInvEntry']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($mouldReworkHistory['MouldReworkHistory']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($mouldReworkHistory['MouldReworkHistory']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($mouldReworkHistory['MouldReworkHistory']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($mouldReworkHistory['MouldReworkHistory']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mould Rework History'), array('action' => 'edit', $mouldReworkHistory['MouldReworkHistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mould Rework History'), array('action' => 'delete', $mouldReworkHistory['MouldReworkHistory']['id']), null, __('Are you sure you want to delete # %s?', $mouldReworkHistory['MouldReworkHistory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Dets'), array('controller' => 'mould_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Det'), array('controller' => 'mould_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rew Reasons'), array('controller' => 'mould_rew_reasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rew Reason'), array('controller' => 'mould_rew_reasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalans'), array('controller' => 'del_chalans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Entries'), array('controller' => 'pur_inv_entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Entry'), array('controller' => 'pur_inv_entries', 'action' => 'add')); ?> </li>
	</ul>
</div>
