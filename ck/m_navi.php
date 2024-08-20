<ul id="mobile-menu" class="position-fixed bg-white"> 
<?php
    $menu_datas = get_menu_db(0, true);
    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
    $i = 0;

    foreach( $menu_datas as $row ){
        if( empty($row) ) continue;
    ?>
        <li class="py-2 px-3 d-flex align-items-center mt-5">
                    <button class="menu-btn d-flex justify-content-between align-items-center w-100 bg-white border-0">
                        <span class="ul_name eng_hdr_main_sb_16"><?php echo $row['me_name'] ?></span>
                        <span><i class="bi bi-chevron-right"></i></span>
                    </button>
                    <div class="menu-content mt-5">
                        <button class="menu-btn d-flex justify-content-between align-items-center w-100 bg-white border-bottom border-0 bi bi-chevron-left">
                            <span class="ul_name eng_hdr_main_sb_16"><?php echo $row['me_name'] ?></span>
                            <div></div>
                        </button>
           
            <?php
             $k = 0;
            foreach( (array) $row['sub'] as $row2 ){

                if( empty($row2) ) continue; 

                if($k == 0)
                    echo '<ul class="eng_list_txt_reg_18 mt-5 px-3 list_con">'.PHP_EOL;
             ?>
                  
                    <li>
                               
                                  
                                    <div>
                                    <?php 
                                        if($i <= 1 ) {
                                           if($k == 0 ) { ?>
                                        <button class="d-flex justify-content-between align-items-center w-100 border-0 bg-transparent">
                                            <?php echo $row2['me_name'] ?>
                                            <span><i class="bi bi-plus"></i></span>
                                        </button>
                                        <?php }else{ ?> 
                                            <a href="<?php echo $row2['me_link'] ?>"><?php echo $row2['me_name'] ?></a>
                                        <?php } }else{ 
                                        ?>

                                        <a href="<?php echo $row2['me_link'] ?>"><?php echo $row2['me_name'] ?></a>

                                        <?php } ?>
                                    <?php 
                                    if($i <= 1 ) {
                                    if($k == 0 ) { ?>
                                    <ul class="kr_in_list_txt_reg_16 mx-2">                                      

                                        <li class="my-2"><a href="<?php echo $row2['me_link'] ?>">모두보기</a></li>
                                        <li><a href="/gnuboard/bbs/board.php?bo_table=gallery&sca=남성">의류</a></li>
                                        <li class="my-2"><a href="">언더웨어</a></li>
                                        <li><a href="">악세서리</a></li>
                                    </ul>
                                    <? }} ?>

                                    
                    </li>               
                 
                  
                 

            <?php
        $k++;
        }   //end foreach $row2

        if($k > 0)
            echo '</ul>
            '.PHP_EOL;
        ?>
      
        </div><!--menu-content-->
        </li> <!--대메뉴 마침-->
        <?php
        $i++;
                }   //end foreach $row
    if ($i == 0) {  ?>
        <li class="gnb_li position-relative">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
    <?php } ?>   
</ul>