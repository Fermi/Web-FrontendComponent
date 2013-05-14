<?php if(!empty($sideBar)){ foreach($sideBar as $bar){ ?>
    <div class="sb_im im_bg">
        <div class="sb_tl tl_bg tl_text"><?php echo $bar['bar_name']; ?></div>
        <?php if(!empty($bar['item'])){ ?>
        <div class="sb_em">
            <ul>
                <?php foreach($bar['item'] as $item){ ?>
                    <li><a href="<?php echo $item['href'] ?>"><?php echo $item['name'] ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>
    </div>
<?php }} ?>
