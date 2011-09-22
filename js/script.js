/* ================================================================ 

Fading backgrounds using Fullscreenr
jQuery scripts

================================================================ */

$(function() {
	
	/* Fullscreen Background Configuration
	------------------------------------------------------- */
	
	// Configuration
	var numberOfBGs = 6;							// Number of background images
	var bgFileName = "background";					// Filename of background images minus the number (eg: background1.jpg = background
	var bgPath = "images/layout/";					// Relative path for background images WITH trailing slash
	var bgFormat = ".jpg";							// File format for background images
	var bgDebug = true;								// True or False, outputs console.logs for debugging
	var bgWait = 8000;								// Time delay for loading a new background
	var bgFadeTime = 1000;							// Time to animate between background images
	var focusOnly = true;							// Set to true to only fade images when the window has focus
	
	// Stop and Start text for background controls
	var stopBtnText = "Stop Background Rotation";
	var startBtnText = "Start Background Rotation";
	
	// Fullscreenr Options
	var FullscreenrOptions = { width: 1920, height: 1138, bgID: '.bgimg' };
	
	// Set up an empty variable for the random number
	var randomised = "";

	/* Fullscreen Background Debug Preface
	------------------------------------------------------- */
	if(bgDebug) {
		console.log("Fading Background Debug is ON.");
		console.log("You should see something like this:");
		console.log("-------------------");
		console.log("Random Number: 0");
		console.log("New background image has been fully loaded");
		console.log("Random Number: 0");
		console.log("New background image has been fully loaded");
		console.log("New background has faded in");
		console.log("Old background has been removed");
		console.log("-------------------");
	}
	
	/* Fading Fullscreen Background
	------------------------------------------------------- */
	// Call bodySwap the first time
	bodySwap();
	
	// Swapping function
	function bodySwap() {
		
		// Check for old random number before generating a new one
		if(randomised) {
			var oldRandom = randomised;
		}
		
		// Generate a random number based on number of BGs defined above.
		function randomNumber() {
			randomised = Math.floor(Math.random()*numberOfBGs);
			
			// Debug Random Number
			if(bgDebug) {console.log("Random Number: "+randomised);}
			
			// Check for a duplicate number
			duplicateRandomCheck();
		}

		function duplicateRandomCheck() {		
			if(randomised == oldRandom) {
				if(bgDebug) {console.log("Duplicate random number detected. Rolling again!");}
				randomNumber();
			}
		}
		
		randomNumber();
		
		// Create new background image on top of existing one
		$("body").prepend("<img src='"+bgPath+bgFileName+randomised+bgFormat+"' class='bgimg' />");
		
		// Call fullscreener on the new image
		jQuery.fn.fullscreenr(FullscreenrOptions);
		
		// Check for the new image being loaded
		$(".bgimg:nth-child(1)").load(function() {
			
			// Debug Background Image Loaded
			if(bgDebug) {console.log("New background image has been fully loaded");}
			
			// Fade Image Go!
			fadeImage();
		});
		
		// Target old image and fade out
		function fadeImage() {
			$(".bgimg:nth-child(2)").animate({
				opacity: 0
			}, bgFadeTime, function() {
				if(bgDebug) {console.log("New background image has faded in");}
				$(this).remove();
				if(bgDebug) {console.log("Old background has been removed");}
			});
		}
	}

	/* Calling bodySwap() on an interval loop
	------------------------------------------------------- */
	function intervalTrigger() { 
		bgSwapper = setInterval( function() {
			bodySwap();
		}, bgWait ); 
	}; 
	function stopInterval() {
		if(bgDebug) {console.log("stopped background fading");}
		clearInterval(bgSwapper);
	}
	intervalTrigger(); 
	
	/* Creating background controls
	------------------------------------------------------- */
	$("body").append("<span id='bgControls' class='bgStop' title='"+stopBtnText+"'>"+stopBtnText+"</span>");
	$(".bgStop").live("click", function() {
		// Stop Interval
		stopInterval();
		
		// Change text and title
		$(this).attr("title", startBtnText);
		$(this).html(startBtnText);
		
		// Change classes
		$(this).removeClass("bgStop");
		$(this).addClass("bgStart");
		
	});
	$(".bgStart").live("click", function() {
		// Start Interval
		intervalTrigger();
		
		// Change text and title
		$(this).attr("title", stopBtnText);
		$(this).html(stopBtnText);
		
		// Change classes
		$(this).removeClass("bgStart");
		$(this).addClass("bgStop");
	});
	
	/* Check for window.focus() loss
	 * This prevents the awkward loading of several images 
	 * when you come back from another tab.
	 * I made it switchable with a variable (above) incase
	 * you want it to keep going.
	------------------------------------------------------- */
	if(focusOnly) {
		$(document).blur(function() {
			if(bgDebug) {console.log("Window has lost focus. Stopping background loop.");}
			stopInterval();
		});
		$(document).focus(function() {
			if(bgDebug) {console.log("Window has re-focused. Starting background loop again.");}
			intervalTrigger();
		});
	}

});