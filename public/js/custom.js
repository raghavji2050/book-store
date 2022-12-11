
$("body").on("click", ".add-to-cart", function() {
    var bookId = $(this).data('book-id');
    var quantity = $(this).parents('form:first .qty').val() || $('body .qty').val();

    $.ajax({
        url: "/cart/store",
        type: "POST",
        data: {
            book_id: bookId,
            quantity:  quantity
        },
        success: function(response) {
          $('.update-cart-div').html(response.myCartHtml);
          $('.cart-main-area-div').html(response.cartMainArea);
        }
    });
});

$("body").on("click", ".remove-from-cart", function() {
    var bookId = $(this).data('book-id');

    $.ajax({
        url: "/remove-cart",
        type: "POST",
        data: {
            book_id: bookId,
        },
        success: function(response) {
          $('.update-cart-div').html(response.myCartHtml);
          $('.cart-main-area-div').html(response.cartMainArea);
        }
    });
});

$("body").on("change", ".update-to-cart", function() {
    var bookId = $(this).data('book-id');
    var quantity = $(this).val();

    $.ajax({
        url: "/update-cart",
        type: "POST",
        data: {
            book_id: bookId,
            quantity: quantity
        },
        success: function(response) {
          $('.update-cart-div').html(response.myCartHtml);
          $('.cart-main-area-div').html(response.cartMainArea);
        }
    });
});

$("body").on("click", ".quick-view", function() {
    var bookId = $(this).data('book-id');

    $.ajax({
        url: `/product-detail-modal/${bookId}`,
        type: "GET",
        success: function(response) {
          $('.product-detail-modal-div').html(response);
          $('#productModal').modal('show');
        }
    });
});

$("body").on("change", "#ship-box", function() {
    let checked = $(this).is(":checked");

    $('body #ship-box-info input[required_if]').prop('required', checked);
    $('body #ship-box-info select[required_if]').prop('required', checked);
});

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
