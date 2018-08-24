<nav class="navbar navbar-default ">
<div class="container">	
<!-- ヘッダー部分 -->
<div class="navbar-header">
<div class="actions">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">ACTION</a>
</div>

<div class="collapse navbar-collapse" id="navbarEexample1">
<ul class="nav navbar-nav">
<li><a href="#"><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></a></li>
<li class="active"><a href="#"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?></a></li>
<li><a href="#"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?></a></li>
</ul>
</div>
</div>
</div>
</nav>

<div class="posts index">
<h1><?php echo __('Posts'); ?></h1>
<!-- 検索フォームを作成 -->	
<?php echo $this->Form->create('Post', array(
			'url' =>  array_merge(array('action' => 'index'),
				$this->params['pass']),
			));
echo $this->Form->label('title');
echo $this->Form->text('title');
echo $this->Form->label('Category');
echo $this->Form->text('categoryname');
echo $this->Form->label('tag');
echo $this->Form->text('tagname');
echo $this->Form->submit(__('Search', true), array('div' => false));
echo $this->Form->end();?>
<table  cellpadding="0" cellspacing="0">
<thead>
<tr>
<th><?php echo $this->Paginator->sort('id'); ?></th>
<th><?php echo $this->Paginator->sort('category_id'); ?></th>
<th><?php echo $this->Paginator->sort('user_id'); ?></th>
<th><?php echo $this->Paginator->sort('title'); ?></th>
<th><?php echo $this->Paginator->sort('body'); ?></th>
<th><?php echo $this->Paginator->sort('tag'); ?></th>
<th><?php echo $this->Paginator->sort('created'); ?></th>
<th><?php echo $this->Paginator->sort('modified'); ?></th>
<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
<?php foreach ($posts as $post): ?>
<tr>
<!-- チェック用 -->
<!--	<td><?php var_dump($post); ?>&nbsp;</td> -->	
<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
<td><?php echo h($post['Category']['name']); ?>&nbsp;</td>	
<td>
<?php echo $this->Html->link($post['User']['id'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
</td>
<td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
<td><?php echo h($post['Post']['body']); ?>&nbsp;</td>
<td><?php foreach ($post['Tag'] as $tag):
echo h($tag['name']."\n"); 
endforeach;
?>&nbsp;</td>
<td><?php echo h($post['Post']['created']); ?>&nbsp;</td>
<td><?php echo h($post['Post']['modified']); ?>&nbsp;</td>
<td class="actions">
<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id'])); ?>
<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $post['Post']['id']))); ?>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
?>	</p>
<div class="paging">
<?php
echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
echo $this->Paginator->numbers(array('separator' => ''));
echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
?>
</div>
</div>
</div>
