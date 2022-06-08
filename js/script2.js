let karton = document.querySelectorAll('.likarton');

for (let i = 0; i < karton.length; i++) {
  karton[i].addEventListener('click', (event) => {
    let div = document.querySelectorAll('.kartondiv');

    if (div[i].classList.contains('hiddenRaspored')) {
      div[i].classList.remove('hiddenRaspored');
    } else {
      div[i].classList.add('hiddenRaspored');
    }
    // console.log(event.currentTarget);
    // console.log(karton);
  });
}
