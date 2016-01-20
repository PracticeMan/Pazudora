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
                            array('action' => 'index'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('water_icon.png'),
                        array('action' => 'index'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('wood_icon.png'),
                        array('action' => 'index'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('light_icon.png'),
                        array('action' => 'index'),array('escape'=>false)); ?>
                    <?php echo $this->Html->link($this->Html->image('dark_icon.png'),
                        array('action' => 'index'),array('escape'=>false)); ?>
                </div><br>
                </fieldset>
                <fieldset class="kind_field">
                    <legend><h3>タイプ別検索</h3></legend><br>
                <div class="kind_link">
                    <a>神 </a> <a>ドラゴン </a> <a>悪魔 </a> <a>バランス </a> <a>攻撃 </a><br>
                    <br>
                    <a>体力 </a> <a>回復 </a> <a>マシン </a> <a>進化用 </a> <a>能力覚醒 </a><br>
                    <br>
                    <a>強化合成 </a> <a>換金用 </a> <a>特別保護(旧) </a> <br>
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
            <div class="table">
                <table>
                    <tr>
                        <th colspan="9" class="th_name"><div class="monster_name">名前</div></th>
                    </tr>
                    <tr>
                        <td width="50" height="10"><?php echo $this->Html->link($this->Html->image('thumb.jpg'),
                                array('action' => 'index'),array('escape'=>false)); ?></td>
                        <td class="td_hp">HP</td>
                        <td class="td_hp_value">100</td>
                        <td class="td_attack">攻撃力</td>
                        <td class="td_attack_value">3000</td>
                        <td class="td_attr">属性</td>
                        <td class="td_attr_name">火</td>
                        <td class="td_kind">タイプ</td>
                        <td class="td_kind_name">ドラゴン</td>
                    <tr>
                    <tr>
                        <th colspan="9" class="th_name"><div class="monster_name">名前</div></th>
                    </tr>
                    <tr>
                        <td width="50" height="10"><?php echo $this->Html->link($this->Html->image('thumb.jpg'),
                                array('action' => 'index'),array('escape'=>false)); ?></td>
                        <td class="td_hp">HP</td>
                        <td class="td_hp_value">100</td>
                        <td class="td_attack">攻撃力</td>
                        <td class="td_attack_value">3000</td>
                        <td class="td_attr">属性</td>
                        <td class="td_attr_name">火</td>
                        <td class="td_kind">タイプ</td>
                        <td class="td_kind_name">ドラゴン</td>
                    <tr>

                </table>
            </div>
        </div>
        <div class="action_menu">
        <?php /*echo $this->fetch('content'); */?>
        </div>
    </div>
</div>
</body>
</html>