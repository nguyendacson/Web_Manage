document.addEventListener("DOMContentLoaded", function() {
    var successAlert = document.getElementById('alertsucces');

    if (successAlert) {
        setTimeout(function() {
            successAlert.classList.add('hide-complete');
            setTimeout(function() {
                successAlert.classList.add('hide');
            }, 2000);
        },2500);
    }
});

