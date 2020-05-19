 function fun_showtextbox()
{
    var statusbox = document.getElementById('ddColor').value;
    if(statusbox==7)
    {
         document.getElementById('dvPinNo5').style.display='unset';
         document.getElementById('dvPinNo6').style.display='none';

        //  alert(statusbox);

    }
    else if (statusbox==9)
    {
        document.getElementById('dvPinNo6').style.display='unset';
        document.getElementById('dvPinNo5').style.display='none';

        //  alert(statusbox);
    }
    else
    {
        document.getElementById('dvPinNo6').style.display='none';
        document.getElementById('dvPinNo5').style.display='none';

        //  alert(statusbox);
    }


}
