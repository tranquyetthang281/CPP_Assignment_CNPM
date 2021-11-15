$(document).ready(function () {
    //set image for input
    var DOMAIN = "http://localhost/Project/CPP_Assignment_CNPM/SourceMVC/admin";
    $('input[name="photo"]').change(function () {
        var input_image = $(this).val();
        input_image = input_image.substr(12, 999);
        $(".image-upload").css({
            "background-image": "url('http://localhost/Project/CPP_Assignment_CNPM/SourceMVC/admin/public/images/" + input_image + "')",
            width: "200px",
            height: "200px",
        });
    });
    $(".alert-add").fadeOut();
    $(".button-add").click(function () {
        var input_image = $("input[name='photo']").val();
        input_image = input_image.substr(12, 999);
        $.ajax({
            url: DOMAIN + "/Add/DoAdd",
            method: "post",
            data: {
                category: $("#input-category").val(),
                name: $(".input-name").val(),
                price: parseInt($(".input-price").val()),
                description: $(".input-description").val(),
                calories: parseInt($(".input-calories").val()),
                image: input_image,
            },
            success: function (result) {
                if (result == "failed") {
                    $(".alert-add").addClass("alert-danger");
                    $(".alert-add-text").text("Failed!! You should fill all input");
                    $(".alert-add").fadeIn();
                    setTimeout(function () {
                        $(".alert-add").fadeOut();
                        $(".alert-add-text").text("");
                        $(".alert-add").removeClass("alert-danger");
                    }, 3000);
                } else if (result == "false") {
                    $(".alert-add").addClass("alert-danger");
                    $(".alert-add-text").text("Error! Can't add into database");
                    $(".alert-add").fadeIn();
                    setTimeout(function () {
                        $(".alert-add").fadeOut();
                        $(".alert-add-text").text("");
                        $(".alert-add").removeClass("alert-danger");
                    }, 3000);
                } else {
                    $(".alert-add").fadeIn();
                    $(".alert-add").addClass("alert-success");
                    $(".alert-add-text").text("Success!!");
                    setTimeout(function () {
                        $(".alert-add").fadeOut();
                        $(".alert-add").removeClass("alert-success");
                        $(".alert-add-text").text("");
                    }, 3000);
                    //reset form and image
                    $("#form_add")[0].reset();
                    $(".image-upload").css({
                        "background-image": "none",
                        width: "0px",
                        height: "0px",
                    });
                }
            },
            error: function () {},
        });
    });
    $(".button-reset").click(function () {
        $(".image-upload").css({
            "background-image": "none",
            width: "0px",
            height: "0px",
        });
    });
});
