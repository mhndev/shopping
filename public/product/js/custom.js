var browserName = navigator.appName;
var browserVer = parseInt(navigator.appVersion);
var version = "";
var msie4 = (browserName == "Microsoft Internet Explorer" && browserVer >= 4);
if ((browserName == "Netscape" && browserVer >= 3) || msie4 || browserName=="Konqueror" || browserName=="Opera") {version = "n3";} else {version = "n2";}
	// Blurring links:
function blurLink(theObject)	{	//
	if (msie4)	{theObject.blur();}
}

	// decrypt helper function
function decryptCharcode(n,start,end,offset)	{
	n = n + offset;
	if (offset > 0 && n > end)	{
		n = start + (n - end - 1);
	} else if (offset < 0 && n < start)	{
		n = end - (start - n - 1);
	}
	return String.fromCharCode(n);
}
	// decrypt string
function decryptString(enc,offset)	{
	var dec = "";
	var len = enc.length;
	for(var i=0; i < len; i++)	{
		var n = enc.charCodeAt(i);
		if (n >= 0x2B && n <= 0x3A)	{
			dec += decryptCharcode(n,0x2B,0x3A,offset);	// 0-9 . , - + / :
		} else if (n >= 0x40 && n <= 0x5A)	{
			dec += decryptCharcode(n,0x40,0x5A,offset);	// A-Z @
		} else if (n >= 0x61 && n <= 0x7A)	{
			dec += decryptCharcode(n,0x61,0x7A,offset);	// a-z
		} else {
			dec += enc.charAt(i);
		}
	}
	return dec;
}
	// decrypt spam-protected emails
function linkTo_UnCryptMailto(s)	{

	var data = decryptString(s,1);
	try { 
		_gaq.push(['_trackEvent', 'email' , 'Klick', data]); 
	} catch(err){}

	setTimeout(function() {
		location.href = data;
	}, 100);
	
}




		

var mouseIsInsideSearch = false;
var stuffWrittenInSearchBox = false;

jQuery.noConflict();

jQuery(window).load(function(){

	if(jQuery('.flexslider').length > 0 && jQuery('.flexslider .slides > div').length > 1)
	{
		jQuery('.flexslider').flexslider(
			{
				selector: '.slides > div',
				animation:'slide',
				slideshowSpeed: 5000
			}
		);
	}


});



