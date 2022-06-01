var FX = ( function( FX, $ ) {


	$( () => {
		FX.ImageButtons.init()
	})


	FX.ImageButtons = {
		$slider: null,

		init() {
			this.$slider = $('.js-image-button')

			if( this.$slider.length ) {
				this.applySlick()
			}
		},

		applySlick() {
            this.$slider.slick( {
                infinite: true,
				slidesToShow: 4,
				dots: false,
				arrows: true,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 1199,
						settings: {
						  slidesToShow: 3,
						}
					},

					{
					  breakpoint: 767,
					  settings: 'unslick'
					}
				]
            });
		}
	}

	

	return FX

} ( FX || {}, jQuery ) )