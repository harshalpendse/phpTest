<!DOCTYPE html>
<html lang="en">
<head>  
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    
    <x-userNav> </x-userNav>
    <div  class='max-w-sm mx-auto my-6 bg-white text-black rounded-lg shadow-md overflow-hidden pl-6 pt-6 px-10 pr-6 mt-4'>
    <h2 class="flex justify-center items-center text-2xl  font-bold mb-4">Search</h2> 
    <form action="{{ route('crypto.fetch') }}" method="GET">
        @csrf
        
        <!-- <label  for="symbols" placeholder ></label>
        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" type="text" id="symbols" name="symbols" required>
        <button class="display" type="submit">Search</button> -->
        <div class="bg-blue-500	 p-6 rounded-lg shadow-md">
        <div class="flex bg-blue-500	 items-center space-x-4">
            <input type="text" placeholder="Enter coin symbols"  type="text" id="symbols" name="symbols" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-black">
            <button class="px-4 display py-2 bg-black text-white rounded-lg  "type="submit">Search</button>
        </div>
    </div>
    </form>
    </div>

    </div>
    </form>
    </div>
    <div>
        
</body>
</html>
