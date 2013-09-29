<div class="saleAgents view">
<h2><?php  echo __('Sale Agent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($saleAgent['SaleAgent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saleAgent['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $saleAgent['Partner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Region'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saleAgent['SaleRegion']['id'], array('controller' => 'sale_regions', 'action' => 'view', $saleAgent['SaleRegion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Comm'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saleAgent['SaleComm']['id'], array('controller' => 'sale_comms', 'action' => 'view', $saleAgent['SaleComm']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($saleAgent['SaleAgent']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($saleAgent['SaleAgent']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($saleAgent['SaleAgent']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($saleAgent['SaleAgent']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sale Agent'), array('action' => 'edit', $saleAgent['SaleAgent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sale Agent'), array('action' => 'delete', $saleAgent['SaleAgent']['id']), null, __('Are you sure you want to delete # %s?', $saleAgent['SaleAgent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Agents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Agent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Regions'), array('controller' => 'sale_regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Region'), array('controller' => 'sale_regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Comms'), array('controller' => 'sale_comms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Comm'), array('controller' => 'sale_comms', 'action' => 'add')); ?> </li>
	</ul>
</div>
