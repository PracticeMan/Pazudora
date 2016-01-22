<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>無題ドキュメント</title>
<?php echo $this->Html->css('style'); ?>
</head>

<body>
<div class="wrapper">
    <div class="main">
        <a href="#" class="logo"></a>
        <a href="#" class="login_btns"></a>

        <div class="topics">

            <div class="topics_top">お魚図鑑　
                <div class="menu_link">
               　   <?php echo $this->Html->link($this->Html->image('osakanazukan.png'), array('action' => 'index'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('osakanatouroku.png'), array('action' => 'add'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('recipe.png'), array('controller' => 'recipes', 'action' => 'index'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('recipetouroku.png'), array('controller' => 'recipes', 'action' => 'add'),array('escape'=>false)); ?>
                </div>

            </div>
 <?php echo $this->fetch('content'); ?>
        </div>
    </div>
</div>
</body>
</html>