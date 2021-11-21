    <!--Detail-->
    <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content proper">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title " id="title">BURGER BÒ NƯỚNG WHOPPER</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6"><img src="./img/burger.png" alt="  " /></div>
                            <div class="col-md-6">
                                <div class="disc">
                                    <p>Burger bò nướng whopper</p>
                                </div>
                                <div class="calories">
                                    <div class="row  row1 ">
                                        <p style="margin: 0 auto">520 Calories</p>
                                    </div>
                                    <div class="row row2">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <p>Fat</p>
                                            </div>
                                            <div class="row">
                                                <p>14g</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <p>Carbs</p>
                                            </div>
                                            <div class="row">
                                                <p>85g</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <p>Fiber</p>
                                            </div>
                                            <div class="row">
                                                <p>1g</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <p>Protein</p>
                                            </div>
                                            <div class="row">
                                                <p>12g</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-9">
                                        <label for="buttons_added"><b>Số lượng:</b></label><br>
                                        <div class="buttons_added">
                                            <input class="minus is-form" type="button" value="-" onclick=" decPrice()">
                                            <input aria-label="quantity" class="input-qty" max="10" min="0" name="soluong" type="number" value="0">
                                            <input class="plus is-form" type="button" value="+" onclick=" incPrice()">
                                        </div>
                                    </div>
                                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                                        <span id="price"> 0đ </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="button" class="btn btn-danger">Thêm vào giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        $('input.input-qty').each(function() {
            var $this = $(this),
                qty = $this.parent().find('.is-form'),
                min = Number($this.attr('min')),
                max = Number($this.attr('max'))
            if (min == 0) {
                var d = 0
            } else d = min
            $(qty).on('click', function() {
                if ($(this).hasClass('minus')) {
                    if (d > min) {
                        d += -1;
                        document.getElementById("price").innerText = Number(d) * 200 + ".000đ";
                    }
                } else if ($(this).hasClass('plus')) {
                    var x = Number($this.val()) + 1
                    if (x <= max) {
                        d += 1;
                        document.getElementById("price").innerText = Number(d) * 200 + ".000đ";
                    }
                }
                $this.attr('value', d).val(d)
            })
        })
    </script>