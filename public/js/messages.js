const alertPlaceholder = document.getElementById('alertPlaceholder');

function call_alert(level, message)
{
    const alert = document.createElement('div');
    alert.innerHTML = '<div class="alert alert-' + level + ' alert-dismissible fade show" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    alertPlaceholder.append(alert);
}