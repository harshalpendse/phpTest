<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
body {
  font-family: sans-serif;
  margin: 0;
  padding: 20px;
  transition: background-color 0.5s ease; /* Add smooth transition */
}

.light-mode {
  background-color: #fff;
  color: #333;
}

.dark-mode {
  background-color: #222;
  color: #eee;
}

.toggle-button {
  position: fixed;
  top: 20px;
  right: 20px;
  padding: 10px 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  background-color: #eee;
  color: #333;
}
</style>
</head>
<body class="light-mode">
<button id="toggle-button" class="toggle-button">Light Mode</button>
  <h1>This is the content</h1>
  <p>You can switch between light and dark mode using the button.</p>

  <script>
    const toggleButton = document.getElementById('toggle-button');
    const bodyElement = document.body;

    function toggleDarkMode() {
      bodyElement.classList.toggle('dark-mode');
      if (bodyElement.classList.contains('dark-mode')) {
        toggleButton.textContent = 'Dark Mode';
      } else {
        toggleButton.textContent = 'Light Mode';
      }
    }

    toggleButton.addEventListener('click', toggleDarkMode);
  </script>
    <nav>
        <img src="images/logo.png" alt="">
    </nav>
</body>
</html>


