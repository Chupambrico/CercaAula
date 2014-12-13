/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
/*//////////////////// Custom Functions Start                                                                             */
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/



/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
/*//////////////////// Variables Start                                                                                    */
var $ = jQuery.noConflict();

var generalAnimationSpeed = 450; // animations speed, this value is used by almost all animations

var frameLoadComplete = false;
var frameIsAdapted = false;

var document_height = $(window).height()-200;

var listIsOpen = false; // intial list status
var tempListMargin = 0; // initial items list position
var headerHeight = 64; // the height of the header
var slideVal = 0; // initial slide value
var itemWidth = 231; // the total width of an item, including it's border and margins
var listWidth = 0;
var listWrapWidth = 0;

var smartPHeight = 568; // smartphones portrait mode height
var smartPWidth = 320; // smartphones portrait mode width

var smartLHeight = 320; // smartphones landscape mode height
var smartLWidth = 568; // smartphones landscape mode width

var tabletPHeight = document_height; // tablet portrait mode height
var tabletPWidth = 768; // tablet portrait mode width

var tabletLHeight = 768; // tablet landscape mode height
var tabletLWidth = 1024; // tablet landscape mode width


/*///////////////// Variables End                                                                                         */
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/



/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
/*//////////////////// Document Ready Starts                                                                              */
jQuery(document).ready(function($) {
		
		
	// initial settings start	
    var tempHeight = jQuery(window).height(); // initial window height
    var tempWidth = jQuery(window).width(); // initial window width
	
	var fullHeight = jQuery(window).height(); // initial browser height
    var fullWidth = jQuery(window).width(); // initial browser height
	
    var currentSize = jQuery('#selectThemeBtn').attr("data-initialSize"); // initial window mode
	// initial settings end
	
	// adjust items list size starts
	//$(".itemsList").width($(".itemsList .item").length * itemWidth+15);
	$(".itemsList").width(50000);
	// adjust items list size ends
	
	
	// initial item settings start
	if($("#selectThemeBtn").text() == "Select an item..."){
		$(".item:first-child").addClass("currentItem");
	}
	
	$(".item:last-child").css({"margin-right":"10px"});
	// sinitial item settings end
	
	
	// get the default item details starts
	var itemSizes = $("#selectThemeBtn").attr("data-itemSizes").split("&");
	
	// check if the device size is available starts
	for(i=0; i<itemSizes.length; i++){
		
		if($.inArray("fullSize", itemSizes) > -1){
			$(".fullIcon").css({"display":"block"});
		}else{
			$(".fullIcon").css({"display":"none"});
		}
		
		if($.inArray("smartPhoneP", itemSizes)>-1){
			$(".smartIconPortrait").css({"display":"block"});
		}else{
			$(".smartIconPortrait").css({"display":"none"});
		}
		
		if($.inArray("smartPhoneL", itemSizes)>-1){
			$(".smartIconLandscape").css({"display":"block"});
		}else{
			$(".smartIconLandscape").css({"display":"none"});
		}
		
		if($.inArray("tabletP", itemSizes)>-1){
			$(".tabletIconPortrait").css({"display":"block"});
		}else{
			$(".tabletIconPortrait").css({"display":"none"});
		}
		
		if($.inArray("tabletL", itemSizes)>-1){
			$(".tabletIconLandscape").css({"display":"block"});
		}else{
			$(".tabletIconLandscape").css({"display":"none"});
		}
	}
	// check if the device size is available ends
	// get the default item details ends
	
	
    // set size function starts   
	function fixFrameSize () {
		
        if(currentSize == "fullSize"){	
			/*$("#iframeWrap").css({"height": ($(window).height() - headerHeight )});
			$("#iframeWrap").css({"width": $(window).width()});
			$(".fullIcon").addClass("currentMode");
			
			tempWidth = $(window).width();
			tempHeight = $(window).height()-headerHeight;
			
			adaptFrame();
			*/
		}
		
		if(currentSize == "smartPhoneP"){	
			$("#iframeWrap").css({"height": smartPHeight});
			$("#iframeWrap").css({"width": smartPWidth});
			$(".smartIconPortrait").addClass("currentMode");
			
			tempWidth = smartPWidth;
			tempHeight = smartPHeight;
			
			adaptFrame();
		}
		
		if(currentSize == "smartPhoneL"){	
			$("#iframeWrap").css({"height": smartLHeight});
			$("#iframeWrap").css({"width": smartLWidth});
			$(".smartIconLandscape").addClass("currentMode");
			
			tempWidth = smartLWidth;
			tempHeight = smartLHeight;
			
			adaptFrame();
		}
		
		if(currentSize == "tabletP"){	
			$("#iframeWrap").css({"height": tabletPHeight});
			$("#iframeWrap").css({"width": tabletPWidth});
			$(".tabletIconPortrait").addClass("currentMode");
			
			tempWidth = tabletPWidth;
			tempHeight = tabletPHeight;
			
			adaptFrame();
		}
		
		if(currentSize == "tabletL"){	
			$("#iframeWrap").css({"height": tabletLHeight});
			$("#iframeWrap").css({"width": tabletLWidth});
			$(".tabletIconlandscape").addClass("currentMode");
			
			tempWidth = tabletLWidth;
			tempHeight = tabletLHeight;
			
			adaptFrame();
		}
		
		$(".iframeOuterWrap").css({"height": ($(window).height() - headerHeight )});
		$(".iframeOuterWrap").css({"width": $(window).width()});
        	
    }
	
	fixFrameSize ();
    // set size function ends   
	
	
	// adapt frame function starts
	function adaptFrame(){
		
		var totalWidth = $(window).width();
		
		if(frameLoadComplete == true && frameIsAdapted == false){
			$(".adjustingFrame").css({"display":"block"});
		}
		
		if(currentSize == "fullSize"){
			$('#iframeMainWrap').removeClass("largeBody");
			$('#iframeWrap').removeClass("iframeWrapMargin");
			
			$("#iframeWrap").stop(false, false).animate({
			marginLeft: 0,
			width: tempWidth,
			height: tempHeight
			},generalAnimationSpeed, 'easeInOutQuint',function(){
				if(frameLoadComplete == true && frameIsAdapted == false){
					$(".adjustingFrame").delay(150).fadeOut(250, function(){frameIsAdapted=true;});
				}
				});
		}else{
			$('#iframeWrap').addClass("iframeWrapMargin");
			
			$("#iframeWrap").stop(false, false).animate({
			marginLeft: (totalWidth - tempWidth)/2,
			width: tempWidth,
			height: tempHeight
			},generalAnimationSpeed, 'easeInOutQuint',function(){
				if(frameLoadComplete == true && frameIsAdapted == false){
					$(".adjustingFrame").delay(150).fadeOut(250, function(){frameIsAdapted=true;});
				}
				$('#iframeMainWrap').addClass("largeBody");
				});
		}
	}
	// adapt frame function ends 

     
	// loading progress functions start 
	function loadingInProgress(){
		frameLoadComplete = false;
		$(".adjustingFrame").css({"display":"block"});
	}
	
	function iframeLoaded(){
		$("#iframe").load(function(){
			$(".adjustingFrame").delay(150).fadeOut(250);
			frameLoadComplete = true;
		});
	}
	
	loadingInProgress();
	iframeLoaded();
	// loading progress functions end
	 
    // window resize function starts			
	$(window).resize(function () {
        
		frameIsAdapted = true;
		fixFrameSize();
		
		fullWidth = $(window).width();
        fullHeight = $(window).height();
		
		if(currentSize == "fullSize"){
			$("#iframeWrap").stop(false, false).animate({
				marginLeft: (fullWidth - $("#iframeWrap").width())/2
				},250, 'easeInOutQuint');
		}
        
		
		listWidth = $(".itemsList").width();
		listWrapWidth = $(".itemsListWrap").width();
		
		if(listWidth+tempListMargin-listWrapWidth <=0 && listWidth > listWrapWidth){
			tempListMargin = -(listWidth-listWrapWidth);
			$(".itemsList").css({"left":tempListMargin});
		} else if(listWidth<=listWrapWidth){
			tempListMargin = 0;
			$(".itemsList").css({"left":0});
		}
		
	});
    // window resize function ends 
    
	
	// close the list starts
	function closeDrop(){
		
		if (listIsOpen == true) {
        	
			$(".itemsListControlsWrap").stop(false, false).animate({ 
				marginTop: -$(".itemsListControlsWrap").height()
				},generalAnimationSpeed, 'easeInOutQuint', function(){
					
				$("#selectThemeBtn").removeClass("selectThemeBtnDown");	
					
					});
        		
        	listIsOpen = false;
        		
		} else {
        		
			$(".itemsListControlsWrap").stop(false, false).animate({ 
				marginTop: 0
                },generalAnimationSpeed, 'easeInOutQuint');
			
			$("#selectThemeBtn").addClass("selectThemeBtnDown");
        		
        	listIsOpen = true;
        		
		}
	};
	// close the list ends
	

    // select theme/template button function starts			
	$("#selectThemeBtn").click( function () {
        	
		closeDrop();
        		
		return false;
        	
	});
    // select theme/template button function ends	

    
	// items list controls start
	$(".itemsListRight").click(function(){
		
		listWidth = $(".itemsList").width();
		listWrapWidth = $(".itemsListWrap").width();
		
		if(listWrapWidth <= listWidth && (listWidth - listWrapWidth + tempListMargin) >= listWrapWidth){
			slideVal = listWrapWidth;
			
		}else if(listWrapWidth <= listWidth && (listWidth - listWrapWidth + tempListMargin) > 0){
			slideVal = listWidth - listWrapWidth + tempListMargin;
		}else{
		    slideVal = 0;	
		}
		
		tempListMargin = tempListMargin - slideVal;
		
		$(".itemsList").stop(false, false).animate({
												   
			left: tempListMargin
			},generalAnimationSpeed, 'easeInOutQuint');
		
		return false;
	});
	
	
	$(".itemsListLeft").click(function(){
									  
		listWidth = $(".itemsList").width();
		listWrapWidth = $(".itemsListWrap").width();
		
		if(tempListMargin < 0 && -tempListMargin >= listWrapWidth){
			slideVal = -listWrapWidth;
			
		}else if(tempListMargin < 0 && -tempListMargin < listWrapWidth){
			slideVal = tempListMargin;
		}else{
		    slideVal = 0;	
		}
		
		tempListMargin = tempListMargin - slideVal;
		
		$(".itemsList").stop(false, false).animate({
												   
			left: tempListMargin
			},generalAnimationSpeed, 'easeInOutQuint');
		
		return false;
	});
	// items list controls end


    // template/theme selected function	starts		
    $(".item").click(function () {
        
		loadingInProgress();
		iframeLoaded();
		
		$(".currentItem").removeClass("currentItem");
		$(this).addClass("currentItem");
		
		var itemTitle = $(this).attr("data-itemTitle");
		var itemLink = $(this).attr("data-itemLink");
		var itemInitialSize = $(this).attr("data-initialSize");
		var itemSizes = $(this).attr("data-itemSizes").split("&");
		var itemPurchaseUrl = $(this).attr("href");
		
		currentSize = itemInitialSize;
		
		function checkModes(){
			$(".currentMode").removeClass("currentMode");
			
			if(currentSize == "fullSize"){
				$(".fullIcon").addClass("currentMode");
				tempWidth = $(window).width();
				tempHeight = $(window).height()-headerHeight;
		    }  
			if(currentSize == "smartPhoneP"){
				$(".smartIconPortrait").addClass("currentMode");
				tempWidth = smartPWidth;
				tempHeight = smartPHeight;
		    }  
			if(currentSize == "smartPhoneL"){
				$(".smartIconLandscape").addClass("currentMode");
				tempWidth = smartLWidth;
				tempHeight = smartLHeight;
		    }  
			if(currentSize == "tabletP"){
				$(".tabletIconPortrait").addClass("currentMode");
				tempWidth = tabletPWidth;
				tempHeight = tabletPHeight;
		    }  
			if(currentSize == "tabletL"){	
			    $(".tabletIconLandscape").addClass("currentMode");
				tempWidth = tabletLWidth;
				tempHeight = tabletLHeight;
		    }  
			
			frameIsAdapted = false;
			adaptFrame();
		}
		
		checkModes();
		
		// check if the device size is available starts
		for(i=0; i<itemSizes.length; i++){
			
			if($.inArray("smartPhoneP", itemSizes)>-1){
				$(".smartIconPortrait").fadeIn(generalAnimationSpeed);
			}else{
				$(".smartIconPortrait").fadeOut(generalAnimationSpeed);
				
			}
			
			if($.inArray("smartPhoneL", itemSizes)>-1){
				$(".smartIconLandscape").fadeIn(generalAnimationSpeed);
			}else{
				$(".smartIconLandscape").fadeOut(generalAnimationSpeed);
				
			}
			
			if($.inArray("tabletP", itemSizes)>-1){
				$(".tabletIconPortrait").fadeIn(generalAnimationSpeed);
			}else{
				$(".tabletIconPortrait").fadeOut(generalAnimationSpeed);
				
			}
			
			if($.inArray("tabletL", itemSizes)>-1){
				$(".tabletIconLandscape").fadeIn(generalAnimationSpeed);
			}else{
				$(".tabletIconLandscape").fadeOut(generalAnimationSpeed);
				
			}
			
			if($.inArray("fullSize", itemSizes) >-1 ){
				$(".fullIcon").fadeIn(generalAnimationSpeed);
			}else{
				$(".fullIcon").fadeOut(generalAnimationSpeed);
				
			}
			
		}
		// check if the device size is available ends
		
		$(".purchase").attr("href", itemPurchaseUrl);
		
		$(".removeFrame").attr("href", itemLink);
		
		$("#iframe").attr("src", itemLink);
		
		$(".themesListWrap a#selectThemeBtn").text(itemTitle);
		
		document.title = 'Enabled | ' + itemTitle;
		
		closeDrop();
		
		listIsOpen = false;
		
		return false;       	
    });
    // template/theme selected function	ends	
    
	
	// responsive functions start
	$(".fullIcon").click(function(){
		
		$(".currentMode").removeClass("currentMode");
		$(this).addClass("currentMode");
		
		currentSize = "fullSize";

		tempWidth = $(window).width();
		tempHeight = $(window).height() - headerHeight;
		
		frameIsAdapted = false;
 		adaptFrame();
		
		return false;						  
	});
	
	$(".smartIconPortrait").click(function(){
										   
		$(".currentMode").removeClass("currentMode");
		$(this).addClass("currentMode");
		
		currentSize = "smartPhoneP";
		
		tempWidth = smartPWidth;
		tempHeight = smartPHeight;
		
		frameIsAdapted = false;
 		adaptFrame();
		
		return false;						  
	});
	
	$(".smartIconLandscape").click(function(){
		
		$(".currentMode").removeClass("currentMode");
		$(this).addClass("currentMode");
		
		currentSize = "smartPhoneL";
		
		tempWidth = smartLWidth;
		tempHeight = smartLHeight;
		
		frameIsAdapted = false;
 		adaptFrame();

		return false;						  
	});
	
	$(".tabletIconPortrait").click(function(){
		
		$(".currentMode").removeClass("currentMode");
		$(this).addClass("currentMode");
		
		currentSize = "tabletP";
		
		tempWidth = tabletPWidth;
		tempHeight = tabletPHeight;
		
		frameIsAdapted = false;
 		adaptFrame();

		return false;						  
	});
	
	$(".tabletIconLandscape").click(function(){
											 
		$(".currentMode").removeClass("currentMode");
		$(this).addClass("currentMode");
		
		currentSize = "tabletL";
		
		tempWidth = tabletLWidth;
		tempHeight = tabletLHeight;
		
		frameIsAdapted = false;
 		adaptFrame();

		return false;						  
	});
	// responsive functions end
	
	
	// close the list on click outside starts (won't work on iframe)
    $('html').click(function() {
		if(listIsOpen == true){					 
            closeDrop();
		};
    });
	// close the list on click outside ends


});
/*//////////////////// Document Ready Ends                                                                                */
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/



/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
/*//////////////////// Custom Functions End                                                                               */
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/