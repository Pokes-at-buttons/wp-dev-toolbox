// === /ajax/ajax-handler.js ===

/**
 * A compact, reusable AJAX helper function for WordPress (frontend JS)
 *
 * @param {string} action - The WP action hook name (e.g., 'my_custom_action')
 * @param {Object} data - Data to send with the request
 * @param {Function} onSuccess - Callback for success
 * @param {Function} onError - Callback for error (optional)
 */
function wpAjax(action, data = {}, onSuccess, onError = console.error) {
    const payload = new FormData();
    payload.append('action', action);

    for (const key in data) {
        if (data.hasOwnProperty(key)) {
            payload.append(key, data[key]);
        }
    }

    fetch(ajaxurl, {
        method: 'POST',
        credentials: 'same-origin',
        body: payload,
    })
        .then((res) => res.json())
        .then((json) => onSuccess(json))
        .catch((err) => onError(err));
}

// Example usage:
// wpAjax('log_cat_feed', { cat_id: 1, time: '12:32' },
//   (response) => console.log('Success:', response),
//   (error) => console.warn('Error:', error)
// );
// Note: Ensure that `ajaxurl` is defined in your WordPress environment, typically localized via wp_localize_script.