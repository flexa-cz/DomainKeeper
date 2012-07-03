function Navigation(){
	this.nav_id='GenNav';
	this.subnav_id='Subnavigation';

	/**
	 * povesi klikaci metody na vsechny odkazy v menu
	 *
	 * @since 3.7.12 9:34
	 * @author Vlahovic
	 */
	this.Init = function(){
		$('#' + this.nav_id + ' a').click(
		function(ev){
			// stopne akci odkazu
			ev.preventDefault();
			var el_class=$(this).attr('class');
			var d=$('#' + this.subnav_id + ' div#' + el_class).css('display');
			new Navigation().Hide();
			if(d!='block'){
				new Navigation().Show(el_class);
			}

		});
		return this;
	}

	/**
	* zobrazi podnavigaci prislusejici menu buttonu, na ktery bylo kliknuto
	*
	* @param el_class trida buttonu na ktery bylo kliknuto
	*
	* @since 3.1.12 8:18
	* @author Vlahovic
	*/
	this.Show = function(el_class){
		var el='#' + this.subnav_id + ' div#' + el_class;
		$('#' + this.nav_id + ' a.' + el_class).addClass('Active').parent('li').addClass('Active');
		$(el).show('slow');
		return this;
	}

	/**
	* skryje vsechny zobrazena okna podnavigace
	*
	* @since 3.1.12 8:17
	* @author Vlahovic
	*/
	this.Hide = function(){
		$('#' + this.nav_id + ' a.Active, #' + this.nav_id + ' li.Active').removeClass('Active');
		$('#' + this.subnav_id + ' div').hide('slow');
		return this;
	}
}