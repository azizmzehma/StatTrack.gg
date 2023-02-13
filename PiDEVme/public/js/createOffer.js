$(document).ready(function() {
    // Add animation to form input field
    let inputField = document.getElementById("input-field");
    inputField.classList.add("animated", "animate__bounceIn", "delay-500");

// Add animation to form button
    let submitButton = document.getElementById("submit-button");
    submitButton.classList.add("animated", "animate__fadeIn", "delay-1000");
    // Define variables for the form elements
    var offerNameInput = $('#offer_name');
    var offerPriceInput = $('#offer_price');
    var offerDurationInput = $('#offer_duration');
    var offerSubmitBtn = $('#offer_submit_btn');

    // Add an event listener to the form submit button
    offerSubmitBtn.click(function(event) {
        event.preventDefault(); // prevent the form from submitting normally

        // Get the values from the form inputs
        var offerName = offerNameInput.val();
        var offerPrice = offerPriceInput.val();
        var offerDuration = offerDurationInput.val();

        // Validate the input fields
        if (offerName === '' || offerPrice === '' || offerDuration === '') {
            alert('Please fill out all fields.');
            return;
        }

        // Send an AJAX request to the server to create the new offer
        $.ajax({
            type: 'POST',
            url: '/create_offer',
            data: {
                name: offerName,
                price: offerPrice,
                duration: offerDuration
            },
            success: function(response) {
                // Handle the success response from the server
                alert('Offer created successfully!');
                // Reset the form inputs
                offerNameInput.val('');
                offerPriceInput.val('');
                offerDurationInput.val('');
            },
            error: function(response) {
                // Handle the error response from the server
                alert('There was an error creating the offer. Please try again later.');
            }
        });
    });
});
