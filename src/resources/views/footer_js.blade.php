<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script>
    /*Loading spinner*/
    function loading(target_id){
        if(!$(target_id).hasClass('overlay-container')){
            $(target_id).addClass('overlay-container');

            $(target_id).append(`
				<div class="my-overlay">
					<div class="spinner"></div>
				</div>
			`);
        }else{
            $(target_id).removeClass('overlay-container');
            $(target_id + ' .my-overlay').remove();
        }
    }
</script>
