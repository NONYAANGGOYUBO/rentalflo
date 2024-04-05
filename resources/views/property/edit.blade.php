<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>newproperty</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
</head>
<body>
    @extends('home.layout')

@section('content')

<div class="flex">
<h1 class="text-3xl font-bold font-aab ml-11 pt-7 text-gray-700">Properties</h1>
<h1 class=" text-sm  font-aab -ml-36 pt-20 text-gray-500 ">Fill new property details.</h1>
<a href="{{route('viewproperties')}}"><h1 class="bg-white border border-gray-200 ml-[1300px] h-10 w-28 mt-9 rounded-lg pl-6 pt-2" > <i class="fa-solid fa-arrow-left me-2"></i>  Back  </h1></a>
</div>

<div class=" flex  bg-white rounded-[6px] h-auto  w-[1600px]  border border-gray-200 pt-8 mt-7 ml-9  text-gray-500">
 <form action="{{route('update', $editdetails->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="flex">
        <div>
            <h1 class=" pl-8">Title</h1>
            <input type="text" name="title" placeholder="Enter property title/name"  value="{{old('title',$editdetails->title)}}"  class="border border-gray-200 w-[650px] ml-9 mt-4">
             <div class="mt-1 ml-10"> @error('title')
                 <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
        </div>



        <div>
            <h1 class=" pl-10">Address 1</h1>
            <input type="text" name="address1" placeholder="Enter address line-1" value="{{old('address1',$editdetails->address_1)}}"  class="border border-gray-200 w-[650px] ml-10 mt-4">
            <div class="mt-1 ml-10">
                 @error('address1')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>

        </div>
    </div>

    <div class="flex mt-5">
        <div>
            <h1 class=" pl-8">Address 2</h1>
            <input type="text" name="address2" placeholder="Enter address line 2" value="{{old('address2',$editdetails->address_2)}}"   class="border border-gray-200 w-[650px] ml-9 mt-4">
            <div class="mt-1 ml-10">
                @error('address2')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div>
             <h1 class=" pl-10">country</h1>
            {{-- <input type="text" name="title" placeholder="Enter address line-1" class="border border-gray-200 w-[650px] ml-10 mt-4"> --}}
            <div class="mt-2">
                <select id="country" name="country" autocomplete="countryname" class="block  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  w-[650px] ml-10">
                  <option>INDIA</option>
                  <option>CHINA</option>
                  <option>SRI LANKA</option>
                </select>
              </div>
              <div class="mt-1 ml-10">
                    @error('country')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
        </div>
    </div>

    <div class="flex mt-5">
        <div>
            <h1 class=" pl-8">state</h1>
            {{-- <input type="text" name="title" placeholder="select state" class="border border-gray-200 w-[650px] ml-9 mt-4"> --}}
            <div class="mt-2">
                <select id="state" name="state" autocomplete="statename" class="block  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  w-[650px] ml-10">
                <option>arunachal pradesh</option>
                <option>assam</option>
                <option>manipur</option>
                </select>
            </div>
            <div class="mt-1 ml-10">
                 @error('state')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div>
             <h1 class=" pl-10">city</h1>
            {{-- <input type="text" name="title" placeholder="select city" class="border border-gray-200 w-[650px] ml-10 mt-4"> --}}
            <div class="mt-2">
                <select id="city" name="city"  class="block  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  w-[650px] ml-10">
                  <option>itanagar</option>
                  <option>naharlagun</option>
                  <option>ziro</option>
                  <option>pasighat</option>
                  <option>daporijo</option>
                  <option>along</option>
                  <option>tawang</option>
                  <option>pakke kessang</option>
                  <option>bomdila</option>
                  <option>menchuka</option>
                  <option>namsai</option>

                </select>
              </div>
                     @error('city')
                         <span class="text-red-500">{{$message}}</span>
                     @enderror
               </div>
        </div>

    <div class="flex mt-5">
        <div>
            <h1 class=" pl-8">pinconde</h1>
            <input type="text" name="pincode" placeholder="Enter pincode" value="{{old('pincode',$editdetails->pincode)}}"   class="border border-gray-200 w-[650px] ml-9 mt-4">
            <div class="mt-1 ml-10">
                @error('pincode')
                <span class="text-red-500">{{$message}}</span>
                 @enderror
            </div>
        </div>

        <div>
            <h1 class=" pl-10">rent</h1>
            <input type="text" name="rent" placeholder="Enter rent amount"  value="{{old('rent',$editdetails->rent)}}"  class="border border-gray-200 w-[650px] ml-10 mt-4">
            <div class="mt-1 ml-10">
                @error('rent')
                <span class="text-red-500">{{$message}}</span>
                 @enderror
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h1 class=" pl-10">Description</h1>
        <textarea id="about" name="description" rows="5" class=" ml-8 pl-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            {{old('description',$editdetails->description)}} </textarea>

    </div>

    <div class="mt-4 pl-10">
        <label for="">file upload</label>
        <div class="mt-10">
            <input type="file" name="image" >

        </div>

    </div>

    <div>
        @if (session()->has('success'))
        <span class="text-green-500">
          {{session('success')}}
        </span>
      @endif
    </div>

     {{-- leaflet --}}
    <div id='justDoIt' class="h-[500px] border-b border-gray-300 mb-4 pb-4 pr-2 pl-2 mt-2">
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>

        // map initialization
        var coordinates;
        var map = L.map('justDoIt').setView([28.6139, 77.2090], 5);

        // layers
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        var myMarker = L.marker([28.6139, 77.2090])
        // myMarker.addTo(map) will add the marker
        myMarker.addTo(map)

        map.on('click',function(e) {
            myMarker.setLatLng(e.latlng)

            document.getElementById('latitude').value = e.latlng.lat;
            document.getElementById('longitude').value = e.latlng.lng;
        });

        myMarker.addTo(map);
        osm.addTo(map);

    </script>
    </div>
    <div class="mt-4 ml-5">
        <div  class="pl-4 pt-5">
            <label for="lat">latitude</label>
            <input type="number" id="latitude" step="0.0000000000000001" name="latitude" class="block border-gray-500">
        </div>
         <div class=" pl-4 pt-5">
             <label for="lng">longitude</label>
             <input type="number" id="longitude" step="0.0000000000000001" name="longitude" class="block">
         </div>
    </div>


    <div class="text-center bg-purple-600 w-28 h-8 ml-5 mt-3 text-white ">
    <input type="submit" value="save" >
    </div>
 </form>

</div>

@endsection

</body>
</html>


