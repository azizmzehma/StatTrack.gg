$(document).ready(function() {
    // Add animation to table rows
    $('tbody tr').addClass('animated animate__fadeIn');

    // Add event listener to delete offer buttons
    $('.delete-offer-btn').click(function(event) {
        event.preventDefault(); // prevent the link from being followed

        var deleteBtn = $(this); // the clicked delete button
        var offerId = deleteBtn.data('offer-id'); // the ID of the offer to delete

        // Send an AJAX request to the server to delete the offer
        $.ajax({
            type: 'POST',
            url: '/delete_offer/' + offerId,
            success: function(response) {
                // Handle the success response from the server
                alert('Offer deleted successfully!');
                // Remove the deleted offer row from the table
                deleteBtn.closest('tr').remove();
            },
            error: function(response) {
                // Handle the error response from the server
                alert('There was an error deleting the offer. Please try again later.');
            }
        });
    });
});
