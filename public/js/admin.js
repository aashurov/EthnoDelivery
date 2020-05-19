function hideshow()
{

    var change_role = document.getElementById('change_role').value;
    switch (change_role) {
        case '0':
            document.getElementById('divBranch').style.display='none';
            document.getElementById('divCompany').style.display='none';
            document.getElementById('divAddress').style.display='none';
            // alert('Salom');
            break;
        case '1':
            document.getElementById('divBranch').style.display='unset';
            document.getElementById('divCompany').style.display='none';
            document.getElementById('divAddress').style.display='none';
            // alert('Salom Aleykum');
            break;
        case '2':
            document.getElementById('divBranch').style.display='unset';
            document.getElementById('divCompany').style.display='none';
            document.getElementById('divAddress').style.display='none';
            // alert('Salom Aleykum');
            break;
        case '3':
            document.getElementById('divBranch').style.display='unset';
            document.getElementById('divCompany').style.display='unset';
            document.getElementById('divAddress').style.display='none';
            // alert('Salom Aleykum');
            break;
        case '4':
            document.getElementById('divBranch').style.display='unset';
            document.getElementById('divCompany').style.display='unset';
            document.getElementById('divAddress').style.display='none';
            break;
        case '5':
            document.getElementById('divBranch').style.display='unset';
            document.getElementById('divCompany').style.display='none';
            document.getElementById('divAddress').style.display='unset';
            break;
        default:
            break;
    }


}
