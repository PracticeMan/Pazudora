﻿<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>★パズルアンドドラゴン　データベース★</title>

</head>
<?php echo $this->Html->css('style'); ?>
<body>
<div class="wrapper">

    <DIV align="right"> 
    <h1>モンスター名:<?php echo $monster['Monster']['name']; ?>　図鑑 No.
        <?php echo $monster['Monster']['id']; ?>
    </h1>
    </DIV>
    
       
    <h1 class="top_image_zukan">
        <?php
            //echo $this->Html->link($this->Html->image('ip1_001.jpg'),array('action' => 'index'),array('escape'=>false));
            echo $this->Html->link($this->upload->uploadImage($monster,'Monster.image'),array('action' => 'index'),array('escape'=>false));
        ?>
    </h1>

    <div class="main">
        <div class="topics">
            <div class="topics_top">　
               
                
            </div>
        <fieldset class="menu_field">
            <legend><h3>MENU</h3></legend><br>
            <div class="actions">
                <ul>
                    <li><?php echo $this->Html->link($this->Html->image('fire.png'), 
                            array('action' => 'New_Monster'),array('escape'=>false)); ?>
                        <?php echo $this->Html->link(__('New_Monster'), array('action' => 'add')); ?>
                    </li>
                    <li><?php echo $this->Html->link($this->Html->image('water.png'), 
                            array('action' => 'List Attrs'),array('escape'=>false)); ?>
                        <?php echo $this->Html->link(__('List Attrs'), array('controller' => 'attrs', 'action' => 'index')); ?> 
                    </li>
                    <li><?php echo $this->Html->link($this->Html->image('wood.png'), 
                            array('action' => 'New Attr'),array('escape'=>false)); ?>
                        <?php echo $this->Html->link(__('New Attr'), array('controller' => 'attrs', 'action' => 'add')); ?> 
                    </li>
                    <li><?php echo $this->Html->link($this->Html->image('light.png'), 
                            array('action' => 'List Kinds'),array('escape'=>false)); ?>
                        <?php echo $this->Html->link(__('List Kinds'), array('controller' => 'kinds', 'action' => 'index')); ?> 
                    </li>
                    <li><?php echo $this->Html->link($this->Html->image('dark.png'), 
                            array('action' => 'New Kind'),array('escape'=>false)); ?>
                        <?php echo $this->Html->link(__('New Kind'), array('controller' => 'kinds', 'action' => 'add')); ?> 
                    </li>
                </ul>
            </div>
        </fieldset>
            <div class="table">
                <table>
                    <tr>
                        <th colspan="9" class="th_name"><?php echo $monster['Monster']['name']; ?></th>
                    </tr>
                    <tr>
                        <td width="50" height="10">
                            <?php echo $this->upload->uploadImage($monster,'Monster.image',array('style'=>'thumb'))
                                 ?>
                            </td>
                        <td class="td_hp">HP</td>
                        <td class="td_hp_value"><?php echo $monster['Monster']['hp']; ?></td>
                        <td class="td_attack">攻撃力</td>
                        <td class="td_attack_value"><?php echo $monster['Monster']['atatck']; ?></td>
                        <td class="td_attr">属性</td>
                        <td class="td_attr_name"><?php echo $monster['Attr']['attr_type']; ?></td>
                        <td class="td_kind">タイプ</td>
                        <td class="td_kind_name"><?php echo $monster['Kind']['kind_type']; ?></td>
                    </tr>
                       
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