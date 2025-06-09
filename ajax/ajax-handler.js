// === /ajax/jquery-ajax-example.js ===

$('#date-window-submit').on('click', function (e) {
    e.preventDefault();
    var fromDate = $('#from-date').val();
    var toDate = $('#to-date').val();

    $.ajax({
        url: mtsLocalize.ajax_url,
        type: 'POST',
        data: {
            action: 'renderSavedLines',
            from_date: fromDate,
            to_date: toDate,
            nonce: mtsLocalize.ajax_nonce
        },
        success: function (response) {
            $('#everything').html(response);
            applyCheckboxLogic();
        },
        error: function (xhr, status, error) {
            console.log('AJAX Error: ' + status + ' - ' + error);
        }
    });
});