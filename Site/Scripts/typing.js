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
    $("#contentTitle").css({display: 'none'});
    $(".content").css({justifyContent: 'center'})
}
window.onload =()=>{
    let startup = new Audio('../Images/win98.mp3')
    startup.play();
    $("#aboutMeBtn").click(()=>{
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
    })
    $("#petsBtn").click(()=>{
        prepareSwitch();
        $("#petsW").css({display: 'flex'});
        $("#navbar").css({display: 'flex'});
        $(".aboutEl").each(function (i) {
            $(this).delay(500 * i).css({
                display: 'flex',
                opacity: 0
            }).animate({
                opacity: 1
            }, 200);
        })
        $(".aboutItem").css({opacity: 1})
        $(".content").css({justifyContent: 'flex-start'})
    })
    $(".aboutBackBtn").click(()=>{
        prepareSwitch();
        $("#mainW").css({display: 'flex'});
        $("#contentTitle").css({display: 'block'});
        $("#introduction").css({animation: "none", opacity:1})
        $(".menuItem").css({animation: "none", opacity:1})
    })
    $("#mainWBtn").click(()=>{
        prepareSwitch();
        $("#mainW").css({display: 'flex'});
        $("#contentTitle").css({display: 'block'});
        $("#introduction").css({animation: "none", opacity:1})
        $(".menuItem").css({animation: "none", opacity:1})
    })
}