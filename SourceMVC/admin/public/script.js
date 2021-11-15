$(document).ready(function () {
    $('input[name="photo"]').change(function () {
        var name = $(this).val();
        name = name.substr(12, 999);
        console.log(name);
        $(".image-upload").css({
            "background-image": "url('http://localhost/Project/CPP_Assignment_CNPM/SourceMVC/admin/public/images/" + name + "')",
            width: "200px",
            height: "200px",
        });
    });
});
