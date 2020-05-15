$.noConflict();
jQuery(document).ready(function($) {

if($('body')){
    $('body').addClass('fixed-nav');
}
/*=====
    ======= Home Page Slider Start============
============*/ 
    
    jQuery('#camera_wrap_1').camera({
        thumbnails: false,
        pagination: false,
        loader: 'bar'
    });
    
/*=====
    ======= Home Page Slider End============
============*/
    

/*=====
    ======= Back to top Start============
============*/ 

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#backtotop ').fadeIn();
        } else {
            $('#backtotop').fadeOut();
        }
    });
    $('#backtotop a').click(function() {
        $("html, body").animate({
            scrollTop: 0
        });
        return false;
    });
    
/*=====
    ======= Back to top End============
============*/ 
    
    
/*=====
    ======= Home Page Category Start============
============*/

    var frontpageCategoryNames = $('#frontpage-category-names').html();
    if (typeof frontpageCategoryNames !== 'undefined' && frontpageCategoryNames !== null) {
        $('.defaultcategories > .container-fluid').prepend('<div id="frontpage-category-names">' + frontpageCategoryNames + '</div>');
        $('#region-main #frontpage-category-names').css({
            'display': 'none'
        });
    };



    var frontpageCategoryNames = $('#frontpage-category-names').html();
    if (typeof frontpageCategoryNames !== 'undefined' && frontpageCategoryNames !== null) {
        $('.customcategories > .container-fluid').prepend('<div id="frontpage-category-names">' + frontpageCategoryNames + '</div>');
        $('#region-main #frontpage-category-names').remove();
    };
    if ($('#frontpage-category-names > h2')) {
        $('#frontpage-category-names > h2').addClass('all');
    }

    var elements = document.getElementsByClassName('all');
    if (elements) {
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].innerHTML == 'Categorías de cursos') {
                elements[i].innerHTML = "Top de espcializaciones";
                break;
            }
        }
    }

    if ($('#frontpage-category-names > h2.all')) {
	$('#frontpage-category-names > h2.all').text("Facultades y Extensión");
        $('#frontpage-category-names > h2.all').after('<p class="tagline">Encontrá el contenido de todas nuestras Unidades Académicas y Actividades de Extensión. </p>');
    }

    $(".customcategories .category[data-depth='1']").wrapAll("<div id='owl-demo1' class='owl-carousel'></div>");

    if ($('body').hasClass('dir-rtl') === true) {
        $('#owl-demo1').addClass('owl-rtl');
    }

    $("#owl-demo1").owlCarousel({

        rtl: true,
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        //singleItem : true

        // "singleItem:true" is a shortcut for:
        items: 4,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false


    });
 
    // course customization start

    try {


        var customCateg = jQuery(".customcategories");
        var subCateg = customCateg && customCateg.find(".subcategories");
        var ownItem = subCateg && subCateg.find(".owl-item");
        var categoryItem = ownItem && ownItem.find('.category');
        categoryItem.each(function(index, obj) {
            var numOfCourse = jQuery(obj).find(".numberofcourse").eq(0);
            var orgContent = numOfCourse.html();
            var numContent = orgContent !== undefined ? orgContent.replace(/[\])}[{(]/g, '') : '';
            var contentNode = jQuery(obj).find('.content');
            var course = numContent.indexOf(1) !== -1 ? "curso" : "cursos";
            if (numContent !== '') {
                jQuery("<span class='course-num'>" + numContent + " " + course + "</span>").insertAfter(contentNode);
            } else {
                jQuery("<span class='course-num'>0 course</span>").insertAfter(contentNode);
            }
            numOfCourse.addClass('hidden');
        });
    } catch (ignore) {}

    $(".customcategories > .container-fluid").append("<a class='seeall btn' href='course/'>Ver Todo</a>");

/*=====
    ======= Home Page Category End============
============*/

