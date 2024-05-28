import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    const enterpriseSelect = document.getElementById('enterpriseSelect');
    const leverancierField = document.getElementById('leverancierField');
    const enterpriseAdress = document.getElementById('enterpriseAdress');

    enterpriseSelect.addEventListener('change', function () {
        if (enterpriseSelect.value === 'no') {
            leverancierField.classList.remove('hidden');
            enterpriseAdress.classList.add('hidden');
        } else if (enterpriseSelect.value === 'yes') {
            leverancierField.classList.add('hidden');
            enterpriseAdress.classList.remove('hidden');
        } else {
            leverancierField.classList.add('hidden');
            enterpriseAdress.classList.add('hidden');
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const dateInput = document.getElementById('start');

    // Get the current date
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-based
    const day = String(today.getDate()).padStart(2, '0');

    // Format the date to YYYY-MM-DD
    const formattedDate = `${year}-${month}-${day}`;

    // Set the value, min, and max attributes
    dateInput.value = formattedDate;
    dateInput.min = `${year}-01-01`; // Example: Start of the current year
    dateInput.max = `${year}-12-31`; // Example: End of the current year
});
