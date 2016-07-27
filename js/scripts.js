$(function(){

	// $('[href]').each(function() {
	// 	if ((this.href === window.location.href)) {
	// 		(($(this).addClass("strikeThrough")) && ($(this).css("color", "white")));


	// 	}
	

	// });

	$(".menu-item a").on("click", function(){
		$(".current_page_item").removeClass("current_page_item");
		$(this).addClass("active");
	})


	$(window).load(function(){
		
	var elem = document.querySelector('.blogContent');
	var msnry = new Masonry( elem, {
	  itemSelector: '.post-images-image',
	  columnWidth: 200,
	  gutter: 10,
	  fitWidth: true,
	  // fitWidth: !0,
	  // initLayout: false
	});
	});


	// init Masonry
	// var $grid = $('.grid').masonry({
	//   // options...
	// });
	// // layout Masonry after each image loads
	// $grid.imagesLoaded().done( function() {
	//   $grid.masonry('layout');
	// });

	$(".lightbox-link").fancybox();


	// new Masonry(e, {
	//        itemSelector: ".post-images-image",
	//        columnWidth: 200,
	//        gutter: 10,
	//        fitWidth: !0,
	//           initLayout: false
	//    });


// $.fn.masonryImagesReveal = function( $items ) {
//   var msnry = this.data('masonry');
//   var itemSelector = msnry.options.itemSelector;
//   // hide by default
//   $items.hide();
//   // append to container
//   this.append( $items );
//   $items.imagesLoaded().done( function( imgLoad, image ) {
//     // get item
//     // image is imagesLoaded class, not <img>, <img> is image.img
//     var $item = $( image.img ).parents( itemSelector );
//     // un-hide item
//    $item.show();
//     // masonry does its thing
//     msnry.appended( $item );
//   });
  
//   return this;
// };

// var $container = $('.blogContent');

// $container.imagesLoaded( function(){
//   $container.masonry({
//     itemSelector : '.masonryImage'
//   });
// });
	


});



