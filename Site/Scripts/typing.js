let typing1Txt = "Данная страница создана как часть решения лабораторной работы и будет заполнена различным содержимым. На этой странице вы можете узнать информацию обо мне, работах и домашних животных. А также протестировать работу галереи и оценить дизайн страницы";
let spans1 ='<span>' + typing1Txt.split('').join('</span><span>') + '</span>'
$(".introduction").get(0).addEventListener("animationend", function() {
    $("#typing1").get(0).innerHTML = "";
    $(spans1).hide().appendTo('#typing1').each(function (i) {
        $(this).delay(10 * i).css({
            display: 'inline',
            opacity: 0
        }).animate({
            opacity: 1
        }, 10);
    });
}, false);
function prepareSwitch (){
    $("#aboutW").css({display: 'none'});
    $("#navbar").css({display: 'none'});
    $("#mainW").css({display: 'none'});
    $("#petsW").css({display: 'none'});
    $("#projectsW").css({display: 'none'});
    $("#galleryW").css({display: 'none'});
    $("#mlidmW").css({display: 'none'});
    $("#contentTitle").css({display: 'none'});
    $(".content").css({"margin-top": "60px"})
}
window.onload =()=>{
    let startup = new Audio('../Images/win98.mp3')
    startup.play();
    function aboutMeSwitch () {
        prepareSwitch();
        $("#aboutW").css({display: 'flex'});
        $("#navbar").css({display: 'flex'});
        $(".aboutItem").each(function (i) {
            $(this).delay(500 * i).css({
                display: 'block',
                opacity: 0
            }).animate({
                opacity: 1
            }, 200);
        })
    }
    function petsSwitch (){
        prepareSwitch();
        $("#petsW").css({display: 'flex'});
        $("#navbar").css({display: 'flex'});
        $(".petsEl").each(function (i) {
            $(this).delay(500 * i).css({
                display: 'flex',
                opacity: 0
            }).animate({
                opacity: 1
            }, 200);
        })
        $(".aboutItem").css({opacity: 1})
    }
    function projectsSwitch (){
        prepareSwitch();
        $("#projectsW").css({display: 'flex'});
        $("#navbar").css({display: 'flex'});
        $(".projEl").each(function (i) {
            $(this).delay(500 * i).css({
                display: 'flex',
                opacity: 0
            }).animate({
                opacity: 1
            }, 200);
        })
        $(".aboutItem").css({opacity: 1})
    }
    function mlidmSwitch (){
        prepareSwitch();
        $("#mlidmW").css({display: 'flex'});
        $("#navbar").css({display: 'flex'});
        $(".mlidmEl").each(function (i) {
            $(this).delay(500 * i).css({
                display: 'flex',
                opacity: 0
            }).animate({
                opacity: 1
            }, 200);
        })
        $(".aboutItem").css({opacity: 1})
    }
    function gallerySwitch (){
        prepareSwitch();
        $("#galleryW").css({display: 'flex'});
        $("#navbar").css({display: 'flex'});
        $(".aboutItem").css({opacity: 1})
    }
    function mainSwitch (){
        prepareSwitch();
        $("#mainW").css({display: 'flex'});
        $("#contentTitle").css({display: 'block'});
        $("#introduction").css({animation: "none", opacity:1})
        $(".menuItem").css({animation: "none", opacity:1})
        $(".content").css({"margin-top": "0px"})
    }
    $("#aboutMeBtn").click(aboutMeSwitch);
    $("#navAboutMeBtn").click(aboutMeSwitch);
    $("#petsBtn").click(petsSwitch);
    $("#navPetsBtn").click(petsSwitch);
    $(".aboutBackBtn").click(mainSwitch);
    $("#mainWBtn").click(mainSwitch);
    $("#projectsBtn").click(projectsSwitch);
    $("#navProjectsBtn").click(projectsSwitch);
    $("#mlidmBtn").click(mlidmSwitch);
    $("#navMlidmBtn").click(mlidmSwitch);
    $("#galleryBtn").click(gallerySwitch);
    $("#navGalleryBtn").click(gallerySwitch);
}