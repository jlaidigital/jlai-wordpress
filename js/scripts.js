

    $(function() {
        $('a').smoothScroll({
            offset: -60, /* adds spacing before the section */
            speed: 1000, /* ms, smoother the longer the speed */
            easing: 'swing'
        });

        //Insert other functions here
       // $(window).scroll(function(){
       //     var aTop = $('.ad').height();
       //     if($(this).scrollTop()>=aTop){
       //         alert('header just passed.');
       //         // instead of alert you can use to show your ad
       //         // something like $('#footAd').slideup();
       //     }
       //   });

       // $(window).scroll(function(){
       // // 		var change = $('.navBgColor').height();
       // // 		if($(this).scrollTop()>= change){
       // // 			// alert('change color.');
       // //      $( ".wrapper" ).addClass( "navBgColor" );
       // // 		}
       // // });

       // $( ".wrapper" ).hover(function(){
       //  $( this ).addClass( "navBgColor" );
       // });
       
    });

