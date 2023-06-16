$(function () {
    // input login class
    $('#login').submit(function (event) {
        event.preventDefault();
        let unindexed_array = $(this).serializeArray();
        let indexed_array = new Object();

        $.map(unindexed_array, function (n, i) {
            indexed_array[n['name']] = n['value'];
            if (unindexed_array.indexOf(i) !== -1) {
                indexed_array[n['name']] += ',';
            }
        });
        // console.log(indexed_array);
        $(document).Toasts('create', {
            class: 'bg-success',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        });
        // _fw_post(indexed_array)
        try {
            const url = 'http://localhost:3000/auth/email';
            const resultData = _fw_post(url ,indexed_array)
            resultData.then(function (result) {
                setTimeout(() => {
                    if (result.status === 201) {
                        console.log('berhasil');
                        const token = result.data.token;
                        window.localStorage.setItem('token', token);
                        console.log(result.data)
                        // $(document).Toasts('create', {
                        //     class: 'bg-success',
                        //     title: 'Toast Title',
                        //     subtitle: 'Subtitle',
                        //     body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                        // });
                        window.location.replace("http://localhost:8080/admin/otp");
                    }
                }, 2000);
            })
        } catch (error) {

        }
    });

});