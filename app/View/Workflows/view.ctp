<div class="workflows view">
<h2><?php  echo __('Workflow'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($workflow['Workflow']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($workflow['Location']['name'], array('controller' => 'locations', 'action' => 'view', $workflow['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work  Flow'); ?></dt>
		<dd>
			<?php echo h($workflow['Workflow']['work _flow']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo h($workflow['Workflow']['priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($workflow['Workflow']['desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wo Suffix'); ?></dt>
		<dd>
			<?php echo h($workflow['Workflow']['wo_suffix']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flow Active'); ?></dt>
		<dd>
			<?php echo h($workflow['Workflow']['flow_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($workflow['Workflow']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($workflow['Workflow']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($workflow['Workflow']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($workflow['Workflow']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Workflow'), array('action' => 'edit', $workflow['Workflow']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Workflow'), array('action' => 'delete', $workflow['Workflow']['id']), null, __('Are you sure you want to delete # %s?', $workflow['Workflow']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Workflows'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workflow'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
</div>
