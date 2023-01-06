
$forms.forEach(function(editor){
   if(editor.body){
        window[`editor${editor.id}`]?.setData(editor.body)
   }
})

range(5).forEach(function(val) {

$el(`#form-${val}`).addEventListener('submit', function(e){
    e.preventDefault();
    const formData =  new FormData(e.target)

    axios.post('/form', formData)
    .then(res => {
        alert('The form is saved')
    })
    .catch(error => {
        console.log(error)
    })
})

})

