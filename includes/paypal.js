// Listen for changes to the radio fields
document.querySelectorAll('input[name=payment-option]').forEach(function (el) {
   el.addEventListener('change', function (event) {
      // If PayPal is selected, show the PayPal button
      if (event.target.value === 'paypal') {
         document.querySelector('#card-button-container').style.display =
            'none';
         document.querySelector('#paypal-button-container').style.display =
            'inline-block';
      }

      // If Card is selected, show the standard continue button
      if (event.target.value === 'card') {
         document.querySelector('#card-button-container').style.display =
            'inline-block';
         document.querySelector('#paypal-button-container').style.display =
            'none';
      }
   });
});

// Hide Non-PayPal button by default
document.querySelector('#card-button-container').style.display = 'none';

// Render the PayPal button into #paypal-button-container
paypal
   .Buttons({
      style: {
         layout: 'horizontal',
      },
   })
   .render('#paypal-button-container');
