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
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="d-block mw-100" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>

       <?php echo $img_content; ?> 
            <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?php  echo $list[$i]['subject']; ?>" title="introducing ck one essence | Calvin Klein" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>     
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
     게시물이 없습니다. 
    <?php }  ?>
