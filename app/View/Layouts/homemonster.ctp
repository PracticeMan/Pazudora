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
                        <th colspan="9" class="th_name"><div class="monster_name">モンスター名表示　名前</div></th>
                    </tr>
                    <tr>
                        <td width="50" height="10"><?php echo $this->Html->link($this->Html->image('001.png'),
                                array('action' => 'index'),array('escape'=>false)); ?></td>
                        <td class="td_hp">HP</td>
                        <td class="td_hp_value">52</td>
                        <td class="td_attack">攻撃力</td>
                        <td class="td_attack_value">57</td>
                        <td class="td_attr">属性</td>
                        <td class="td_attr_name">火</td>
                        <td class="td_kind">タイプ</td>
                        <td class="td_kind_name">ドラゴン</td>
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