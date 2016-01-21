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
                            array('action' => 'fire_list'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('water_icon.png'),
                        array('action' => 'water_list'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('wood_icon.png'),
                        array('action' => 'wood_list'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('light_icon.png'),
                        array('action' => 'light_list'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('dark_icon.png'),
                        array('action' => 'dark_list'),array('escape'=>false)); ?>
                </div><br>
                </fieldset>
                <fieldset class="kind_field">
                    <legend><h3>タイプ別検索</h3></legend><br>
                <div class="kind_link">
                    <?php echo $this->Html->link('神', array('action' => 'kinds_list/7')) ?>
                    <?php echo $this->Html->link('ドラゴン', array('action' => 'kinds_list/8')) ?>
                    <?php echo $this->Html->link('悪魔', array('action' => 'kinds_list/9')) ?>
                    <?php echo $this->Html->link('バランス', array('action' => 'kinds_list/10')) ?>
                    <?php echo $this->Html->link('攻撃', array('action' => 'kinds_list/11')) ?>
                    <br>
                    <?php echo $this->Html->link('体力', array('action' => 'kinds_list/12')) ?>
                    <?php echo $this->Html->link('回復', array('action' => 'kinds_list/13')) ?>
                    <?php echo $this->Html->link('マシン', array('action' => 'kinds_list/14')) ?>
                    <?php echo $this->Html->link('進化用', array('action' => 'kinds_list/15')) ?>
                    <?php echo $this->Html->link('能力覚醒', array('action' => 'kinds_list/16')) ?>
                    <br>
                    <?php echo $this->Html->link('強化合成', array('action' => 'kinds_list/17')) ?>
                    <?php echo $this->Html->link('換金用', array('action' => 'kinds_list/18')) ?>
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