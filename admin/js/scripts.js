ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });

$(document).ready(function () {
    console.log("dfdf");

    $('#selectAllBoxes').click(function (event) {
        if (this.checked) {
            $('.checkBoxes')
                .each(function () {
                    this.checked = true;
                });
        } else {
            $('.checkBoxes')
                .each(function () {
                    this.checked = false;
                });
        }
    })
});