/*=====
    ======= Home Page All Courses Start============
============*/


    if ($('.frontpage-course-list-all').parent()) {
        $('.frontpage-course-list-all').parent().addClass("ourcourses");
    }
    if ($('.frontpage-course-list-all')) {
        $('.frontpage-course-list-all').addClass('row-fluid');
    }
    if ($('.ourcourses > h2')) {
        $('.ourcourses > h2').addClass('allcourses');
    }

    var elements = document.getElementsByClassName('allcourses');
    if (elements) {
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].innerHTML == 'Available courses') {
                elements[i].innerHTML = "Courses We Provided";
                break;
            }
        }
    }
    if ($('h2.allcourses')) {
        $('h2.allcourses').after('<p class="tagline">All Our Available Courses Listed Below</p>');
    }

    $('body #frontpage-course-list').each(function() {
        $(this).addClass('clearfix');
    });


    var ourCourses = $('.ourcourses').html();
    if (typeof ourCourses !== 'undefined' && ourCourses !== null) {
        if ($('#allcourses')) {
            $('#allcourses > .container-fluid').append('<div id="frontpage-course-list" class="ourcourses">' + ourCourses + '</div>');
        }
        if ($('#region-main .ourcourses')) {
            $('#region-main .ourcourses').remove();
        }

    };
    if ($('.ourcourses').length === 0) {
        if ($('#page #allcourses')) {
            $('#page #allcourses').remove();
        }
    }

    try {
        var mainWrapper = $('.frontpage-course-list-all, .frontpage-course-list-enrolled');
        if (mainWrapper) {
            mainWrapper.each(function(index, obj) {
                var coursebox = $(obj).find('.coursebox');
                if (coursebox) {
                    coursebox.each(function(index, obj) {
                        var courseimage = $(obj).find('.content .courseimage');
                        var findDiv = $(obj).find('.info');
                        if (courseimage.length > 0) {
                            courseimage.insertBefore(findDiv);
                        }
                    });
                }
            });
        }

    } catch (ignore) {}
    if ($(".frontpage-course-list-all > .coursebox")) {
        $(".frontpage-course-list-all > .coursebox").addClass("item");
    }
    if ($("#allcourses .frontpage-course-list-all > .coursebox")) {
        $("#allcourses .frontpage-course-list-all > .coursebox").wrapAll("<div id='owl-demo' class='owl-carousel owl-theme'></div>");
    }

    if ($('body').hasClass('dir-rtl') === true) {
        $('#owl-demo').addClass('owl-rtl');
    }

    /* For carousel */

    $("#owl-demo").owlCarousel({

        rtl: true,
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        //singleItem : true

        // "singleItem:true" is a shortcut for:
        items: 4,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false


    });

    if ($("#owl-demo > .owl-nav")) {
        $("#owl-demo > .owl-nav").insertBefore(".frontpage-course-list-all > .owl-carousel");
    }

    $(".visitlink a > span").addClass("all");

    var elements = document.getElementsByClassName('all');
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].innerHTML == 'Curso') {
            elements[i].innerHTML = "Ingresar";


        }
    }

    /* Paging Morelink */
    if ($('.paging-morelink > a')) {
        $('.paging-morelink > a').addClass('paging-morelink-link');
    }
    var elements = document.getElementsByClassName('paging-morelink-link');
    if (elements) {
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].innerHTML == 'Todos los cursos') {
                elements[i].innerHTML = "Ver todos los cursos";
                break;
            }
        }
    }
    if ($(".paging-morelink-link")) {
        $(".paging-morelink-link").append(" <i class='fa fa-long-arrow-right' aria-hidden='true'></i>");
    }
    
/*=====
    ======= Home Page All Courses End============
============*/    

