
console.log("working")
document.getElementById('toggle-theme').addEventListener('click', function() {
  const body = document.body;
  body.classList.toggle('dark-mode');
});
