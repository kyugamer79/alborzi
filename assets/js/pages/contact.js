function consntactForm() {
    const form = document.querySelector('#contact-form');
    if (!form) {
        console.warn('form element is not selected');
        return;
    }


    form.addEventListener('submit', (e) => {
        e.preventDefault(); //prevent refresh page

        const formData = new FormData(form); //get form input values


        jQuery(($) => {
            $.ajax({
                type: "POST",
                url: restDetails.url + 'cyn-api/v1/contact-form', //this route must be created on backend
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                //this happen after api call successfully
                success: (res) => {
                    form.reset();
                    console.log(res);
                },

                //this happen after api call unsuccessfully
                error: (err) => {
                    console.log(err);
                }
            })
        });
    })
}

consntactForm();