/*=====
    ======= More link for Custom Category and All Courses Start============
============*/

    // Configure/customize these variables.
    var showChar = 50; // How many characters are shown by default
    var ellipsestext = "";
    var moretext = "Más...";
    var lesstext = "...Menos";


    $('.categorydescription, .inner-con').each(function(index, obj) {

        var tHTML = "";
        var teachers = $(obj).find('.teachers');
        if (teachers.length > 0) {
            var tHTML = teachers.html();
        }
        if ($(this).children('.teachers')) {
            $(this).children('.teachers').remove();
        }
        var content = $(this).html();

        if (content.length > showChar) {
            content = strip(content);

            function strip(html) {
                var tmp = document.createElement("DIV");
                tmp.innerHTML = html;
                return tmp.textContent || tmp.innerText;
            }
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);

            var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + "<ul class='teachers'>" + tHTML + "</ul>" + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

            $(this).html(html);
            var teachersNode = $(this).children('.morecontent').children('span').children('.teachers');
            if (teachersNode) {
                var tInnerHTML = teachersNode.html();
                if (tInnerHTML === "") {
                    teachersNode.remove();
                }
            }

        }

    });

    $(".morelink").click(function() {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
/*=====
    ======= More link for Custom Category and All Courses End============
============*/

/*=====
    ======= Home page Site News Start============
============*/

    if ($('#site-news-forum > h2')) {
        $('#site-news-forum > h2').addClass('newsheading');
    }

    var elements = document.getElementsByClassName('newsheading');
    if (elements) {
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].innerHTML == 'Site announcements') {
                elements[i].innerHTML = "Special Announcements";
                break;
            }
        }
    }
    if ($('h2.newsheading')) {
        //$('h2.newsheading').after('<p class="tagline">See All Site News Here</p>');
    }

    var siteNewsForum = $('#site-news-forum').html();
    if (typeof siteNewsForum !== 'undefined' && siteNewsForum !== null) {
        if ($('#news')) {
            $('#news > .container-fluid').append('<div id="site-news-forum">' + siteNewsForum + '</div>');
        }
        if ($('#region-main #site-news-forum')) {
            $('#region-main #site-news-forum').outerHTML= "";
        }

    };
    if ($('#site-news-forum').length === 0) {
        if ($('#page #news')) {
            $('#page #news').outerHTML= "";
        }
    }


    try{
        var _mainDiv = $(".author");
        if (_mainDiv) {
            for (var i = 0; i < _mainDiv.length; i++) {    
                if(_mainDiv[i].childNodes[2]){
                    if(_mainDiv[i].childNodes[2].nodeValue){
                        var _info = _mainDiv[i].childNodes[2].nodeValue; 
                        var _infoMain = _info.slice(3) ? _info.slice(3) : '';
                        if(_infoMain !== ''){
                            var _anchorEl = _mainDiv[i].childNodes[1];
                            if(_anchorEl){
                                $("<div class='content wst'>" + _infoMain + "</div>").insertAfter(_anchorEl);
                                
                            }
                            if(_mainDiv[i].childNodes[3]){
                                _mainDiv[i].childNodes[3].nodeValue = '';
                                
                                
                            }
                            if(_mainDiv[i].childNodes[0]){
                                _mainDiv[i].childNodes[0].nodeValue = '';
                                
                                
                            }
                        }
                    }
                }
            }
        }
    }catch(ignore){}


    // removing a tag
    if (jQuery("#site-news-forum > a")) {

        jQuery("#site-news-forum > a").each(function(index, obj) {
            var attr = this.getAttribute('id').substring(0, 1);
            if (attr === 'p') {
                this.outerHTML= "";
            }
        });

    }
    
/*=====
    ======= Home page Site News End============
============*/    

