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

// document.addEventListener('DOMContentLoaded', function () {
//     // Zoek alle gebruikerslijsten
//     const userItems = document.querySelectorAll('.user-item');
//
//     // Voeg een klikgebeurtenis toe aan elke gebruikerslijst
//     userItems.forEach(function (item) {
//         item.addEventListener('click', function () {
//             // Haal de gebruikersgegevens op uit de datatag
//             const userId = item.getAttribute('data-user-id');
//             const userRole = item.getAttribute('data-user-role');
//             const userName = item.getAttribute('data-user-name');
//             const userLangNr = item.getAttribute('data-user-langnr');
//             const userEmail = item.getAttribute('data-user-email');
//             const userUpdated = item.getAttribute('data-user-updated');
//
//             // Plaats de gebruikersgegevens in de pop-up
//             document.getElementById('popupuserid').innerText = userId;
//             document.getElementById('popupuserrole').innerText = userRole;
//             document.getElementById('popupusername').innerText = userName;
//             document.getElementById('popupuserlangnr').innerText = userLangNr;
//             document.getElementById('popupuseremail').innerText = userEmail;
//             document.getElementById('popupuserupdated').innerText = userUpdated;
//         });
//     });
// });
document.addEventListener('DOMContentLoaded', function () {
    const popup = document.getElementById('popup');
    popup.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const user = button.getAttribute('data-user');
        const userData = JSON.parse(user);

        document.getElementById('popupuserid').value = userData.id;
        document.getElementById('popupuserrole').value = userData.role;
        document.getElementById('popupuserlangnr').value = userData.GOARG_langNr;
        document.getElementById('popupuseremail').value = userData.email;
    });
});
