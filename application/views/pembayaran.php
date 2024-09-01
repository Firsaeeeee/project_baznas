<!DOCTYPE html>
<html>
<head>
    <title>Stripe Payment</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <h2>Bayar dengan Stripe</h2>
    <form action="charge.php" method="post" id="payment-form">
        <div id="card-element"></div>
        <button id="submit">Bayar</button>
        <div id="error-message"></div>
    </form>

    <script>
        var stripe = Stripe('pk_test_your_public_key'); // Ganti dengan kunci publik Anda
        var elements = stripe.elements();
        var card = elements.create('card');
        card.mount('#card-element');

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    document.getElementById('error-message').textContent = result.error.message;
                } else {
                    var form = document.getElementById('payment-form');
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);
                    form.submit();
                }
            });
        });
    </script>
</body>
</html>
