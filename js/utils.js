$(document).ready(function () {
	
    /*
     *  Setup slider for lcation section
     *  Taken down for now
     */    

    /*$('#banner-fade').bjqs({
        height: 217,
        width: 311,
        responsive: true,
        automatic: false,
        showmarkers: false,
        usecaptions: true,
		showcontrols : true, 
		centercontrols : true, 
		nexttext : '<img src="images/slider-right.png" />',
		prevtext : '<img src="images/slider-left.png" />'
    });*/



    /*
     *  Makes main navigation bar and IAALD logo sticky when user scroll
     */

    var aboveHeightNav = 160;

    var windowsWidth;


    $(window).scroll(function () {

        //if scrolled down more than the header's height
        if ($(window).scrollTop() > aboveHeightNav) {

            yVal = $(window).scrollTop();

            $('nav#main-nav').css({
                'top': 0,
                'position': 'fixed'
            });

        } else {
            yVal = $(window).scrollTop();
            $('nav#main-nav').css({
                'top': 160,
                'position': 'absolute'
            });
        }

        var yVal;

        var flexibleWidthLogo;

        var aboveHeightLogo = 224;


        $(window).resize(function () {

            windowsWidth = $(window).width();

            
            flexibleWidthLogo = (windowsWidth - $('header h1').outerWidth()) / 2;


            if ($(window).scrollTop() > aboveHeightLogo) {

                $('header h1').css({
                    'top': -224,
                    'left': flexibleWidthLogo,
                    'position': 'fixed'
                });

            } else {

                $('header h1').css({
                    'top': 0,
                    'left': flexibleWidthLogo,
                    'position': 'absolute'
                });
            }

        });

        $(window).resize();

    });

	$(window).resize(function () {

            windowsWidth = $(window).width();

            if (windowsWidth > 685) {
                $("ul#mobile-nav").css('display', 'none');
            }
        });

	$(window).resize();


    /*
     *  Scroll the whole document
     */

    $('#main-nav').localScroll({

        target: 'body',
        offset: {
            top: -47,
            left: 0
        }
        //duration:3000,
        //easing:'elasout'
    });


    $('#speakers').localScroll({

        target: 'body',
        offset: {
            top: -47,
            left: 0
        }
    });

    $('#conference').localScroll({

        target: 'body',
        offset: {
            top: -47,
            left: 0
        }
    });

    /*
     *  Main NAV states
     */

    $('#main-nav a').click(function () {

        var $activeLink = $(this);

        $('#main-nav a').each(function (index) {

            $(this).removeClass('active');

        })

        $activeLink.addClass('active');

    });

    $('#speakers a:first-child').click(function () {


        $('#main-nav a').each(function (index) {

            $(this).removeClass('active');

        })

        $('#main-nav a.incall').addClass('active');

    });

    /*
     *  'Simple' image gallery. 
     */

    $(".fancybox").fancybox({
        maxWidth: 340,
        maxHeight: 140,
        fitToView: false,
        width: '70%',
        height: '70%',
        autoSize: false,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none'
    });


    $(".fancybox-speaker").fancybox({
        maxWidth: 340,
        maxHeight: 390,
        fitToView: false,
        width: '70%',
        height: '70%',
        autoSize: false,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none'
    });


    /*
     *  Email updates
     */

    $('#email_updates').click(function () {
        $(this).val("");
    });

    $(".btn-signup").click(function (event) {

        var emailAddressVal = $('#email_updates').val();

        /*
        mysite.ourearth.com [@ is not present]
        my@own@site@.org [only one @ is allowed]
        @you.me.net [No character before @]
        ourearth@ [No character after @] 
        */

        var checkEmailAddress = (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailAddressVal));


        if (!checkEmailAddress) {

            $('#email_updates').val('Enter a valid email');

        } else {

            // setup some local variables
            var $form = $('#updates'),
                // let's select and cache all the fields
                $inputs = $form.find("input, select, button, textarea"),
                // serialize the data in the form
                serializedData = $form.serialize();

            // let's disable the inputs for the duration of the ajax request
            $inputs.attr("disabled", "disabled");

            // fire off the request to /email-updates.php
            $.ajax({
                url: "/email-updates.php",
                type: "post",
                data: serializedData,
                // callback handler that will be called on success
                success: function (response, textStatus, jqXHR) {

                    $('#updates').hide();
                    $('#feedback').html(response);
                },
                // callback handler that will be called on error
                error: function (jqXHR, textStatus, errorThrown) {
                    // log the error to the console
                    //console.log("The following error occured: " + textStatus, errorThrown);
                },
                // callback handler that will be called on completion
                // which means, either on success or error
                complete: function () {
                    // enable the inputs
                    $inputs.removeAttr("disabled");

                }
            });

        }
        // prevent default posting of form
        event.preventDefault();
    });



    /*
     *  Responsive Menus
     */

    /* prepend menu icon */
    $('body').prepend('<div id="menu-icon"><img src="images/btn-mobile.png" /></div>');

    $('#intro').prepend('<div id="mobile"><img class="mobile" src="images/logo-mobile.png" /></div>');

    /* toggle nav */
    $("#menu-icon").click(function () {
        //$("#mobile-nav").slideToggle();

        $("#mobile-nav").slideToggle(function () {

            $("#mobile-nav").addClass('show');

        }, function () {
            $("#mobile-nav").removeClass('show');
        });


        $(this).toggleClass("active");

        $('#mobile-nav').localScroll({

            target: 'body',
            offset: {
                top: -47,
                left: 0
            }
            //duration:3000,
            //easing:'elasout'
        });

    });

        
    /* Reveal notification alert */
    setTimeout(function() {
        $('#feedback-message').fadeIn(2000);
    }, 2000); // <-- time in milliseconds

    setTimeout(function() {
        $('#feedback-message').fadeOut(2000);
    }, 9000); // <-- time in milliseconds
        


});