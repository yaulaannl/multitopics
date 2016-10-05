///////////////////////
//Parallax image
////////////////////////
function update(){ 
	
	// Cache the window object
	var $window = $(window);
	
	// Parallax background effect
	// Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641
	
	$('section[data-type="background"]').each(function() {
		
		var $bgobj = $(this); // assigning the object
		//absolute section top position
		var h1 = $bgobj.offset().top;
		//height of section
		var ho = $bgobj.height();
		//speed factor
		var vf = $bgobj.data('speed');
		//correction for bootsrap header tab
		var bias = 50;

		var h3 = h1 - bias 	
		var h2 = $window.scrollTop();	
		var yPos = -(h3-h2)/(vf); 
		// Put together our final background position
		var coords = '50% '+ yPos + 'px' ;
		// Move the background
		$bgobj.css({ backgroundPosition: coords });
			
		
				
	});
	
};

$(window).bind('scroll', update);
update();


/////////////////////////////////////////
//smooth scrool when clicking link buttons
///////////////////////////////////////////
$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});

//////////////////////////////////////////
//load post content into bootstrap modal
/////////////////////////////////////////

//add modal trigger attributes to WP moretag
//modify href to use custom template for modal:
$("a.moretag").each(function(){
	$(this).attr('data-toggle','modal').attr('data-target','#postModal');
	old_href = $(this).attr('href');
	$(this).attr('href',old_href + "?template=basic");
	//alert($(this).text());	
});

//seems that ajax will auto load the content...

/////////////////////////////////////////////
//make blog post image clinkable
////////////////////////////////////////
$(".post-body img").each(function(){
  //get link
  $link = $(this).attr("src");
  $wrap_a = "<a href=\"".concat($link,"\"></a>");
  //wrap <a> tags around it
  $(this).wrap($wrap_a);
  //$(this).wrap("<a href=\"http://www.google.com\"></a>");
  /*
  if($n1 == 1){
	alert($wrap_a);
  }
  */
});

///////////////////////////////////////////                                                                                                                
//Replace  menu item by search icon                                                                                                                  // prerequisite: must define the class 'menu-item-search'
////////////////////////////////////////
$(".menu-item-search a").each( function(){
  //remove placeholder text
  $(this).text("");
  //add search icon css
  $(this).addClass("fa fa-search");
  //add modal toggle attributes
  $(this).attr("data-toggle","modal").attr("data-target","#mySearch");

}); 


$(".menu-item-github a").each( function(){
  //remove placeholder text
  $(this).text("");
  //add search icon css
  $(this).addClass("fa fa-lg fa-github");

}); 

/////////////////////////////////////////////

//Fix Maymyride plugin size overflow


///////////////////////////////////////
/* wrap iframe with div */
$('#mapmyfitness_route').wrap('<div style="overflow:auto;-webkit-overflow-scrolling:touch"></div>');
