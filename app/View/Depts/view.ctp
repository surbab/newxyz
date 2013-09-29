<div class="depts view">
<h2><?php  echo __('Dept'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dept['Dept']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dept['Dept']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dept Desc'); ?></dt>
		<dd>
			<?php echo h($dept['Dept']['dept_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($dept['Dept']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($dept['Dept']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($dept['Dept']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($dept['Dept']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dept'), array('action' => 'edit', $dept['Dept']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dept'), array('action' => 'delete', $dept['Dept']['id']), null, __('Are you sure you want to delete # %s?', $dept['Dept']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Depts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dept'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Controls'), array('controller' => 'controls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Control'), array('controller' => 'controls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contros'), array('controller' => 'contros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contro'), array('controller' => 'contros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hr Compstructtrees'), array('controller' => 'hr_compstructtrees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hr Compstructtree'), array('controller' => 'hr_compstructtrees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resource Men'), array('controller' => 'resource_men', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource Man'), array('controller' => 'resource_men', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resource Wcs'), array('controller' => 'resource_wcs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource Wc'), array('controller' => 'resource_wcs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Controls'); ?></h3>
	<?php if (!empty($dept['Control'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dept Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dept['Control'] as $control): ?>
		<tr>
			<td><?php echo $control['id']; ?></td>
			<td><?php echo $control['dept_id']; ?></td>
			<td><?php echo $control['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'controls', 'action' => 'view', $control['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'controls', 'action' => 'edit', $control['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'controls', 'action' => 'delete', $control['id']), null, __('Are you sure you want to delete # %s?', $control['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Control'), array('controller' => 'controls', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Contros'); ?></h3>
	<?php if (!empty($dept['Contro'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Dept Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dept['Contro'] as $contro): ?>
		<tr>
			<td><?php echo $contro['id']; ?></td>
			<td><?php echo $contro['name']; ?></td>
			<td><?php echo $contro['dept_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contros', 'action' => 'view', $contro['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contros', 'action' => 'edit', $contro['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contros', 'action' => 'delete', $contro['id']), null, __('Are you sure you want to delete # %s?', $contro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contro'), array('controller' => 'contros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hr Compstructtrees'); ?></h3>
	<?php if (!empty($dept['HrCompstructtree'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Loc Code'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rgt'); ?></th>
		<th><?php echo __('Ids'); ?></th>
		<th><?php echo __('Parnt'); ?></th>
		<th><?php echo __('Dept Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dept['HrCompstructtree'] as $hrCompstructtree): ?>
		<tr>
			<td><?php echo $hrCompstructtree['id']; ?></td>
			<td><?php echo $hrCompstructtree['title']; ?></td>
			<td><?php echo $hrCompstructtree['description']; ?></td>
			<td><?php echo $hrCompstructtree['loc_code']; ?></td>
			<td><?php echo $hrCompstructtree['lft']; ?></td>
			<td><?php echo $hrCompstructtree['rgt']; ?></td>
			<td><?php echo $hrCompstructtree['ids']; ?></td>
			<td><?php echo $hrCompstructtree['parnt']; ?></td>
			<td><?php echo $hrCompstructtree['dept_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hr_compstructtrees', 'action' => 'view', $hrCompstructtree['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hr_compstructtrees', 'action' => 'edit', $hrCompstructtree['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hr_compstructtrees', 'action' => 'delete', $hrCompstructtree['id']), null, __('Are you sure you want to delete # %s?', $hrCompstructtree['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hr Compstructtree'), array('controller' => 'hr_compstructtrees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Resource Men'); ?></h3>
	<?php if (!empty($dept['ResourceMan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Res Nick'); ?></th>
		<th><?php echo __('Dept Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dept['ResourceMan'] as $resourceMan): ?>
		<tr>
			<td><?php echo $resourceMan['id']; ?></td>
			<td><?php echo $resourceMan['res_nick']; ?></td>
			<td><?php echo $resourceMan['dept_id']; ?></td>
			<td><?php echo $resourceMan['employee_id']; ?></td>
			<td><?php echo $resourceMan['creat_on']; ?></td>
			<td><?php echo $resourceMan['creat_by']; ?></td>
			<td><?php echo $resourceMan['mod_on']; ?></td>
			<td><?php echo $resourceMan['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'resource_men', 'action' => 'view', $resourceMan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'resource_men', 'action' => 'edit', $resourceMan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'resource_men', 'action' => 'delete', $resourceMan['id']), null, __('Are you sure you want to delete # %s?', $resourceMan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Resource Man'), array('controller' => 'resource_men', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Resource Wcs'); ?></h3>
	<?php if (!empty($dept['ResourceWc'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Res Nick'); ?></th>
		<th><?php echo __('Dept Id'); ?></th>
		<th><?php echo __('Asset Code Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dept['ResourceWc'] as $resourceWc): ?>
		<tr>
			<td><?php echo $resourceWc['id']; ?></td>
			<td><?php echo $resourceWc['res_nick']; ?></td>
			<td><?php echo $resourceWc['dept_id']; ?></td>
			<td><?php echo $resourceWc['asset_code_id']; ?></td>
			<td><?php echo $resourceWc['creat_on']; ?></td>
			<td><?php echo $resourceWc['creat_by']; ?></td>
			<td><?php echo $resourceWc['mod_on']; ?></td>
			<td><?php echo $resourceWc['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'resource_wcs', 'action' => 'view', $resourceWc['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'resource_wcs', 'action' => 'edit', $resourceWc['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'resource_wcs', 'action' => 'delete', $resourceWc['id']), null, __('Are you sure you want to delete # %s?', $resourceWc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Resource Wc'), array('controller' => 'resource_wcs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
