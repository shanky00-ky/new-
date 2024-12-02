function proceedToPayment() {
    const teamName = document.getElementById('teamName').value;
    const coachName = document.getElementById('coachName').value;
    const contactEmail = document.getElementById('contactEmail').value;
    const contactPhone = document.getElementById('contactPhone').value;
    const player1Name = document.getElementById('player1Name').value;
    const player1Position = document.getElementById('player1Position').value;
    const data = [
        ['Team Name', teamName],
        ['Coach Name', coachName],
        ['Contact Email', contactEmail],
        ['Contact Phone', contactPhone],
        ['Player 1 Name', player1Name, 'Position', player1Position],
    ];

    
    const wb = XLSX.utils.book_new();
    const ws = XLSX.utils.aoa_to_sheet(data);

    
    XLSX.utils.book_append_sheet(wb, ws, 'Team Data');

   
    XLSX.writeFile(wb, 'team_registration.xlsx');

   
    window.location.href = 'payment.html'; 
}


(function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})();