/*=====
    ======= Home page My Courses Start============
============*/

    if ($('.frontpage-course-list-enrolled')) {
        $('.frontpage-course-list-enrolled').parent().addClass("mycourses");
    }

    if ($('.mycourses > h2')) {
        $('.mycourses > h2').addClass('mycoursesheading');
    }

    var elements = document.getElementsByClassName('mycoursesheading');
    if (elements) {
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].innerHTML == 'My courses') {
                elements[i].innerHTML = "Enrolled Courses";
                break;
            }
        }
    }

    if ($('.mycourses > h2')) {
        $('.mycourses > h2').after('<p class="tagline">You Can Enroll Wide Range Of Courses In This Canvas To Full Fill Your Dreams.</p>');
    }

    var myCourses = $('.mycourses').html();
    if (typeof myCourses !== 'undefined' && myCourses !== null) {
        if ($('#enrolledcourses > .container-fluid')) {
            $('#enrolledcourses > .container-fluid').append('<div id="frontpage-course-list" class="mycourses">' + myCourses + '</div>');
        }
        if ($('#region-main .mycourses')) {
            $('#region-main .mycourses').remove();
        }

    };
    if ($('.mycourses').length === 0) {
        $('#page #enrolledcourses').remove();
    }



    $('.frontpage-course-list-enrolled .coursebox').addClass('span3');
    $('.frontpage-course-list-enrolled').addClass('clearfix');

    $(function() {
        var frontpageCourseListEnrolled = $('.frontpage-course-list-enrolled');
        var totalPageWidth = $(frontpageCourseListEnrolled).width();
        var courseBoxWidth = frontpageCourseListEnrolled.find('.coursebox:first').outerWidth(true);
        $('.frontpage-course-list-enrolled > .coursebox').addClass('tst');
        var allBoxes = frontpageCourseListEnrolled.find('.coursebox');
        var totalBoxes = allBoxes.length;
        var boxesPerRow = Math.floor(totalPageWidth / courseBoxWidth);
        var temp2, temp3, shadowPAGE = $('<div class="shadow-frontpage-course-list-enrolled"></div>');
        for (temp2 = 0; temp2 < boxesPerRow; temp2++) {
            shadowPAGE.append('<div class="content-column span4 content-column-' + temp2 + '"></div>');
        }
        for (temp2 = 0, temp3 = 0; temp2 < totalBoxes; temp2++, temp3 = (temp3 < (boxesPerRow - 1) ? temp3 + 1 : 0)) {
            shadowPAGE.find('.content-column-' + temp3).append($(allBoxes[temp2]).clone());
        }
        shadowPAGE.append('<div class="clear"></div>');
        frontpageCourseListEnrolled.html(shadowPAGE);
    });

    $(function() {


        $('.frontpage-course-list-enrolled .shadow-frontpage-course-list-enrolled').children().each(function() {
            var tagClass = $(this);
            // collum 1
            if (tagClass.hasClass('content-column-0')) {
                var divs = $('.content-column-0 > .coursebox');
                for (var i = 0; i < divs.length; i += 4) {
                    divs.slice(i, i + 4).wrapAll('<div class="color-wrapper-1"></div>');
                };
                $('.frontpage-course-list-enrolled .shadow-frontpage-course-list-enrolled').each(function(i, v) {
                    $(v).attr('id', 'color-wrapper-' + (i + 1)).find('div.color-wrapper-1').each(function(idx, val) {
                        $(val).children().each(function(index, element) {
                            if (element.parentNode.children.length <= 1) {
                                $(element).addClass('main-color-1');
                            } else {
                                $(element).addClass('color-' + (++index));
                            }
                        });
                    });
                });
            };
            // collum 2
            //for reverse
            if (tagClass.hasClass('content-column-1')) {
                var divs = $('.content-column-1 > .coursebox');
                for (var i = 0; i < divs.length; i += 4) {
                    divs.slice(i, i + 4).wrapAll('<div class="color-wrapper-2"></div>');
                };
                $('.frontpage-course-list-enrolled .shadow-frontpage-course-list-enrolled').each(function(i, v) {

                    $(v).attr('id', 'color-wrapper-' + (i + 1)).find('div.color-wrapper-2').each(function(idx, val) {

                        $($(val).children().get().reverse()).each(function(index, element) {

                            if (element.parentNode.children.length <= 1) {
                                $(element).addClass('main-color-2');
                            } else {
                                $(element).addClass('color-' + (++index));
                            }

                        });
                    });
                });
            };
            // collum 3
            if (tagClass.hasClass('content-column-2')) {
                var divs = $('.content-column-2 > .coursebox');
                for (var i = 0; i < divs.length; i += 4) {
                    divs.slice(i, i + 4).wrapAll('<div class="color-wrapper-3"></div>');
                };
                $('.frontpage-course-list-enrolled .shadow-frontpage-course-list-enrolled').each(function(i, v) {

                    $(v).attr('id', 'color-wrapper-' + (i + 1)).find('div.color-wrapper-3').each(function(idx, val) {

                        $(val).children().each(function(index, element) {

                            if (element.parentNode.children.length <= 1) {
                                $(element).addClass('main-color-3');
                            } else {
                                $(element).addClass('color-' + (++index));
                            }
                        });
                    });
                });
            };
            // collum 4
            //for reverse
            if (tagClass.hasClass('content-column-3')) {
                var divs = $('.content-column-3 > .coursebox');
                for (var i = 0; i < divs.length; i += 4) {
                    divs.slice(i, i + 4).wrapAll('<div class="color-wrapper-4"></div>');
                };
                $('.frontpage-course-list-enrolled .shadow-frontpage-course-list-enrolled').each(function(i, v) {
                    $(v).attr('id', 'color-wrapper-' + (i + 1)).find('div.color-wrapper-4').each(function(idx, val) {
                        $($(val).children().get().reverse()).each(function(index, element) {
                            if (element.parentNode.children.length <= 1) {
                                $(element).addClass('main-color-4');
                            } else {
                                $(element).addClass('color-' + (++index));
                            }
                        });
                    });
                });
            };
            // collum 5
            if (tagClass.hasClass('content-column-4')) {
                var divs = $('.content-column-4 > .coursebox');
                for (var i = 0; i < divs.length; i += 4) {
                    divs.slice(i, i + 4).wrapAll('<div class="color-wrapper-5"></div>');
                };
                $('.frontpage-course-list-enrolled .shadow-frontpage-course-list-enrolled').each(function(i, v) {
                    $(v).attr('id', 'color-wrapper-' + (i + 1)).find('div.color-wrapper-5').each(function(idx, val) {
                        $(val).children().each(function(index, element) {
                            $(element).addClass('color-' + (++index));
                        });
                    });
                });
            };


        });
    });
