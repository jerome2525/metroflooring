var FX = ( function( FX, $ ) {


	$( () => {
		FX.LogoCarousel.init()
	})


	FX.LogoCarousel = {
		$slider: null,

		init() {
			this.$slider = $('.js-logo-carousel')

			if( this.$slider.length ) {
				this.applySlick()
			}
		},

		applySlick() {
            this.$slider.slick( {
                infinite: true,
				slidesToShow: 8,
				dots: false,
				arrows: true,
				slidesToScroll: 1,
				centerMode: true,
				centerPadding: "70px",
				responsive: [

					{
						breakpoint: 1499,
						settings: {
						  slidesToShow: 5,
						  centerMode: true,
						  centerPadding: "70px"
						}
					},
					{
						breakpoint: 1201,
						settings: {
						  slidesToShow: 4,
						}
					},
					{
						breakpoint: 1025,
						settings: {
						  slidesToShow: 3,
						}
					},

					{
					  breakpoint: 767,
					  settings: {
						slidesToShow: 1,
					  }
					}
				]
            });
		}
	}

	

	return FX

} ( FX || {}, jQuery ) )