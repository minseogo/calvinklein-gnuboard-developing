$(document).ready(function() {
    // Header 메뉴 데이터 정의
    const menuData = [
        {
            category: "MEN",
            subcategories: [
                { name: "온라인 익스클루시브" },
                { name: "남성 의류" },
                { name: "악세서리" },
                { name: "언더웨어" },
                { name: "슈즈" }
            ]
        },
        {
            category: "WOMEN",
            subcategories: [
                { name: "온라인 익스클루시브" },
                { name: "여성 의류" },
                { name: "악세서리" },
                { name: "언더웨어" },
                { name: "슈즈" }
            ]
        },
        {
            category: "SPORTS",
            subcategories: [
                { name: "남성 스포츠" },
                { name: "여성 스포츠" },
                { name: "수영복" }
            ]
        },
        {
            category: "DISCOVERY",
            subcategories: [
                { name: "About Calvin Klein" },
                { name: "What's New" },
                { name: "Best Seller" },
                { name: "Sustainability" }
            ]
        }
    ];
    let cssFile = "/css/common.min.css";

    // <link> 요소 생성
    let linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = cssFile;

    // 문서의 head에 <link> 요소 추가
    document.head.appendChild(linkElement);

    // Header 메뉴 생성 함수
    function generateHeaderMenu() {
        let gnbli = "";
        
        menuData.forEach(function(menuItem, idx) {
            gnbli += `<li class="gnb_li position-relative">`;
            gnbli += `<a href="" class="gnb_a d-block">${menuItem.category}</a>`;
            gnbli += `<ul class="gnb_ul position-absolute eng_hdr_sub_lt_13">`;

            menuItem.subcategories.forEach(function(subItem) {
                gnbli += `<li class="gnb_ul_li"><a href=""><span>${subItem.name}</span></a></li>`;
            });

            gnbli += `</ul>`;
            gnbli += `</li>`;
        });

        $(".gnb").html(gnbli);
    }

    // 페이지 로드 시 Header 메뉴 생성
    generateHeaderMenu();

    // Member 및 Icon 메뉴의 기능은 생략 (실제 동작을 위한 JavaScript 코드 추가 필요)

    // 여기서 아이콘 메뉴와 회원 메뉴의 동작에 대한 추가적인 JavaScript 코드를 작성해야 합니다.
});