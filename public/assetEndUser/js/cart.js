
$(document).ready(function() {
    // Plus button click event
    $('.btn-plus').click(function() {
      // Increment the quantity
      var cartId = $(this).data('cart-id');
      var quantityInput = $('#quantity_' + cartId);
      var currentQuantity = parseInt(quantityInput.val());
      var price = parseFloat($('#price_' + cartId).data('price'));

      quantityInput.val(currentQuantity + 1);

      // Recalculate the total
      var total = price * (currentQuantity + 1);
      $('#total_' + cartId).text('$' + total.toFixed(2));

      // Update the subtotal
      updateSubtotal();
      updateHiddenTotal();
    });

    // Minus button click event
    $('.btn-minus').click(function() {
      // Decrement the quantity, but ensure it doesn't go below 0
      var cartId = $(this).data('cart-id');
      var quantityInput = $('#quantity_' + cartId);
      var currentQuantity = parseInt(quantityInput.val());
      var price = parseFloat($('#price_' + cartId).data('price'));

      if (currentQuantity > 0) {
        quantityInput.val(currentQuantity - 1);

        // Recalculate the total
        var total = price * (currentQuantity - 1);
        $('#total_' + cartId).text('$' + total.toFixed(2));

        // Update the subtotal
        updateSubtotal();
        updateHiddenTotal();
      }
    });

    // Quantity input change event
    $('.quantity input').change(function() {
      var cartId = $(this).attr('id').split('_')[1];
      var quantity = parseInt($(this).val());
      var price = parseFloat($('#price_' + cartId).data('price'));

      // Recalculate the total
      var total = price * quantity;
      if (!isNaN(total)) {
        $('#total_' + cartId).text('$' + total.toFixed(2));
      }

      // Update the subtotal
      updateSubtotal();
      updateHiddenTotal();
    });

    // Add to Cart button click event
    $('.btn-add-to-cart').click(function() {
      var cartId = $(this).data('cart-id');
      var quantityInput = $('#quantity_' + cartId);
      var quantity = parseInt(quantityInput.val());
      var price = parseFloat($('#price_' + cartId).data('price'));

      if (quantity > 0) {
        var total = price * quantity;
        var cartItemHtml = '<div class="cart-item">' +
          '<span>Item: ' + cartId + '</span>' +
          '<span>Quantity: ' + quantity + '</span>' +
          '<span>Total: $' + total.toFixed(2) + '</span>' +
          '</div>';

        $('.cart-container').append(cartItemHtml);

        quantityInput.val(0);

        updateSubtotal();
        updateHiddenTotal();
      }
    });

    // Function to update the subtotal
    function updateSubtotal() {
      var subtotal = 0;

      $('.quantity input').each(function() {
        var cartId = $(this).attr('id').split('_')[1];
        var quantity = parseInt($(this).val());
        var price = parseFloat($('#price_' + cartId).data('price'));

        var total = price * quantity;
        if (!isNaN(total)) {
          subtotal += total;
        }
      });

      $('#subtotal').text('$' + subtotal.toFixed(2));

      updateTotal(subtotal);
    }

    // Function to update the total including shipping
    function updateTotal(subtotal) {
      var shippingPrice = parseFloat($('#shippingPrice').text().replace('$', ''));
      var totalWithShipping = subtotal + shippingPrice;

      $('#total').text('$' + totalWithShipping.toFixed(2));
    }

    // Function to update the hidden total input
    function updateHiddenTotal() {
      var total = parseFloat($('#total').text().replace('$', ''));
      $('#hiddenTotal').val(total.toFixed(2));
    }

    // Calculate and display initial totals and subtotal
    $('.quantity input').each(function() {
      var cartId = $(this).attr('id').split('_')[1];
      var quantity = parseInt($(this).val());
      var price = parseFloat($('#price_' + cartId).data('price'));

      var total = price * quantity;
      if (!isNaN(total)) {
        $('#total_' + cartId).text('$' + total.toFixed(2));
      }
    });

    updateSubtotal();
    updateHiddenTotal();
  });
