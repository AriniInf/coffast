$(document).ready(function() {
    //multi-items
    $("#multi-items").click(function() {
        var wrapper = $('.menu-fields');
        var wrapper1 = $('.jumlah-fields');
        $(wrapper).append("<div class='form-group'><input type='text' class='form-control' name='menu'></div>");
        $(wrapper1).append("<div class='form-group'><input type='text' class='form-control' name='jum'></div>");
    });

    //get val multi-tems
    $("#changes").click(function() {
        let values = [];
        let value = [];
        $.each($("input[name='menu']"), function() {
            values.push($(this).val());
        });
        $.each($("input[name='jum']"), function() {
            value.push($(this).val());
        });

        console.log(values.toString());
        console.log(value.toString());

        $('#menus').val(values.toString());
        $('#jumlahs').val(value.toString());

        $('#Simpan').prop('disabled', false);
    });
});