<div class="payment-method">
    <div class="payment-accordion">
        <div class="collapses-group">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Direct Bank Transfer
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in " role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Cheque Payment
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a  role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Stripe
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                          <form action="{{ route('checkout.store') }}" method="post" id="subscribe-form">
                            @csrf

                            <input type="hidden" id="card-holder-name" value="{{ $user->full_name }}"/>

                            <div class="col-12">
                              <div id="card-element" class="form-control">
                            </div>
                            <span class="invalid-feedback d-block" role="alert" id="card-errors">
                            </span>
                            <div class="order-button-payment">
                              <input type="submit" value="Place order" id="card-button" data-secret="{{ $intent->client_secret }}" />
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
  <script src="https://js.stripe.com/v3/"></script>

  <script>
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');
    var elements = stripe.elements();

    var style = {
      base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
          color: '#aab7c4'
        }
      },
      invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
      }
    };

    var card = elements.create('card', {hidePostalCode: true, style: style});
    card.mount('#card-element');

    card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');

    const clientSecret = cardButton.dataset.secret;

    cardButton.addEventListener('click', async (e) => {
      e.preventDefault();
      $('#card-button').val('Placing Order...');
      $('#card-button').prop('disabled', true);

      const { setupIntent, error } = await stripe.confirmCardSetup( clientSecret, {
        payment_method: {
          card: card,
          billing_details: { name: cardHolderName.value }
        }
      });

      if (error) {
        var errorElement = document.getElementById('card-errors');
        errorElement.textContent = error.message;

        $('#card-button').val('Place Order');
        $('#card-button').prop('disabled', false);
      } else {
        paymentMethodHandler(setupIntent.payment_method);
      }
    });

    function paymentMethodHandler(payment_method) {
      var form = document.getElementById('subscribe-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'payment_method');
      hiddenInput.setAttribute('value', payment_method);
      form.appendChild(hiddenInput);

      form.submit();
    }
  </script>

@endsection
