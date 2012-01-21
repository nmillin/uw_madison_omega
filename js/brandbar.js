/////////////////////
// UW BRAND BAR //
/////////////////////
jQuery(function( $ ){
var container = $( "#region-accordion-first" );//menu that comes down
$( ".accordion-first" ).click(function( event ){ event.preventDefault();//what to click on
if (container.is( ":visible" )){ container.slideUp( 500 ); }
else { container.slideDown( 500 ); }
// close others
if (container2.is( ":visible" )){ container2.slideUp( 250 ); }
if (container3.is( ":visible" )){ container3.slideUp( 250 ); }
});
var container2 = $( "#region-accordion-second" );
$( ".accordion-second" ).click(function( event ){ event.preventDefault();
if (container2.is( ":visible" )){ container2.slideUp( 500 ); }
else { container2.slideDown( 500 );}
// close others
if (container.is( ":visible" )){ container.slideUp( 250 ); }
if (container3.is( ":visible" )){ container3.slideUp( 250 ); }
});
var container3 = $( "#region-accordion-third" );
$( ".accordion-third" ).click(function( event ){ event.preventDefault();
if (container3.is( ":visible" )){ container3.slideUp( 500 ); }
else { container3.slideDown( 500 );}
// close others
if (container2.is( ":visible" )){ container2.slideUp( 250 ); }
if (container.is( ":visible" )){ container.slideUp( 250 ); }
});
});
