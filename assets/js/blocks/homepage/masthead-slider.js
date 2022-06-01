var FX = ( function( FX, $ ) {


	$( () => {
		FX.HomepageMasthead.init()
	})


	FX.HomepageMasthead = {
		$slider: null,

		init() {
			this.$slider = $('.js-masthead-homepage-slider')

			if( this.$slider.length ) {
				this.applySlick()
			}
		},

		applySlick() {
            this.$slider.slick( {
                dots: false,
				arrows: true,
				fade: true,
                autoplay: false,
                autoplaySpeed: 5000,
            });
		}
	}

	

	return FX

} ( FX || {}, jQuery ) )