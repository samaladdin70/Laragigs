if (document.querySelector('#search') != undefined || document.querySelector('#search') != null || document.querySelector('#search+i') != undefined || document.querySelector('#search+i') != null) {
    document.querySelector('#search').oninput = () => {
        if (document.querySelector('#search').value != '') {
            document.querySelector('#search+i').style.display = 'none';
        } else {
            document.querySelector('#search+i').style.display = 'inline';
        }
    };

    document.querySelector('#search+i').onclick = () => {
        document.querySelector('#search').focus();
    };
}






onload = () => {
    if (document.querySelector('#search') != undefined || document.querySelector('#search') != null || document.querySelector('#search+i') != undefined || document.querySelector('#search+i') != null) {
        if (document.querySelector('#search').value != '') {
            document.querySelector('#search+i').style.display = 'none';
        }
    }


    if (document.querySelector('#flashMessage') != undefined || document.querySelector('#flashMessage') != null) {
        setTimeout(() => {
            document.querySelector('#flashMessage').classList.remove('d-flex');
            document.querySelector('#flashMessage').classList.add('d-none');
        }, 3000);
    }
}
