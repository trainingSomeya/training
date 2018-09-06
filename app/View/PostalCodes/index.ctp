<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Postal Codes'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('jiscode');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('zipcode');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('state');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('city');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('street');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('changed');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('cause');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($postalCodes as $postalCode): ?>
			<tr>
				<td><?php echo h($postalCode['PostalCode']['id']); ?>&nbsp;</td>
				<td><?php echo h($postalCode['PostalCode']['jiscode']); ?>&nbsp;</td>
				<td><?php echo h($postalCode['PostalCode']['zipcode']); ?>&nbsp;</td>
				<td><?php echo h($postalCode['PostalCode']['state']); ?>&nbsp;</td>
				<td><?php echo h($postalCode['PostalCode']['city']); ?>&nbsp;</td>
				<td><?php echo h($postalCode['PostalCode']['street']); ?>&nbsp;</td>
				<td><?php echo h($postalCode['PostalCode']['changed']); ?>&nbsp;</td>
				<td><?php echo h($postalCode['PostalCode']['cause']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $postalCode['PostalCode']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $postalCode['PostalCode']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $postalCode['PostalCode']['id']), null, __('Are you sure you want to delete # %s?', $postalCode['PostalCode']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Postal Code')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>