<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
    <?php
    for ($i=0; $i<$list_count; $i++) {

    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori']; // 원본변수
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="d-block mw-100" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    // MEN'S와 WOMEN'S 분리
    if (strpos($list[$i]['wr_content'], "정국") !== false) {
        $section_title = "MEN'S";
    } elseif (strpos($list[$i]['wr_content'], "제니") !== false) {
        $section_title = "WOMEN'S";
    } else {
        $section_title = ""; // 조건에 맞지 않는 경우 기본값
    }

    ?>

            <div class="margin_right_1 position-relative d-flex justify-content-center m-lg-0 mt-1">
                <div class="position-relative mw-100 overflow-hidden">
                   <?php echo $img_content; ?>
                    <div class="text-overlay text-white text-center position-absolute">
                        <p class="m-0 font_eng eng_img_sec_title_reg_24"><?php echo $section_title; ?>
                            <span class="d-block">
                                <?php  echo $list[$i]['subject']; ?>
                            </span>
                        </p>
                        <button class="bg-transparent kr_btn_txt_white_med_16 font_kr mt-3 celeb_btn border-white"><?php  echo $list[$i]['wr_content']; ?></button>
                    </div>
                </div>
            </div>
      
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
     게시물이 없습니다. 
    <?php }  ?>
   
