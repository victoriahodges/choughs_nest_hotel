$( document ).ready(function() {
    // Booking Form Datepicker
    $( function() {
        var pickerDateFormat = "D, dd MM yy";
        var submitDateFormat = "yy-mm-dd";
        var arrivalDate;
        from = $( "#pickarrivaldate" )
            .datepicker({
            ignoreReadonly: true,
            allowInputToggle: true,
            dateFormat: pickerDateFormat,
            firstDay: 1,
            minDate: "Now",
            maxDate: "+1Y 6M",
            numberOfMonths: 1,
            altField: "#arrivaldate",
            altFormat: submitDateFormat
            })
            .on( "change", function() {
                var date = getDate( this, pickerDateFormat )
                arrivalDate = date;
                var year = date.getFullYear();
                var month = date.getMonth();
                var day = date.getDate();
                var plusOneDay = new Date(year, month ,day+1 );
                to.datepicker( "option", "minDate", plusOneDay);
                to.datepicker
                setTimeout(function(){
                    to.datepicker('show');
                }, 16);    
            }),
        to = $( "#pickdeparturedate" ).datepicker({
            ignoreReadonly: true,
            allowInputToggle: true,
            dateFormat: pickerDateFormat,
            firstDay: 1,
            minDate: "Now+1d",
            maxDate: "+1Y 6M",
            numberOfMonths: 1,
            altField: "#departuredate",
            altFormat: submitDateFormat,
            beforeShowDay: function( date ) {
                if( arrivalDate && date.toString() == arrivalDate.toString() ) {
                    return [true, "arrival-date", 'Arrival Date'];
                } else {
                    return [true, '', ''];
                }
            }
            })
            .on( "change", function() {
                    var departure = $(this).datepicker('getDate')
                    var difference = Math.ceil((departure - arrivalDate) / (1000 * 60 * 60 * 24));
                    $('#nights').val(difference)
            },
        
        );
    
        function getDate( element, dateFormat ) {
        var date;
        try {
            date = $.datepicker.parseDate( dateFormat, element.value );
        } catch( error ) {
            date = null;
        }
        return date;
        }
    } );

    // Reviews
    $("#slideshow > .review-snippet:gt(0)").hide();
    function runSlides() {
    $('#slideshow > .review-snippet:first')
    .fadeOut(1000).hide()
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
    };
    var run = setInterval(runSlides,10000);
    $("#slideshow").mouseup( function () {
        clearInterval(run);
        runSlides();
    });

    // Show availability widget
    $("#show_availability_btn").click(function() {
        $('#availability_widget').toggle('blind', 500);
    });

    $("#enquiries").submit(function(event) {
        var recaptcha = $("#g-recaptcha-response").val();
        if (recaptcha === "") {
            event.preventDefault();
            $("#recaptcha_error_msg").text("Error: Please check the recaptcha");
        }
    });

    // mailchimp
    !function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.defer=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/b53379aab6e62596dd6ff0b69/d4648928d59faf8ac94b2cec2.js");

});