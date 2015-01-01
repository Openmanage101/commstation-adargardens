<div class="schedules view">
<h2><?php echo __('Schedule'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule Message'); ?></dt>
		<dd>
			<?php echo $this->Html->link($schedule['ScheduleMessage']['title'], array('controller' => 'messages', 'action' => 'view', $schedule['ScheduleMessage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interval Months'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['interval_months']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Distribution'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['last_distribution']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Next Distribution'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['next_distribution']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Schedule'), array('action' => 'edit', $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Schedule'), array('action' => 'delete', $schedule['Schedule']['id']), array(), __('Are you sure you want to delete # %s?', $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?> </li>
	</ul>
</div>
