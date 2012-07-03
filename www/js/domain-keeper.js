
$(document).ready(function() {
	// odkazy hlavni navigace
	new Navigation().Init();

	// formular pro obnoveni dat - chyceni odeslani, spusteni ajaxem, zobrazeni popupu s progressbarem
	$('#Refresh form input[type=submit]').click(
		function(ev){
			// inicializace
			var post_data=new Array();
			var si=site_identificator;
			// stopne akci tlacitka
			ev.preventDefault();
			// skryje formular
			new Navigation().Hide();
			// posklada data pro post
			post_data['domains']=($('#Refresh form input#domains').is(':checked') ? 1 : 0);
			post_data['tests']=($('#Refresh form input#tests').is(':checked') ? 1 : 0);
			post_data['cron']=($('#Refresh form input#cron').is(':checked') ? 1 : 0);
			// v hlavicce kazde strany - unikatni identifikator
			post_data['temporary_file_name']=si;

			// zobrazuje progress bar
			if(post_data['domains'] || post_data['tests'] || post_data['cron']){
				// samotny progressbar uz se v pravidelnych intervalech pta jak probiha obnoveni na zakladi site_identificator...
//				progressbar('obnovenĂ­ dat',si,0,post_data);
				new ProgressBar(si).Show('obnovení dat').HideCloseTick();

				// data pro post
				var data='action=check&temporary_file_name=' + si;

				// spusti obnoveni
				$.ajax({
					type: 'POST',
					url: '/check',
					data: data,
					success: function(succ){
					}
				});
			}
			// nebo info o tom, ze je potreba neco zvolit
			else{
				info_dialog('obnovení dat','Musíte zvolit jaká data chcete obnovit.',3);
			}

			// debug
//			alert_r(post_data);
		}
	);

});

/**
 * pole vyhodi jako retezec v alert okne
 *
 * @param arr
 *
 * @since 3.1.12 8:17
 * @author Vlahovic
 */
function alert_r(arr){
	alert(arr2str(arr));
}

/**
 * prevede pole na retezec - k debug ucelum
 *
 * @param arr pole k prevedeni
 * @param html boolean zda se bude vypisovat v html, nebo v txt - ma vliv na konce radku
 * @return string
 *
 * @since 3.1.12 8:16
 * @author Vlahovic
 */
function arr2str(arr,html){
	var br=(html ? '<br>' : "\r\n")
	var t=(html ? '&nbsp;&nbsp;' : "\t")
	var a='array{' + br;
	for(var i in arr)
	{
			a=a + t + i + ':' + (arr[i]) + br;
	}
	a=a + '}';
	return a;
}


/**
 * dialogove okno informacniho charakteru
 *
 * @param title nazev okna
 * @param content obsah okna
 * @param timer [optional] cas za jaky se ma okno skryt (v sekundach)
 * @param hide_close_tick [optional] zda se ma skryt krizek pro zavreni; 1=hide
 *
 * @since 2.1.12 16:51
 * @author Vlahovic
 */
function info_dialog(title,content,timer,hide_close_tick){
	// k telu pripoji div pro zobrazeni progressbaru
	$('body').append('<div id="InfoDialog"></div>');
	// vyprazdni ho a vlozi do nej obsah
	$('div#InfoDialog').empty().append(content);
	// zobrazi jako modalni dialog jquery
	$( "#InfoDialog" ).dialog({
		title: title,
		modal: true,
		resizable: false,
		draggable: false,
		dialogClass: 'InfoDialog',
		width: 500
	});
	// skryje zaviraci krizek
	if(hide_close_tick){
		$( "#InfoDialog" ).dialog( "option", "dialogClass", 'HideCloseTick' );
	}
	// zavre v nastavenem case
	if(timer){
		timer=timer*1000;
		$( "#InfoDialog" ).delay(timer).queue(function(){$(this).dialog('close');});
//		$( "#InfoDialog" ).delay(800).dialog('close');
	}
}