/* Foundation v2.1.3 http://foundation.zurb.com */
$(document).ready(function () {

	/* Use this js doc for all application specific JS */
    
    
    /* HIDE ADDRESS BAR ON IPHONE */
    
    window.scrollTo(0,1);
	
	/* WORDPRESS NAV-BAR SUPPORT ------------- */
	/* Adds support for the nav-bar with flyouts in WordPress */
	
	$('.nav-bar li').has('ul').addClass("has-flyout");
	$('.nav-bar li ul').addClass("flyout");	

	/* TABS --------------------------------- */
	/* Remove if you don't need :) */

	function activateTab($tab) {
	  var $activeTab = $tab.closest('dl').find('a.active'),
	      contentLocation = $tab.attr("href") + 'Tab';

	  //Make Tab Active
	  $activeTab.removeClass('active');
	  $tab.addClass('active');

    //Show Tab Content
		$(contentLocation).closest('.tabs-content').find('li').hide();
		$(contentLocation).show();
	}

	$('dl.tabs').each(function () {
		//Get all tabs
		var tabs = $(this).children('dd').children('a');
		tabs.click(function (e) {
		  activateTab($(this));
		});
	});

	if (window.location.hash) {
    activateTab($('a[href="' + window.location.hash + '"]'));
  }

	/* PLACEHOLDER FOR FORMS ------------- */
	/* Remove this and jquery.placeholder.min.js if you don't need :) */

	//$('.fancybox').fancybox();

});
