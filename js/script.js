   // $( '<p>Test</p>' ).insertBefore( '#tbox3' );
   // $('#tbox3>H2').append('<p>my self</p>');
   var str = $(window).width();
   // var str = screen.width; 
   // str = str + "& mondsClass: " + $(".mondsClass").width() + "& tel: " + $(".telephone").width();  
   str = ' W' + str;
   console.log(str);
   // $( str ).insertAfter( '.copyrightClass p span' );
   $( ".copyrightClass p span" ).text( str );
   // $(target).insertAfter(selector);
   