var FX = ( function( FX, $ ) {


	$( () => {
		FX.CardCarousel.init()
	})


	FX.CardCarousel = {
		$slider: null,

		init() {
			this.$slider = $('.js-card-slider')

			if( this.$slider.length ) {
				this.applySlick()
			}
		},

		applySlick() {
            this.$slider.slick( {
                infinite: true,
				slidesToShow: 3,
				dots: false,
				arrows: true,
				slidesToScroll: 1,
				responsive: [

					{
						breakpoint: 1199,
						settings: "unslick"
					}
				]
            });
		}
	}

	

	return FX

} ( FX || {}, jQuery ) )