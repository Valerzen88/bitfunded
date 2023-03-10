$(document).ready(function() {
	if (typeof onMobile === 'undefined'){
		//SCROLL TO TOP LINKS
		$("a[href='#top']").click(function() {
		  $("html, body").animate({ scrollTop: 0 }, 300);
		  return false;
		});
	
		//TOOLTIPS
		$('[data-tooltip!=""]').qtip({ // Grab all elements with a non-blank data-tooltip attribute.
		    content: { attr: 'data-tooltip' }, // use the attribute for the tooltip contents
		    style: { classes: 'qtip-dark qtip-rounded qtip-shadow poloTooltips' }
		});
		function updateTooltip( element, message ){
		    element.attr('data-tooltip', message);
		    element.qtip('option', 'content.text', message);
		}
	}

	$("#criticalMessage .close a").click(function() {
	  var type = $('#criticalMessage').data('type');
	  if (type=='liquidation'){
			$.get('/private.php?command=dismissLiquidationAlert').done(function(d) {
				$('#criticalMessage').fadeOut(300);
			});
	  } else {
		  $('#criticalMessage').fadeOut(300);
		  if (type == 'margin-shutdown') {
		    // do not insert into localStorage, you can only dismiss for a single page load
        return;
      }
		  var dismissed = Math.floor(Date.now() / 1000);
		  var localEX = localStorage["alertDismissals"];
		  var settings = {};
		  if (typeof(localEX) != 'undefined')
			  settings = JSON.parse(localEX);
		  settings[type] = dismissed;
		  localStorage.setItem('alertDismissals', JSON.stringify(settings));
	  }
	});

  function checkNotifications(){
    $.getJSON('/private?command=checkNotifications',function(d) {
      if (d.liquidation == true) {
        criticalMessage('liquidation');
      } else if (d.marginCall == true) {
        criticalMessage('margin');
      } else if (d.shutdown) {
        criticalMessage('margin-shutdown', d.shutdown);
      } else if ($('#criticalMessage').is(':visible') && $('#criticalMessage').data('type') != "incompleteProfile" && $('#criticalMessage').data('type') != "profileError" && $('#criticalMessage').data('type') != "accountFrozen") {
        $('#criticalMessage').fadeOut(300);
      }

    });
  }
	
	function navNotification (item, level){ 
		li = $('.header a[href$="'+item+'"]');
		$(li).parent().append('<span class="notificationIcon '+level+'"></span>');
		$(li).parent().parent().parent().find('.title').append('<span class="notificationIcon '+level+'"></span>');
		$('.collapsedNav .topLevel').append('<span class="notificationIcon '+level+'"></span>');
	}
	
	if (loggedIn){
		checkNotifications();
		setInterval(checkNotifications, 45000);
		if (!twoFa)
			navNotification("2fa", "error");
	}
});

function setCanonical(path){
	document.querySelector("link[rel='alternate']").setAttribute("href", "https://m.poloniex.com/" + path);
}