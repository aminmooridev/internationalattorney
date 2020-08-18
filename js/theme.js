jQuery(function ($) {
    // Footer ////////////////////////////////////////////////////////////////////////////

    $(window).on('load, resize', function mobileViewUpdate() {

        var viewportWidth = $(window).width();
        if (viewportWidth < 768) {
            $("#footer_menu .collapse").removeClass("in");
        }
        else {
            $("#footer_menu .collapse").addClass("in");
        }
        var viewportWidth = $(window).width();
        if (viewportWidth < 767) {
            $(".label_menu_footer").addClass("collapsed");
            $("#footer_menu .panel-collapse").removeClass("in");
        }
        else {
            $(".label_menu_footer").removeClass("collapsed");
            $("#footer_menu .panel-collapse").addClass("in");
        }
    });
// Tooltip ///////////////////////////////////////////////////////////////////////////
// $(function () {
//     $('[data-toggle="tooltip"]').tooltip()
// });
//
// $('.box__comment__list').resize(function () {
//     console.log(123);
// });
//
// $("#more__comment").on('shown.bs.collapse hidden.bs.collapse', function () {
//     $('#navigation').affix("checkPosition");
// });
// $(window).load(function(){
//     var news_modal = document.getElementById("news_modal");
//         if(news_modal){
//             $('#news_modal').modal('show');
//         }
// });
// FAQ ////////////////////////////////////////////////////////////////////////////////
    $("#FAQ").on("show.bs.collapse", function (e) {
        $(e.target).closest('.panel').addClass('active');
    });
    $("#FAQ").on("hide.bs.collapse", function (e) {
        $(e.target).closest('.panel').removeClass('active');
    });
// OWL Carousel ///////////////////////////////////////////////////////////////////////
    $('#box__comment').owlCarousel({
        rtl: true,
        items: 1,
        loop: true,
        margin: 20,
        smartSpeed: 450
    });
// Menu Fix //////////////////////////////////////////////////////////////////////////
// $('#navigation').affix({
//     offset: {
//         top: function () {
//             return $('.cover').outerHeight(true) + 250;
//         },
//         bottom: function () {
//             return $(document).height() - $('.end__content').position().top + 60;
//         }
//     }
// }).on('affix.bs.affix', function () {
//     $(this).css({
//         'width': $(this).outerWidth(true)
//     });
// });
// Menu Fix //////////////////////////////////////////////////////////////////////////
// $(document).ready(function () {
//     $("#navigation a").on('click', function (event) {
//         if (this.hash !== "") {
//             event.preventDefault();
//             var hash = this.hash;
//             $('html, body').animate({
//                 scrollTop: $(hash).offset().top - 40
//             }, 600, function () {
//                 if (window.history.pushState) {
//                     window.history.pushState({}, '', hash);
//                 }
//                 else {
//                     window.location.hash = hash;
//                 }
//             });
//         }
//     });
// });
// Menu Fix //////////////////////////////////////////////////////////////////////////
    $(document).ready(function () {
        $(".cover .btn__nilgam").on('click', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top + 30
                }, 600, function () {
                    if (window.history.pushState) {
                        window.history.pushState({}, '', hash);
                    }
                    else {
                        window.location.hash = hash;
                    }
                });
            }
        });
    });
// Wizard ////////////////////////////////////////////////////////////////////////////
    $('.btnNext').click(function () {
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });
    $('.btnPrevious').click(function () {
        $('.nav-tabs > .active').prev('li').find('a').trigger('click');
    });

    $("#box__wizard").on('shown.bs.tab', function () {
        $('html, body').animate({
            scrollTop: $(this).first().offset().top - 40
        },500);
    });
