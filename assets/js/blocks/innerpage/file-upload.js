var FX = ( function( FX, $ ) {


	$( () => {
		FX.FileUpload.init()
	})


	FX.FileUpload = {
		$slider: null,

		init() {
			$('#file-upload').change(function() {
				var filepath = this.value;
				var m = filepath.match(/([^\/\\]+)$/);
				var filename = m[1];
				$('#filename').html(filename);
			});
		},
	}

	

	return FX

} ( FX || {}, jQuery ) )