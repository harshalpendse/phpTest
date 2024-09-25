<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryptocurrency Data Result</title>
</head>
<body>


<x-userNav> </x-navibar>
    <div  class='max-w-sm mx-auto my-6 bg-blue-300	 text-black rounded-lg shadow-md overflow-hidden pl-6 pt-6 px-10 pr-6 mt-4'>
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


@if(isset($error))
        <p>{{ $error }}</p>
    @else

    <div class="flex pl-32 flex-wrap -mx-4 overflow-auto"> 

@foreach($cryptoData as $crypto)
    <div class="flex flex-col font-semibold	 bg-blue-300	 p-6 rounded-lg shadow-md m-4 w-96">
        <h2 class="text-xl font-bold">{{ $crypto['symbol'] }}</h2>
        <p class="text-green-900 {{ $crypto['percent_change_24h'] < 0 ? 'text-red-500' : '' }}">
            {{ $crypto['percent_change_24h'] }}
        </p>
        <p class="text-black"><strong>Rank:</strong> {{ $crypto['cmc_rank'] }}</p>
        <p class="text-black"><strong>Price:</strong> {{ $crypto['price_usd'] }}</p>
    </div>
@endforeach

</div>

       
    @endif

    <!-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
       
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold">Bitcoin (BTC)</h2>
            <p class="text-green-500">+3.95%</p>
            <div class="mt-4">
                <p class="text-gray-700"><strong>Price:</strong> $44,238.57</p>
                <p class="text-gray-700"><strong>Rank:</strong> 1</p>
            </div>
        </div> -->


</body>
</html>
