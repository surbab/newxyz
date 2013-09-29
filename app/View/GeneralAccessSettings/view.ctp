<div class="generalAccessSettings view">
<h2><?php  echo __('General Access Setting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($generalAccessSetting['GeneralAccessSetting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($generalAccessSetting['UserGroup']['userg_name'], array('controller' => 'user_groups', 'action' => 'view', $generalAccessSetting['UserGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Control'); ?></dt>
		<dd>
			<?php echo $this->Html->link($generalAccessSetting['Control']['name'], array('controller' => 'controls', 'action' => 'view', $generalAccessSetting['Control']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create'); ?></dt>
		<dd>
			<?php echo h($generalAccessSetting['GeneralAccessSetting']['create']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Read'); ?></dt>
		<dd>
			<?php echo h($generalAccessSetting['GeneralAccessSetting']['read']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update'); ?></dt>
		<dd>
			<?php echo h($generalAccessSetting['GeneralAccessSetting']['update']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete'); ?></dt>
		<dd>
			<?php echo h($generalAccessSetting['GeneralAccessSetting']['delete']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit General Access Setting'), array('action' => 'edit', $generalAccessSetting['GeneralAccessSetting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete General Access Setting'), array('action' => 'delete', $generalAccessSetting['GeneralAccessSetting']['id']), null, __('Are you sure you want to delete # %s?', $generalAccessSetting['GeneralAccessSetting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List General Access Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New General Access Setting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Controls'), array('controller' => 'controls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Control'), array('controller' => 'controls', 'action' => 'add')); ?> </li>
	</ul>
</div>
