<div class="userAccessSettings view">
<h2><?php  echo __('User Access Setting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userAccessSetting['UserAccessSetting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userAccessSetting['User']['user_name'], array('controller' => 'users', 'action' => 'view', $userAccessSetting['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Control'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userAccessSetting['Control']['name'], array('controller' => 'controls', 'action' => 'view', $userAccessSetting['Control']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Read'); ?></dt>
		<dd>
			<?php echo h($userAccessSetting['UserAccessSetting']['read']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Write'); ?></dt>
		<dd>
			<?php echo h($userAccessSetting['UserAccessSetting']['write']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update'); ?></dt>
		<dd>
			<?php echo h($userAccessSetting['UserAccessSetting']['update']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete'); ?></dt>
		<dd>
			<?php echo h($userAccessSetting['UserAccessSetting']['delete']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Access Setting'), array('action' => 'edit', $userAccessSetting['UserAccessSetting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Access Setting'), array('action' => 'delete', $userAccessSetting['UserAccessSetting']['id']), null, __('Are you sure you want to delete # %s?', $userAccessSetting['UserAccessSetting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Access Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Access Setting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Controls'), array('controller' => 'controls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Control'), array('controller' => 'controls', 'action' => 'add')); ?> </li>
	</ul>
</div>
