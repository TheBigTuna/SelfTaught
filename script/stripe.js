// ----------------------- Test old school checkout stripe checkout ---------------------------------------
// var stripe = Stripe('pk_test_3hQM1mhjnqxX0QnMXwyKckiI00BQPBad03');

// var elements = stripe.elements();

// var card = elements.create('card', {
//   hidePostalCode: true,
//   style: {
//     base: {
//       iconColor: '#666EE8',
//       color: '#31325F',
//       lineHeight: '40px',
//       fontWeight: 300,
//       fontFamily: 'Helvetica Neue',
//       fontSize: '15px',

//       '::placeholder': {
//         color: '#CFD7E0',
//       },
//     },
//   }
// });
// card.mount('#card-element');

// function setOutcome(result) {
//   var successElement = document.querySelector('.success');
//   var errorElement = document.querySelector('.error');
//   successElement.classList.remove('visible');
//   errorElement.classList.remove('visible');

//   if (result.token) {
//     // In this example, we're simply displaying the token
//     successElement.querySelector('.token').textContent = result.token.id;
//     successElement.classList.add('visible');

//     // In a real integration, you'd submit the form with the token to your backend server
//     var form = document.getElementById('paymentForm');
//     form.querySelector('input[name="token"]').setAttribute('value', result.token.id);
//     form.submit();
//   } else if (result.error) {
//     errorElement.textContent = result.error.message;
//     errorElement.classList.add('visible');
//   }
// }

// card.on('change', function(event) {
//   setOutcome(event);
// });

// document.getElementById('paymentForm').addEventListener('submit', function(e) {
//   e.preventDefault();
//   var options = {
//     name: document.getElementById('first-name').value + " " + document.getElementById('last-name').value,
//     address_line1: document.getElementById('address-line1').value,
//     address_line2: document.getElementById('address-line2').value,
//     address_city: document.getElementById('address-city').value,
//     address_state: document.getElementById('address-state').value,
//     address_zip: document.getElementById('address-zip').value,
//     address_country: document.getElementById('address-country').value,
//   };
//   stripe.createToken(card, options).then(setOutcome);
// });




// ---------------------------Test checkout for stripe checkout -----------------------------------------------------
// (function() {
//   var stripe = Stripe('pk_live_P5VWUmIoIOIyV8y6Akn8oz7O00Pvg0oxFA');

//   var checkoutButton = document.getElementById('checkout-button-plan_H4MYkHgZIaB2qi');
//   checkoutButton.addEventListener('click', function () {
//     // When the customer clicks on the button, redirect
//     // them to Checkout.
//     stripe.redirectToCheckout({
//       items: [{plan: 'plan_H4MYkHgZIaB2qi', quantity: 1}],

//       // Do not rely on the redirect to the successUrl for fulfilling
//       // purchases, customers may not always reach the success_url after
//       // a successful payment.
//       // Instead use one of the strategies described in
//       // https://stripe.com/docs/payments/checkout/fulfillment
//       successUrl: window.location.protocol + '//mooresoftwaresolutions.com/success',
//       cancelUrl: window.location.protocol + '//mooresoftwaresolutions.com/canceled',
//     })
//     .then(function (result) {
//       if (result.error) {
//         // If `redirectToCheckout` fails due to a browser or network
//         // error, display the localized error message to your customer.
//         var displayError = document.getElementById('error-message');
//         displayError.textContent = result.error.message;
//       }
//     });
//   });
// })();