// Box Value List ///////////////////////////////////////////////////////////////////
    $('.box__value__list').owlCarousel({
        rtl: true,
        loop: true,
        margin: 0,
        dots: false,
        stagePadding: 110,
        nav: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0,
                dots: true
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });

    $('#fullslider').owlCarousel({
        rtl:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items:1,
        loop:true,
        margin:0,
        stagePadding:0,
        smartSpeed:650,
        autoplay:true,
        autoplayTimeout:9000
    });
    $('#commentslider').owlCarousel({
        rtl:true,
        items:1,
        loop:true,
        margin:40,
        stagePadding:0,
        smartSpeed:450
    });
    $('#visaslider').owlCarousel({
        rtl:true,
        loop:true,
        margin:30,
        stagePadding:15,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1,
                margin:20,
                stagePadding:0,
            },
            600:{
                items:2,
                stagePadding:0,
            },
            1000:{
                items:2
            },
            1100:{
                items:2
            }
        }
    });

    var kami = document.getElementsByClassName("comment");
    var kamiCon = document.getElementsByClassName("box__comment__list");
    var kamiMain = document.getElementById("kami");
    var showAllCommentsButton = document.getElementById("showAllCommentsButton");
    var showAllCommentsIco = document.getElementById("showAllCommentsIco");
    if(kamiCon){
        if (kami.length > 5){
            var i;
            for (i = 5; i < kami.length; i++) {
                kami[i].style.height="0px";
                kami[i].style.overflow = "hidden";
                kami[i].style.opacity = "0";
            }
            //kamiCon[0].style.height=twoCommentHeightCount + 150 + "px";
            kamiCon[0].style.overflow = "hidden";
            showAllCommentsButton.style.display="block";
            showAllCommentsIco.style.transform= "rotate(0deg)";
        }
        if(showAllCommentsButton){
            var CommentBool = true;
            showAllCommentsButton.onclick = function(){
                if(CommentBool){
                    if (kami.length > 5){
                        var i;
                        for (i = 5; i < kami.length; i++) {
                            kami[i].style.height="auto";
                            kami[i].style.overflow = "hidden";
                            kami[i].style.opacity = "0";
                        }
                    }
                    var intervalControl = 0 ;
                    var foo = setInterval(function () {
                        if(intervalControl > 1) clearInterval(foo);
                        var j;
                        for (j = 5; j < kami.length; j++) {
                            kami[j].style.opacity = intervalControl;
                        }
                        intervalControl = intervalControl + 0.01 ;
                    }, 10);
                    showAllCommentsIco.style.transform= "rotate(180deg)";
                }
                if(!CommentBool){
                    var intervalControl = 1 ;
                    var foo = setInterval(function () {
                        if(intervalControl < 0){
                            clearInterval(foo);
                            var i;
                            for (i = 5; i < kami.length; i++) {
                                kami[i].style.height="0px";
                                kami[i].style.overflow = "hidden";
                            }
                        }
                        var j;
                        for (j = 5; j < kami.length; j++) {
                            kami[j].style.opacity = intervalControl;
                        }
                        intervalControl = intervalControl - 0.01 ;
                    }, 10);
                    kamiCon[0].style.overflow = "hidden";
                    showAllCommentsIco.style.transform= "rotate(0deg)";
                }
                if(CommentBool)
                    CommentBool = false;
                else
                    CommentBool = true;
            };
        }
    }


});
var modalShow = document.getElementById("myModal");
if(modalShow){
    // jQuery.noConflict();
    $('#mom').modal('show');
}

String.prototype.convertDigit = function(conversion){
    // Arabic chars : ٠١٢٣٤٥٦٧٨٩
    // Persian chars: ۰۱۲۳۴۵۶۷۸۹
    if(conversion=='p2e') {
        return this.replace(/[٠-٩]/g, function (a) {
            return {'٠': '0', '١': '1', '٢': '2', '٣': '3', '٤': '4', '٥': '5', '٦': '6', '٧': '7', '٨': '8', '٩': '9' }[a];
        }).replace(/[۰-۹]/g, function (a) {
            return {'۰': '0', '۱': '1', '۲': '2', '۳': '3', '۴': '4', '۵': '5', '۶': '6', '۷': '7', '۸': '8', '۹': '9' }[a];
        });
    }else if(conversion=='e2p')
        return this.replace(/\d/g,function(a){
            return ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'][a];
        });
}


function showModal(title, content, footer) {
    if ($('.modal-backdrop').length != 0) {
        hideModal();
        setTimeout(function () {
            showModal(title, content, footer);
        }, 300);
        return;
    }
    if (!footer && footer !== null)
        footer = "<button type='button' class='btn btn-default' data-dismiss='modal'>بازگشت</button>";
    var modal = $("#modal");
    modal.find(".modal-header").find('.modal-title').html(title);
    modal.find(".modal-body").html(content);
    modal.find(".modal-footer").html(footer);

    if (footer === null)
        modal.find(".modal-footer").hide();
    else
        modal.find(".modal-footer").show();
    modal.modal('show');
}

function hideModal() {
    var modal = $("#modal");
    modal.modal('hide');
}


$( document ).ready(function() {
    $('.search-box').on("click" , function () {
        var searchform = $('.search-form');
        if (searchform.hasClass('search-active')){
            searchform.removeClass('search-active');
        }else {
            searchform.addClass('search-active');
        }
        $('.input-search').focus();
    });
});