var FX = ( function( FX, $ ) {


	$( () => {
		FX.Date.init()
	})


	FX.Date = {

		init() {
			$( function() {
				$( "#datepicker1" ).datepicker();
				$( "#datepicker2" ).datepicker();
			} );



		},


	}

	

	return FX

} ( FX || {}, jQuery ) )