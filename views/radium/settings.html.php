<ol class="breadcrumb">
    <li>
        <i class="fa fa-home fa-fw"></i>
        <?= $this->html->link('Home', '/');?>
    </li>
    <li>
        <?= $this->html->link('radium', '/radium');?>
    </li>
    <li class="active">
        <?= $this->title('Settings'); ?>
    </li>
</ol>

<div class="header">
    <div class="col-md-12">
        <h3 class="header-title"><?= $this->title(); ?></h3>
    </div>
</div>

<div class="main-content">
	<?php
	var_dump($settings);
	?>
</div>
