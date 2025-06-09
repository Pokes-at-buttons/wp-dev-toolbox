// === /ajax/fetch-async-await.js ===

async function submitDateWindow() {
    const fromDate = document.getElementById('from-date').value;
    const toDate = document.getElementById('to-date').value;

    const formData = new FormData();
    formData.append('action', 'renderSavedLines');
    formData.append('from_date', fromDate);
    formData.append('to_date', toDate);
    formData.append('nonce', mtsLocalize.ajax_nonce);

    try {
        const response = await fetch(mtsLocalize.ajax_url, {
            method: 'POST',
            credentials: 'same-origin',
            body: formData,
        });

        const html = await response.text();
        document.getElementById('everything').innerHTML = html;
        applyCheckboxLogic();
    } catch (error) {
        console.error('AJAX Error:', error);
    }
}

document.getElementById('date-window-submit').addEventListener('click', function (e) {
    e.preventDefault();
    submitDateWindow();
});