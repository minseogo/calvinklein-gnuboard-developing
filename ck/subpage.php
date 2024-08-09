<?php 
  include_once("./common_top.php")
?>
<style>
    .content{
        max-width:1440px;
        margin: 0 auto;
    }
</style>

<h2>

 <?php 
    echo $_GET['subtitle']
 ?>
</h2>

<div class="row mx-0">

<?php
        // 기본 열 크기를 설정 (기본값 3)
        $colSize = isset($_GET["col"]) ? intval($_GET["col"]) : 3;
        
        // 12개의 이미지를 출력
        for ($i = 0; $i < 12; $i++) {
            echo '<div class="col-' . $colSize . ' mb-4 border p-5">이미지태그 넣기</div>';
        }
?>  

 
</div>

<?php 
  include_once("./common_bottom.php")
?>