range(5).forEach(function(val){
    ClassicEditor
    .create( document.querySelector( `.editor-${val}`), {

        licenseKey: '',

    } )
    .then( editor => {
        window[`editor${val}`] = editor;

    } )
    .catch( error => {
        console.error( 'Oops, something went wrong!' );
        console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
        console.warn( 'Build id: yjf4l01o2hvl-nohdljl880ze' );
        console.error( error );
    } );
})
