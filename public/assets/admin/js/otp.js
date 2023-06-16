$(function async() {
    // input otp class
    $('#otp').submit(function async(event) {
        event.preventDefault();
        let unindexed_array = $(this).serializeArray();
        let indexed_array = new Object();

        $.map(unindexed_array, function (n, i) {
            indexed_array[n['name']] = n['value'];
            if (unindexed_array.indexOf(i) !== -1) {
                indexed_array[n['name']] += ',';
            }
        });
        try {
            console.log(indexed_array)
            const urlOtp = 'http://localhost:3000/auth/otp';
            const resultData = _fw_post(urlOtp, indexed_array)
            resultData.then(function (result) {
                setTimeout(() => {
                    if (result.status === 201) {
                        console.log('berhasil');
                        const token = result.data.token;
                        window.localStorage.setItem('token', token);
                        window.location.replace("http://localhost:8080/admin/");
                    }else{
                        window.location.replace("http://localhost:8080/admin/otp");
                    }
                }, 2000);
            });
        } catch (error) {

        }
    });

});

// for get info after login
// const urlInfo = 'http://localhost:3000/auth/for-user-info';
// const token = window.localStorage.getItem('token');
// _fw_get_token(urlInfo, token)