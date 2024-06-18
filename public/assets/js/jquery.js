
$(document).ready(function() {
    $('#total').hide();
    $('#driver').hide();
    $('#duration').hide();
    $('#pricetotal').hide();

    var total = 0;
    var price = 0;
    var driver = 50000;

    function updateTotal() {
        if ($('#include_driver').is(':checked')) {
            total = (price + driver) * days;
        } else {
            total = price * days;
        }
        $('#field_total b').html('Rp ' + Number(total).toLocaleString());
        $('#totalrent').val(total);
    }

    // Function to calculate the number of rental days
    function calculateDays() {
        if ($('#start_date').val() && $('#end_date').val()) {
            var start = new Date($('#start_date').val());
            var end = new Date($('#end_date').val());
            if (start > end) {
                days = ''; // Set days as invalid
                // Update duration display
                $('#duration').slideDown();
                $('#field_duration b').html('Invalid date range');
                $('#pricetotal').slideUp();
            } else {
                days = Math.ceil((end - start) / (1000 * 60 * 60 * 24)) + 1;
                if (isNaN(days) || days <= 0) days = 1; // Ensure a minimum of 1 day
                // Update duration display
                $('#duration').slideDown();
                $('#field_duration b').html(days + ' day' + (days > 1 ? 's' : ''));
            }
    
        }
        updateTotal();
    }
    
    $('#car_id').change(function() {
        $('#total').slideDown();
        $.ajax({
            url: '/cars/' + $(this).val(),
            type: 'GET',
            success: function(data) {
                $('#image').css({
                    'background-image': 'url(/assets/img/cars/' + data.photo_url + ')',
                    'background-size': 'contain',
                    'background-position': 'center',
                    'background-repeat': 'no-repeat'
                });

                price = parseInt(data.price);
                $('#total').slideDown();
                $('#field_price b').html('Rp'+ Number(price).toLocaleString() + ' /day');
                calculateDays();
            }
        });
    });

    $('#include_driver').change(function() {
        if ($(this).is(':checked')) {
            $('#driver').slideDown();
        } else {
            $('#driver').slideUp();
        }
        updateTotal();
    });

    // Recalculate days and total price on date changes
    $('#start_date, #end_date').change(function() {
        if ($('#start_date').val() && $('#end_date').val()) {
            $('#pricetotal').slideDown();
        }
        calculateDays(); // Recalculate days and update total
    });

    $('form').on('submit', function(e) {
        e.preventDefault(); // Comment this out if present
        // Any custom logic
    });
});