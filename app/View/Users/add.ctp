<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/addressSearch.js"></script>
<div class="container">
	<!-- ヘッダー部分  ナビゲーションバー　-->
	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="row">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarAction">
					<span class="sr-only">Action navigation</span><!-- 音声ブラウザ用 -->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbarAction">
				<ul class="nav navbar-nav">
					<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="users form">
		<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<legend><?php echo __('Add User'); ?></legend>
			<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
			echo $this->Form->input('group_id');
			?>
			<!-- 郵便番号入力のテキストボックス -->
			<input type="text" id="zipcode" value="" maxlength="7" title="郵便番号検索">
			<input type="button" id="search_btn" value="検索">
			<p>※7桁の半角数字で入力</p>
			<!-- 検索結果の表示エリア -->
			<?php echo $this->Form->input('address',array("id"=>"zip_result")); ?>
		</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
