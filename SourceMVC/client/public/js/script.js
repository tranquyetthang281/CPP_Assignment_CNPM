//scroll
var DOMAIN = "http://localhost/CPP_Assignment_CNPM/SourceMVC/client";
$(".categories").hide();

window.addEventListener("scroll", function () {
    if (window.scrollY >= 388) {
        $(".categories").fadeIn();
    } else {
        $(".categories").fadeOut();
    }
});
$(".scroll-menu").click(function () {
    var id = $(this).index() + 1;
    document.getElementById("menu" + id).scrollIntoView({ block: "center" });
});

// slide
var count = 0;
setInterval(function () {
    count = count > 3 ? 0 : count;
    doSlide(count);
    setCheck();
    count++;
}, 3000);
$(".bar").click(function () {
    count = $(this).index();
    doSlide(count);
    setCheck();
});

function doSlide(index) {
    var pixel = index * -695;
    $(".slides").css("margin-left", pixel + "px");
}
function setCheck() {
    var checked = document.getElementsByClassName("checked");
    $(".checked")[0].className = $(".checked")[0].className.replace(" checked", "");
    $(".bar")[count].className += " checked";
}
// cart
//update total price
function totalPrice() {
    var total = 0;
    $(".price-item-cart").each(function (index, val) {
        total += parseInt(val.textContent);
    });
    return total;
}
$(".total").text("Total: " + totalPrice() + "$");
// handle buy now click
$(".buy-now").click(function () {
    var item_id = $(this).attr("id").slice(4);
    $.ajax({
        url: DOMAIN + "/Cart/AddItem",
        method: "post",
        data: {
            item_id: item_id,
        },
        success: function (result) {
            $(".list-item-cart").html(result);
            $(".total").text("Total: " + totalPrice() + "$");
        },
    });
});
//handle increase decrease
$(".quantity-change").click(function () {
    //get id item
    var item_id = $(this).parent().parent().attr("id").slice(9);
    var val = parseInt($(this).parent().children(".number").text());
    if ($(this).hasClass("increase")) {
        val++;
    } else {
        val = val == 0 ? 0 : val - 1;
    }
    $(this).parent().children(".number").text(val);
    $.ajax({
        url: DOMAIN + "/Cart/updatePrice",
        method: "post",
        data: {
            item_id: item_id,
            val: val,
        },
        success: function (result) {
            // console.log(result);
            $("#cart-item" + item_id)
                .children(".price-item-cart")
                .text(result + "$");
            $(".total").text("Total: " + totalPrice() + "$");
        },
    });
});
// end cart
