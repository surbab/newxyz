<div class="userGroups view">
<h2><?php  echo __('User Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Userg Name'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['userg_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Group'), array('action' => 'edit', $userGroup['UserGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Group'), array('action' => 'delete', $userGroup['UserGroup']['id']), null, __('Are you sure you want to delete # %s?', $userGroup['UserGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List General Access Settings'), array('controller' => 'general_access_settings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New General Access Setting'), array('controller' => 'general_access_settings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related General Access Settings'); ?></h3>
	<?php if (!empty($userGroup['GeneralAccessSetting'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Controller Id'); ?></th>
		<th><?php echo __('Create'); ?></th>
		<th><?php echo __('Read'); ?></th>
		<th><?php echo __('Update'); ?></th>
		<th><?php echo __('Delete'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userGroup['GeneralAccessSetting'] as $generalAccessSetting): ?>
		<tr>
			<td><?php echo $generalAccessSetting['id']; ?></td>
			<td><?php echo $generalAccessSetting['user_group_id']; ?></td>
			<td><?php echo $generalAccessSetting['controller_id']; ?></td>
			<td><?php echo $generalAccessSetting['create']; ?></td>
			<td><?php echo $generalAccessSetting['read']; ?></td>
			<td><?php echo $generalAccessSetting['update']; ?></td>
			<td><?php echo $generalAccessSetting['delete']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'general_access_settings', 'action' => 'view', $generalAccessSetting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'general_access_settings', 'action' => 'edit', $generalAccessSetting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'general_access_settings', 'action' => 'delete', $generalAccessSetting['id']), null, __('Are you sure you want to delete # %s?', $generalAccessSetting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New General Access Setting'), array('controller' => 'general_access_settings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($userGroup['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('User Name'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Is Admin'); ?></th>
		<th><?php echo __('Desc'); ?></th>
		<th><?php echo __('Date Entered'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userGroup['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['user_group_id']; ?></td>
			<td><?php echo $user['user_name']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['employee_id']; ?></td>
			<td><?php echo $user['is_admin']; ?></td>
			<td><?php echo $user['desc']; ?></td>
			<td><?php echo $user['date_entered']; ?></td>
			<td><?php echo $user['date_modified']; ?></td>
			<td><?php echo $user['created_by']; ?></td>
			<td><?php echo $user['status_id']; ?></td>
			<td><?php echo $user['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
