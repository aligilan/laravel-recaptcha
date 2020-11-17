<script type="text/javascript">
    function myCustomValidation(token){
        const btns_with_recaptcha = $(".btn-with-recaptcha");
        let form;

        // Remove loading animation
        btns_with_recaptcha.removeAttr('disabled')
        $(`.btn-with-recaptcha .spinner`).remove();

        // On form submit
        btns_with_recaptcha.on('click', function(e){
            e.preventDefault();

            $(this).append(`<input type="hidden" name="token" value="${token}" />`);

            form = $(e.target).closest("form")[0];

            loading(`#${form.id}`);

            form.submit();
        });
    }
</script>

{!!
	htmlScriptTagJsApi([
		'action' => 'login',
		'custom_validation' => 'myCustomValidation'
	])
!!}