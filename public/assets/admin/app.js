$(document).ready(function () {
    // clearMessage();
    console.log('Send AJAX...');
});
$(document).ready(function () {
    console.log('Complete AJAX...');
});

// const _fw_post_otp = async (post) => {
//     try {
//         const response = await axios({
//             method: 'post',
//             url: 'http://localhost:3000/auth/otp',
//             data: {
//                 otp: post.otp
//             }
//         });
//         return response;
//     } catch (errors) {
//         console.error(errors);
//     }
// }

const _fw_post = async (url, post) => {
    try {
        const response = await axios({
            method: 'post',
            url: url,
            data: post
        });
        return response;
    } catch (errors) {
        console.error(errors);
    }
}

const _fw_post_token = async (url, post, token) => {
    try {
        console.log(url, post, token)
        const config = {
            headers: {
                Authorization: 'Bearer ' + token
            }
        }
        return await axios.post(url,
            post,
            config)
            .then(res => res)
            .catch(err => err);
    } catch (errors) {
        console.error(errors);
    }
}
const _fw_pacth_token = async (url, patch, token) => {
    try {
        console.log(url, patch, token)
        const config = {
            headers: {
                Authorization: 'Bearer ' + token
            }
        }
        return await axios.patch(url,
            patch,
            config)
            .then(res => res)
            .catch(err => err);
    } catch (errors) {
        console.error(errors);
    }
}
const _fw_get_token = async (url, token) => {
    // console.log(url, token)
    try {
        const config = {
            headers: { Authorization: `Bearer ${token}` }
        };
        return await axios.get(url, config)
            .then(res => res)
            .catch(err => err);
    } catch (errors) {
        console.error(errors);
    }
}

const _fw_delete_token = async (url, token) => {
    try {
        const config = {
            headers: { Authorization: `Bearer ${token}` }
        };
        return await axios.delete(url, config)
            .then(res => res.data)
            .catch(err => err);
    } catch (errors) {
        console.error(errors);
    }
}

function automaticFill(row) {
    if (row !== undefined && row !== null) {
        $.each($(':input').not('input[type="radio"]'), function () {
            let input = $(this);
            let field = $(this).data('field');

            $.each(row, function (key, value) {
                if (field == key) {
                    if (value != null) {
                        input.val(value.toString());
                    } else {
                        input.val(value);
                    }
                    if (input.is('select')) {
                        let attrId = input.attr('id');
                        $('#' + attrId).trigger('change');
                    }
                }
            });
        });

        $.each($('input[type="radio"]'), function () {
            let input = $(this);
            let field = $(this).data('field');
            $.each(row, function (key, value) {
                if (field == key) {
                    if (input.val() !== undefined && value !== undefined) {
                        if (input.val().toLowerCase() == value.toLowerCase()) {
                            input.prop('checked', true);
                        }
                    }
                }
            });
        });
    }
}