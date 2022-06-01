var FX = ( function( FX, $ ) {


	$( () => {
		FX.ExclusiveSlider.init()
	})


	FX.ExclusiveSlider = {
		$slider: null,

		init() {
			this.$slider = $('.js-exclusive')

			if( this.$slider.length ) {
				this.applySlick()
			}
		},

		applySlick() {
            this.$slider.slick( {
                infinite: true,
                varableWidth: true,
				dots: false,
				arrows: true,
				slidesToScroll: 1,
                slidesToShow: 4,
                variableWidth: true,
				responsive: [
					{
						breakpoint: 1025,
						settings: {
						  slidesToShow: 3,
                          variableWidth: false,
						}
					},

					{
					  breakpoint: 767,
					  settings: {
						slidesToShow: 1,
                        variableWidth: false,
					  }
					}
				]
            });
		}
	}

	

	return FX

} ( FX || {}, jQuery ) )