/*=====
    ======= Home page My Courses End============
============*/

/*=====
    ======= Home page Student Section Start============
============*/

$("#colorful-background-image").colorfulTab({
    theme: "flatline",
    backgroundImage: "true",
    overlayColor: "#002F68",
    overlayOpacity: "0.8"
});

/*=====
    ======= Home page Student Section End============
============*/
    
/*=====
    ======= Stickyicons Section Start============
============*/
    
var stickyNavHeight = $('#stickyicons').height();
$('#stickyicons').css({
    'margin-top': Math.ceil((stickyNavHeight / 2) * -1)
});
$('#stickyicons li').each(function() {
    var linkEl = $(this).find('a'),
        textEl = $(this).find('span.stickynavtext');
    linkEl.hover(function() {
        textEl.stop().animate({
            right: '100%'
        }, 300)
    }, function() {
        textEl.stop().animate({
            right: -500
        }, 150)
    })
});
/*=====
    ======= Stickyicons Section End============
============*/
    
/*=====
    ======= Main Navigation Section Start============
============*/
    
if($("#navigation-wrapper .main-navigation-inner .nav")){
    $("#navigation-wrapper .main-navigation-inner .nav").addClass("main-menu theme-ddmenu");
    $("#navigation-wrapper .main-navigation-inner .nav").removeClass("nav");
}
if($("#navigation-wrapper .main-navigation-inner .main-menu")){
    $("#navigation-wrapper .main-navigation-inner .main-menu").attr({
        "data-animtype": 2, 
        "data-animspeed": 450
    });
    $("#navigation-wrapper .main-navigation-inner .main-menu li.dropdown ul.dropdown-menu").removeClass("dropdown-menu").addClass("dropdown-list");
    $("#navigation-wrapper .main-navigation-inner .main-menu li.dropdown a.dropdown-toggle b.caret").removeClass("caret").addClass("mobile-arrow");
}
if($("#navigation-wrapper .main-navigation-inner .main-menu li.dropdown ul.dropdown-list li.dropdown-submenu")){
    $("#navigation-wrapper .main-navigation-inner .main-menu li.dropdown ul.dropdown-list li.dropdown-submenu").removeClass("dropdown-submenu").addClass("dropdown");
}
    
/*=====
    ======= Main Navigation Section End============
============*/
    
});