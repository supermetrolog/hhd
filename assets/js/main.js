function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function validateForm(form) {
    if (!form.name.length) {
        alert('Имя не должно быть пустым');
        return false;
    }
    if (form.name.length > 22) {
        alert('Имя не должно быть длиннее 22 символов');
        return false;
    }
    if (!form.email.length) {
        alert('Email не должен быть пустым');
        return false;
    }
    if (!validateEmail(form.email)) {
        alert('Email введен неверно');
        return false;
    }
    if (form.email.length > 255) {
        alert('Email не должен быть длиннее 255 символов');
        return false;
    }
    if (!form.content.length) {
        alert('Комментарий не должен быть пустым');
        return false;
    }
    if (form.content.length > 1000) {
        alert('Комментарий не должен быть длиннее 1000 символов');
        return false;
    }
    return true;
}

function serializeForm(formHtml) {
    let data = $(formHtml).serializeArray();
    let form = {};

    form.name = data.find((item) => item.name == 'name').value;
    form.email = data.find((item) => item.name == 'email').value;
    form.content = data.find((item) => item.name == 'content').value;
    return form;
}

function sendFormToServer(formdata) {
    $.ajax({
        url: '/create-comment.php',
        type: 'post',
        data: formdata,
        success: function(result) {
            $('#cards').html(result);
        }
    })
}
$(document).ready(function() {
    $('#form').on('submit', function(event) {
        event.preventDefault();
        let form = serializeForm(this);
        if (validateForm(form)) {
            $(this)[0].reset();
            sendFormToServer(form);
        }
        return false;
    });
});