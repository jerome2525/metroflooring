var FX = ( function( FX, $ ) {


	$( () => {
		FX.PhotoGallery.init()
	})


	FX.PhotoGallery = {
		$slider: null,

		init() {
			this.$slider = $('.js-photo-gallery')

			if( this.$slider.length ) {
				this.applySlick()
			}
		},

		applySlick() {
            this.$slider.slick( {
                infinite: true,
				dots: false,
				arrows: true,
				slidesToScroll: 1,
                slidesToShow: 3,
				responsive: [
					{
					  breakpoint: 767,
					  settings: "unslick"
					}
				]
            });
		}
	}

	

	return FX

} ( FX || {}, jQuery ) )