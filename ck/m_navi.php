<ul class="eng_list_txt_reg_18 mt-5 px-3 list_con"> 
<?php
    $menu_datas = get_menu_db(0, true);
    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
    $i = 0;

    foreach ($menu_datas as $row) {
        if (empty($row)) continue;
?> 
            <li>
                <div>
                    <button href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="d-flex justify-content-between align-items-center w-100 border-0 bg-transparent">
                    <?php echo $row['me_name'] ?>
                    <span><i class="bi bi-plus"></i></span>
                    </button>
                </div>
            </li>

            
            <?php
            $k = 0;
            foreach ((array) $row['sub'] as $row2) {

                if (empty($row2)) continue; 

                if ($k == 0)
                    echo '<ul class="kr_in_list_txt_reg_16 mx-2">'.PHP_EOL;
            ?>
                <li class="my-2">
                    <a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" >
                        <?php echo $row2['me_name'] ?>
                    </a>
                </li>
            <?php
                $k++;
            } // end foreach $row2

            if ($k > 0)
                echo '</ul>'.PHP_EOL;
            ?>
        </li>
<?php
        $i++;
    } // end foreach $row
    if ($i == 0) { 
?>
        <li class="gnb_li position-relative">메뉴 준비 중입니다.
            <?php if ($is_admin) { ?>
                <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.
            <?php } ?>
        </li>
<?php } ?>     
</ul>