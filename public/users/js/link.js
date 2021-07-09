const link = document.querySelectorAll('.link');

link.forEach(function (atag) {
  const linkText = atag.textContent.trim();

  function changingSourc(source, pageName) {
    if (linkText === pageName) {
      atag.children[0].children[0].setAttribute('src', source);
    }
  }

  if (atag.href === window.location.href) {
    atag.classList.add('active');

     changingSourc('http://127.0.0.1:8000/users/icon/Dashboard-active.svg', 'dashboard');
     changingSourc('http://127.0.0.1:8000/users/icon/Flats-active.svg' ,'flats');
     changingSourc('http://127.0.0.1:8000/users/icon/Flats-active.svg' ,'renter');
     changingSourc('http://127.0.0.1:8000/users/icon/Accounts-active.svg','accounts');
     changingSourc('http://127.0.0.1:8000/users/icon/building-active.svg', 'buildings');
     changingSourc('http://127.0.0.1:8000/users/icon/Taka-active.svg', 'rent collection');
    //http://127.0.0.1:8000/users/icon/Accounts-active.svg
    // changingSourc(src="{{asset('users/icon/Accounts-active.svg')}}" ,'accounts');
  }
});
