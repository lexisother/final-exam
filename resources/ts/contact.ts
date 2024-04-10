export {};

window.addEventListener('submit', (e) => {
  e.preventDefault();

  let el = document.getElementById('notice')!;
  el.hidden = false;
  setTimeout(() => {
    el.hidden = true;
  }, 1000);
});