jQuery(document).ready(function() {

	// F R O N T P A G E   S L I D E R  

	
	
	if(jQuery('.fancybannerbox').length > 0)
	{
		jQuery('.fancybannerbox').fancybox({
			hideOnOverlayClick:true,
			width:1280,
			height:720,
			type:'iframe',
			centerOnScroll:true,
			overlayColor: '#181818',
			overlayOpacity:0.9,
			titleShow: false
		});	
	}
	
	/* global fancybox for iframe*/
	if(jQuery('.fancy_iframe').length > 0)
	{
		jQuery('.fancy_iframe').fancybox({
			hideOnOverlayClick:false,
			width:800,
			height:640,
			type:'iframe',
			centerOnScroll:true
		
		});	
	}
	
	if(jQuery('.fancy_iframe_india').length > 0)
	{
		jQuery('.fancy_iframe_india').click(function(e){
		
			var hreftext = jQuery(this).data('myhref')+jQuery('h1.product-name').text();
			 
			
			jQuery.fancybox({
				href:hreftext,
				hideOnOverlayClick:false,
				width:800,
				height:640,
				type:'iframe',
				centerOnScroll:true
			
			});	
			
			e.preventDefault();
		});
		
	}
	
	
	//startpage only
	if(jQuery('#beyer-4').length > 0)
	{
	
		//top product navigation event tracking
		jQuery('#produktNaviOuter a').click(function(e){
		
			var obj = jQuery(this);
			e.preventDefault();
			
			var link = obj.attr('href');
			var newlink = link.substring(link.lastIndexOf('http://north-america.beyerdynamic.com/') + 1);
			newlink = newlink.replace('.html','');
			
			var imgchild = obj.children('img');
			var h3_parent = obj.parent('h3');
			if(imgchild.length > 0)
			{
				trackOutboundLink(this, 'Startseite', 'Klick','NAVhead_IMG_'+newlink);
			}
			else if(h3_parent.length > 0)
			{
				trackOutboundLink(this, 'Startseite', 'Klick','NAVhead_h3_'+newlink);
			}
			else
			{
				trackOutboundLink(this, 'Startseite', 'Klick','NAVhead_link_'+newlink);
			}
		});
	
		jQuery('#homeMainNavi a').click(function(e){
			var obj = jQuery(this);
			e.preventDefault();
			
			var link = obj.attr('href');
			var newlink = link.substring(link.lastIndexOf('http://north-america.beyerdynamic.com/') + 1);
			newlink = newlink.replace('.html','');
			
			trackOutboundLink(this, 'Startseite', 'Klick','NAVBtn_'+newlink);
			
		
		});
		
		
		
	}
	
	
	
	/*
	if(jQuery('#headerslider .slidercontent').length > 1)
	{
		
		var headslider = jQuery('#headerslider');
		headslider.find('#headerwrap').css('position','absolute');
		
		var first_image_height = jQuery('.slidercontent').first().find('img').attr('height');
		headslider.css('height',first_image_height);
		
		headslider.parent().append(jQuery('<a/>', {'class': "headnext", style: "top:"+(first_image_height/2-38/2+50)+'px'})); 
		headslider.parent().prepend(jQuery('<a/>', {'class': "headprev", style: "top:"+(first_image_height/2-38/2+50)+'px'}));
		
		headslider.scrollable({
			circular: true, 
			speed: 600,
			next: '.headnext',
			prev: '.headprev'
			
		}).navigator().autoscroll({
			interval: 4000		
		});
		
		
		
	}*/
	

	
	// HOTPICKS
	jQuery('.htmlRahmen').hover(function(){
		jQuery(this).find('.bannerImage').stop().animate({top: '84px'},600);
		jQuery(this).find('.htmlContent').stop(true,true).hide().fadeIn(250);
	},function(){
		jQuery(this).find('.bannerImage').stop().animate({top: '-1px'},250);
	});
	
	
	//FANCYBOX Magento
	if(jQuery('#zoom a,a#zoom').length > 0)
	{
		jQuery('#zoom a,a#zoom').fancybox({
			'titlePosition' : 'inside',
			'titleShow' : true,
			'overlayOpacity': 0.7,
			'overlayColor':'#000'
		});
	}
	
	// FANCYBOX Typo3
	if(jQuery('a.fancyboxImage').length > 0)
	jQuery("a.fancyboxImage").fancybox();
	
	if(jQuery('a[rel=group]').length > 0)
	jQuery("a[rel=group]").fancybox();
	
	// REGION SELECTOR DROP DOWN
	jQuery('#regionSelector').click(function(){
		jQuery(this).find('ul').stop(true,true).slideToggle();
	});
	
	// PRODUKT SUPER NAVI DROP DOWN 	
	/*jQuery('.produktNaviOuter').parent('li').click(function(eventobj){
		
		console.log(eventobj);
		if(eventobj.target.className == 'uid_353')
		{
			jQuery(this).find('.produktNaviOuter').stop(true,true).slideToggle();
			return false;
		}
	});*/
	
	jQuery('.uid_353').click(function(){
			jQuery('#produktNaviOuter').stop(true,true).slideToggle();
			return false;
	});
	
	
	/** SEARCHBOX **/
	// beim submit des forms
	jQuery('#productSearchBox form').submit(function(event){
		if(jQuery('#switchToContentSearch:checked').val())  //content suche
		{
			event.preventDefault();
			searchControl.execute(jQuery('#productSearchString').val());
			jQuery('html,body').animate({scrollTop: jQuery('#contentSearchResultBox').offset().top},'slow'); //zum suchergebnis scrollen
		}
		else
		{
			jQuery('html,body').animate({scrollTop: jQuery('#exo-results').offset().top},'slow'); //zum suchergebnis scrollen
			//jQuery('#productSearchBox form').attr('action',jQuery('#productSearchBox form').attr('action')+'#q='+jQuery('#productSearchString').val()); //action attribut umschreiben fuer exorbyte suche
		}
	});
  
    // beim klick auf submitbutton
	jQuery('#submitbutton').click(function()
	{
		if(jQuery('#switchToContentSearch:checked').val())  //content suche
		{
			searchControl.execute(jQuery('#productSearchString').val());
			jQuery('html,body').animate({scrollTop: jQuery('#contentSearchResultBox').offset().top},'slow'); //zum suchergebnis scrollen
		}
		else
		{
			//jQuery('#productSearchBox form').attr('action',jQuery('#productSearchBox form').attr('action')+'#q='+jQuery('#productSearchString').val()); //action attribut umschreiben fuer exorbyte suche
			exoHeaderFormSubmit(jQuery('#productSearchString').val());
			jQuery('html,body').animate({scrollTop: jQuery('#exo-results').offset().top},'slow');
			//jQuery('#productSearchBox form').submit();  //form absenden
		}

	});
	
	//Standards herstellen beim seitenaufruf
	searchFieldFocus();
	//addAutoComplete();
  
	
	jQuery('#searchwrap').hover(function(){ 
		mouseIsInsideSearch=true; 
	}, function(){ 
		mouseIsInsideSearch=false; 
	});
	
	//beim tippen suchergebnissfeld einblenden (bei Produktsuche)
	jQuery('#productSearchString').keypress(function(){
		if(!jQuery('#switchSearchBox').is(':visible')){
			jQuery('#switchSearchBox').fadeIn('fast');
		}
		stuffWrittenInSearchBox = true;
	}).click(function(){
		if(stuffWrittenInSearchBox) //wenn Text in Suchfeld eingegeben wurde
		{
			jQuery('#switchSearchBox').fadeIn('fast');
		}
	});
	
	
	//klick in body blendet Suchergebnissfeld aus
    jQuery('body').mouseup(function(){ 
        if(!mouseIsInsideSearch) 
			jQuery('#switchSearchBox').stop(true,true).fadeOut('slow');
    });
	
	/** SEARCHBOX ENDE **/
	
	// FILTER NAVIGATION
  	if (jQuery('.layered-nav').length > 0){
  		jQuery('#narrow-by-list').hide();
		jQuery('.narrow-by h4').click(function(){
			jQuery('#narrow-by-list').slideToggle();
			jQuery(this).parent('div.narrow-by').toggleClass('active');
		});	

  	} else {
		jQuery('div.narrow-by').addClass('active');
  	}
	
	jQuery('.checkbox').click(function(){
		var checkbox = jQuery(this);
		
		var checkboxitem = checkbox.find('.checkboxitem');
		if(checkbox.data('isclicked'))
		{
			checkboxitem.removeClass('checkboxactive');
			checkbox.data('isclicked',false);
			
		}
		else
		{
			checkboxitem.addClass('checkboxactive');
			checkbox.data('isclicked',true);
		}
	});
	
	jQuery('.radioanrede').click(function(){
		jQuery('.radioanrede').find('.checkboxitem').removeClass('checkboxactive').data('isclicked',false);
		jQuery(this).find('.checkboxitem').addClass('checkboxactive').data('isclicked',true);
	});

	jQuery('.switch').each(function(){
		jQuery(this).data('switchdat',jQuery(this).val());
	});
	jQuery('.switch').focus(function(){
		var thisinput = jQuery(this);
		if(thisinput.val() == thisinput.data('switchdat')) {
			thisinput.val('');
		}
	}).blur(function(){
		var thisinput = jQuery(this);
		if(thisinput.val() == '') {
			thisinput.val(thisinput.data('switchdat'));
		}
	});
	
	
	jQuery('#sendbutton').click(function(){
		
		if(jQuery('#newsletterformular #email').find('input').val() != '' && !jQuery(this).hasClass('locked'))
		{
			var formid = jQuery('#newsletterformular #hidden_form_id').find('input').val();
			var langid = jQuery('#newsletterformular #hidden_lang_id').find('input').val();
			
			jQuery(this).addClass('locked');
			var vgender = 'F';
			if(jQuery('#checkherr').find('.checkboxitem').hasClass('checkboxactive'))
			{
				vgender = 'M';
			}
			
			jQuery.post('newsletterproxy.html', 
			{
				ent:'4059',
				usr:'login_usr',
				pwd:'MRAb46arba132ar',
				p_status:'A',
				ret:'cd',
				upd_ok:'on',
				options:'6065594,'+formid,
				salut:jQuery('.checkboxactive').parent('div').data('value'),
				firstname:jQuery('#newsletterformular #vorname').find('input').val(),
				lastname:jQuery('#newsletterformular #nachname').find('input').val(),
				addr:jQuery('#newsletterformular #email').find('input').val(),
				pp6065594:1,
				country:langid,
				lang:langid,
				gender:vgender
			},
			function(data){
				
				if(data == '1')
				{
					jQuery('#newsformerror').html(jQuery('#newsformerror').html()+' newsletter@beyerdynamic.de.');
					jQuery(this).removeClass('locked');
					jQuery('#newsformerror').fadeIn('slow');
				}
				if(data == '0')
				{
					jQuery('#sendbutton').addClass('sendbutton_success');
					jQuery('#thankyou').fadeIn('slow');
				}
				if(data == '2')
				{
					jQuery('#sendbutton').addClass('sendbutton_success');
					jQuery('#thankyouUpdate').fadeIn('slow');
				}
			}
			);
		}
		

		
	});
	
	jQuery('#fyvSubmit').one('click',function(){
		var parent = jQuery(this).parent('div');
		var emailVal  = parent.find('#email').val();
		var vornameVal = parent.find('#vorname').val();
		var nachnameVal = parent.find('#nachname').val();
		var landVal = parent.find('#land').val();
		
		jQuery.get('http://north-america.beyerdynamic.com/fileadmin/find-your-voice-registration/sendnewsletteremail.php', { vorname: vornameVal,nachname: nachnameVal, land: landVal, email: emailVal ,m: 'se'}, function(datax) {
			if(datax == 'true')
			{
				jQuery('#tyv_form').delay(500).fadeOut('slow');
				jQuery('#emailsuccess').fadeIn('slow');
			}
		});
	});
	
	jQuery('.panebuttons a').click(function(){
		var pane = jQuery('.panebuttons a').index(jQuery(this));
		jQuery('.panebuttons a').removeClass('active');
		jQuery(this).addClass('active');
		var target = (pane*975)*-1;
		jQuery('.panecontent').stop().animate({left:target},500);
	});
	
	var specialmanual = jQuery('.specialmanual a');
	
	if(specialmanual.length > 0)
	{
	
		specialmanual.each(function(){
			var obj = jQuery(this);
			var objparent = obj.parent();
			
			var level = 1;
			

			if(objparent.hasClass('sectionmenulevel2'))
			level = 2;
			else if(objparent.hasClass('sectionmenulevel3'))
			level = 3;
			else if(objparent.hasClass('sectionmenulevel4'))
			level = 4;
			
			var elementuid = objparent.data('uidlink');
			jQuery('#c'+elementuid).hide().appendTo(objparent.parent()).addClass('sectioncontentlevel'+level).find('div.headerclass').hide();
					
			if(jQuery('#c'+elementuid).children('div.headerclass').length == 0)
			{
				obj.addClass('onlyheader');
			}
			
			
		
		});
		
		specialmanual.click(function(e){
			var obj = jQuery(this);
			var uidlink = obj.parent().data('uidlink');
			var element = jQuery('#c'+uidlink);
			if( !obj.hasClass('onlyheader'))
				jQuery('#c'+uidlink).slideToggle();
			e.preventDefault();
			return false;
		});
	}
	
	
	var filetypes = /\.(zip|exe|pdf|doc*|xls*|ppt*|mp3)$/i;
	var baseHref = '';
	if (jQuery('base').attr('href') != undefined)
		baseHref = jQuery('base').attr('href');
		
	jQuery('a.trackdownload').each(function() {
		var href = jQuery(this).attr('href');
		if (href && (href.match(/^https?\:/i)) && (!href.match(document.domain))) {
			jQuery(this).click(function() {
				var extLink = href.replace(/^https?\:\/\//i, '');
				_gaq.push(['_trackEvent', 'External', 'Click', extLink]);
				if (jQuery(this).attr('target') != undefined && jQuery(this).attr('target').toLowerCase() != '_blank') {
					setTimeout(function() { location.href = href; }, 200);
					return false;
				}
			});
		}
		else if (href && href.match(/^mailto\:/i)) {
			jQuery(this).click(function() {
				var mailLink = href.replace(/^mailto\:/i, '');
				_gaq.push(['_trackEvent', 'Email', 'Click', mailLink]);
			});
		}
		else if (href && href.match(filetypes)) {
			jQuery(this).click(function() {
				var extension = (/[.]/.exec(href)) ? /[^.]+$/.exec(href) : undefined;
				var filePath = href;
				_gaq.push(['_trackEvent', 'Download', 'Click-' + extension, filePath]);
				if (jQuery(this).attr('target') != undefined && jQuery(this).attr('target').toLowerCase() != '_blank') {
					setTimeout(function() { location.href = baseHref + href; }, 200);
					return false;
				}
			});
		}
	});
	

	
	
	
});


function trackOutboundLink(link, category, action,label) 
{ 
	try { 
		_gaq.push(['_trackEvent', category , action, label]); 
	} catch(err){}
	 
	setTimeout(function() {
		document.location.href = link.href;
	}, 100);
}
