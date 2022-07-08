<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$('body').on('click', '.buy_now', function(e) {
    var totalAmount = $(this).attr("data-amount");
    var product_id = $(this).attr("data-id");
    var options = {
        "key": "rzp_test_HQVzoK0uL1YIpQ",
        "amount": (1 * 100), // 2000 paise = INR 20
        "name": "Tutsmake",
        "description": "Payment",
        "image": "https://www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
        "handler": function(response) {
            $.ajax({
                url: 'http://localhost/razorpay/razorpay/payment-process.php',
                type: 'post',
                dataType: 'json',
                data: {
                    razorpay_payment_id: response.razorpay_payment_id,
                    totalAmount: totalAmount,
                    product_id: product_id,
                },
                success: function(msg) {

                  console.log(msg);
                    // window.location.href = 'http://localhost/razorpay/success.php';
                }
            });

        },

        "theme": {
            "color": "#528FF0"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
    e.preventDefault();
});
</script>