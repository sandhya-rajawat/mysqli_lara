<div>
    <!-- <pre>
    {{
        print_r($api);
    }}
    </pre> -->
  

@vite('resources/css/app.css')
@foreach($api as $apis)
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden p-4 space-y-4">
    <h1 class="text-xl font-semibold text-blue-600">{{ $apis['author'] }}</h1>

    <p class="text-lg font-medium text-gray-800">{{ $apis['title'] }}</p>

    <img src="{{ $apis['urlToImage'] }}" alt="Image" class="w-full h-48 object-cover rounded-md">

    <p class="text-gray-600">{{ $apis['description'] }}</p>

    <a href="{{ $apis['url'] }}" target="_blank" class="inline-block text-sm text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded transition">Read more</a>
</div>

@endforeach



</div>

