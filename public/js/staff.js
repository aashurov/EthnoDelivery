function fun_showtextbox() {
    var statusbox = document.getElementById('chkYes1').checked;
    // alert('asas');
    if (statusbox) {
        document.getElementById('dvPinNo3').style.display = 'unset';
        document.getElementById('dvPinNo4').style.display = 'none';

        // alert(statusbox);

    } else if (!statusbox) {
        document.getElementById('dvPinNo3').style.display = 'none';
        document.getElementById('dvPinNo4').style.display = 'unset';
        // alert(statusbox);
    }



}
