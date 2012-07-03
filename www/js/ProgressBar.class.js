/**
 * objekt progressbaru
 *
 * @param site_identificator jednoznacne oznaceni strany
 *
 * @author Vlahovic
 * @since 2.7.12 16:38
 */
function ProgressBar(site_identificator){
	this.progress_bar_id = 'ProgressBar';
	this.site_identificator = site_identificator;
	this.waiting_string='Čekám na data...';

	/**
	* zobrazuje dialogove okno progressbaru
	*
	* @param title nazev okna
	*
	* @since 2.1.12 16:47
	* @author Vlahovic
	*/
	this.Show = function(title){
		// k telu pripoji div pro zobrazeni progressbaru
		$('body').append('<div id="' + this.progress_bar_id + '"></div>');
		// vyprazdni ho a vlozi do nej obsah
		$('div#' + this.progress_bar_id + '').empty().append('<span class="progress-info">' + this.waiting_string + '</span>' + '<div class="Bar"></div>');
		// zobrazi jako modalni dialog jquery
		$( '#' + this.progress_bar_id + '' ).dialog({
			title: title,
			modal: true,
			resizable: false,
			draggable: false,
			dialogClass: this.progress_bar_id,
			closeOnEscape: false,
			width: 500
		});

		// zobrazi teplomer
		$( 'div#' + this.progress_bar_id + ' div.Bar' ).progressbar({
			value: 0
		});

		// spusti jeho update
		setTimeout(function(){new ProgressBar(site_identificator).Update()}, 1000);
		return this;
	}


	/*
	 * skryje zaviraci krizek
	 *
	 * @since 3.7.12 9:01
	 * @author Vlahovic
	 */
	this.HideCloseTick = function(){
		$( '#' + this.progress_bar_id ).dialog( "option", "dialogClass", 'HideCloseTick' );
		return this;
	}

	/**
	* zjistuje aktualni hodnotu progressbaru a nastavuje ji
	*
	* @since 3.7.12 9:01
	* @author Vlahovic
	*/
	this.Update = function () {
		var progress;
		var info=this.waiting_string;
		var new_progress=0;
		var progress_bar_id=this.progress_bar_id;

		progress = $('div#' + progress_bar_id + ' div.Bar').progressbar("option","value");
		if (progress < 100) {
			// zpracuje formular
			$.ajax({
				type: 'POST',
				url: '/check',
				data: 'temporary_file_name=' + this.site_identificator + '&action=info',
				dataType: 'json',
				success: function(data) {
					// pokud uz neexistuje soubor s daty tak ukonci jeho loadovani
					if(data['file_exists'] == '0' || data['file_exists'] == 0){
						info = 'OK';
						new_progress=100;
					}
					else if (data['count_this'] > 0) {
						info = data['count_this'] + ' / ' + data['count_all'];
						new_progress = Math.floor(data['count_this'] / (data['count_all'] / 100));
					}
					else{
					}
					$('span.progress-info').html(info + (new_progress ? ' (' + new_progress + ' %)' : ''));
					$('div#' + progress_bar_id + ' div.Bar').progressbar("option", "value", new_progress);
					// dokud neni 100 % tak zjistuje stav
					if(new_progress<100){
						setTimeout(function(){new ProgressBar(site_identificator).Update()}, 1000);
					}
					// jak dosahne 100 % tak necha chvili viset info (kdyby refresh z nejakeho duvodu neprobehl...) a pak refreshne
					else{
						setTimeout(function(){
							new ProgressBar(site_identificator).Hide();
							location.reload();
						}, 1000);
					}
				}
			});
		}
		return this;
	}


	/**
	 * skryje
	 *
	 * @since 3.7.12 9:01
	 * @author Vlahovic
	 */
	this.Hide = function(){
		$('#' + this.progress_bar_id).dialog('destroy');
		return this;
	}
}