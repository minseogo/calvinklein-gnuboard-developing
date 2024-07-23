$(document).ready(function() {

    // AJAX 요청을 통해 JSON 데이터 불러오기
    $.ajax({
        url: "/ajax/json/data.json",
        type: "GET",
        dataType: "json",
        success: function(data) {
            let gnbli = "";

        menuData.forEach(function(menuItem) {
            gnbli += `<li class="gnb_li position-realtive">`;
            gnbli += `<a href="" class="gnb_a d-block">${menuItem.category}</a>`;
            gnbli += `<ul class="gnb_ul position-absolute eng_hdr_sub_lt_13">`;

            menuItem.subcategories.forEach(function(subItem) {
                gnbli += `<li class="gnb_ul_li"><a href=""><span>${subItem.name}</span></a></li>`;
            });

            gnbli += `</ul>`;
            gnbli += `</li>`;
        });

        $(".gnb").html(gnbli);
        
            // 데이터를 받아온 후 처리
            // generateHeaderMenu(data.menu);
        },
        error: function(xhr, status, error) {
            console.error("Failed to load JSON file.", error);
        }
    });

    // Header 메뉴 생성 함수
    // function generateHeaderMenu(menuData) {
    //     let gnbli = "";

    //     menuData.forEach(function(menuItem) {
    //         gnbli += `<li class="gnb_li position-realtive">`;
    //         gnbli += `<a href="" class="gnb_a d-block">${menuItem.category}</a>`;
    //         gnbli += `<ul class="gnb_ul position-absolute eng_hdr_sub_lt_13">`;

    //         menuItem.subcategories.forEach(function(subItem) {
    //             gnbli += `<li class="gnb_ul_li"><a href=""><span>${subItem.name}</span></a></li>`;
    //         });

    //         gnbli += `</ul>`;
    //         gnbli += `</li>`;
    //     });

    //     $(".gnb").html(gnbli);
    // }

    // 아이콘 메뉴 및 회원 메뉴의 추가 기능은 생략 (필요시 구현)

});
