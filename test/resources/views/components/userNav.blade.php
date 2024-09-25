<head>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

<style>
body {
  margin: 0;
  

}

.light-mode {
  background-color: #fff;
  color: #333;
}

.dark-mode {
  background-color: #41434B  ;
  color: #000;
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


 
<nav class="flex justify-center items-center bg-white p-0 ">  

<button id="toggle-button" class="toggle-button">Light Mode</button>
<script>
    const toggleButton = document.getElementById('toggle-button');
    const bodyElement = document.body;

    function toggleDarkMode() {
      bodyElement.classList.toggle('dark-mode');
      if (bodyElement.classList.contains  ('dark-mode')) {
        toggleButton.textContent = 'Dark Mode';
      } else {
        toggleButton.textContent = 'Light Mode';
      }
    }

    toggleButton.addEventListener('click', toggleDarkMode);
  </script>
<div class="px-6 py-4  flex items-center justify-between   ">
  <p class="text-gray-700 text-base  ">
      <img class="w-86 h-32 " src="https://cashrich.com/dynamic-sip-in-mutual-funds-app-india/assets/img/logo-withshadow.png" alt="" >
        </p>
  <div class="flex items-center">
  <div class="p-2 bg-white rounded text-xl">{{ Auth::user()->name }}  </div>
          
 </div>



       
</nav>