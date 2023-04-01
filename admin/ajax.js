function readURL(input, ids) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(ids).attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
