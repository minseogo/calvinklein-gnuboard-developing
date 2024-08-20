<ul class="gnb d-lg-flex eng_hdr_main_sb_16 position-relative">
<?php
    $menu_datas = get_menu_db(0, true);
    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
    $i = 0;

    foreach( $menu_datas as $row ){
        if( empty($row) ) continue;
    ?>
        <li class="gnb_li position-relative">
            <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_a d-block"><?php echo $row['me_name'] ?></a>
            <?php
        $k = 0;
        foreach( (array) $row['sub'] as $row2 ){

            if( empty($row2) ) continue; 

            if($k == 0)
                echo '<ul class="gnb_ul position-absolute eng_hdr_sub_lt_13">'.PHP_EOL;
        ?>
                <li class="gnb_ul_li"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="text-nowrap" ><span><?php echo $row2['me_name'] ?></span></a></li>
            <?php
        $k++;
        }   //end foreach $row2

        if($k > 0)
            echo '</ul>'.PHP_EOL;
        ?>
        </li>
        <?php
        $i++;
                }   //end foreach $row
    if ($i == 0) {  ?>
        <li class="gnb_li position-relative">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
    <?php } ?>     
</ul>



              