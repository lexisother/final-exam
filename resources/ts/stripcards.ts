export {};

document.getElementById('create')!.addEventListener('click', () => {
  let el = document.getElementById('form')!;
  el.hidden = !el.hidden;
})
