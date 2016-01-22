<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>★パズルアンドドラゴン　データベース★</title>

</head>
<?php echo $this->Html->css('style'); ?>
<body>
<div class="wrapper">
    <h1 class="top_image"> <?php echo $this->Html->link($this->Html->image('pazudora_logo_small.png'),
            array('action' => 'index'),array('escape'=>false)); ?></h1>

    <div class="main">
        <div class="topics">
            <div class="topics_top">　
                <fieldset class="attr_field">
                    <legend><h3>属性検索</h3></legend><br>
                <div class="attr_link">
                    <?php echo $this->Html->link($this->Html->image('fire_icon.png'),
                        array('action' => 'attrs_list/1'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('water_icon.png'),
                        array('action' => 'attrs_list/2'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('wood_icon.png'),
                        array('action' => 'attrs_list/3'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('light_icon.png'),
                        array('action' => 'attrs_list/4'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('dark_icon.png'),
                        array('action' => 'attrs_list/5'),array('escape'=>false)); ?>
                </div><br>
                </fieldset>
                <fieldset class="kind_field">
                    <legend><h3>タイプ別検索</h3></legend><br>
                <div class="kind_link">
                    <?php echo $this->Html->link($this->Html->image('god_icon.png'), 
                            array('action' => 'kinds_list/7'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('dragon_icon.png'), 
                            array('action' => 'kinds_list/8'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('evil_icon.png'), 
                            array('action' => 'kinds_list/9'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('balance_icon.png'), 
                            array('action' => 'kinds_list/10'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('attack_icon.png'), 
                            array('action' => 'kinds_list/11'),array('escape'=>false)); ?>
                    <br>
                    <?php echo $this->Html->link($this->Html->image('vitality_icon.png'), 
                            array('action' => 'kinds_list/12'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('recovery_icon.png'), 
                            array('action' => 'kinds_list/13'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('machine_icon.png'), 
                            array('action' => 'kinds_list/14'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('evolution_icon.png'), 
                            array('action' => 'kinds_list/15'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('arousal_icon.png'), 
                            array('action' => 'kinds_list/16'),array('escape'=>false)); ?>
                    <br>
                    <?php echo $this->Html->link($this->Html->image('strength_icon.png'), 
                            array('action' => 'kinds_list/17'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('realization_icon.png'), 
                            array('action' => 'kinds_list/18'),array('escape'=>false)); ?>
                    <br>
                </div>
                </fieldset>
            </div>
        <fieldset class="menu_field">
            <legend><h3>MENU</h3></legend><br>
            <div class="actions">
                <ul>
                    <li><?php echo $this->Html->link(__('New Monster'), array('action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List Attrs'), array('controller' => 'attrs', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Attr'), array('controller' => 'attrs', 'action' => 'add')); ?> </li>
                    <li><?php echo $this->Html->link(__('List Kinds'), array('controller' => 'kinds', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Kind'), array('controller' => 'kinds', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </fieldset>

        </div>
        <div class="action_menu">
        <?php echo $this->fetch('content'); ?>
        </div>
    </div>
</div>
</body>
</html>