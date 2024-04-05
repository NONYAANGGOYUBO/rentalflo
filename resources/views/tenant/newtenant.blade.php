
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>newtenant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
</head>
<body>
    @extends('home.layout')

@section('content')

<div class="flex">
<h1 class="text-3xl font-bold font-aab ml-11 pt-7 text-gray-700">Tenant</h1>
<h1 class=" text-sm  font-aab -ml-[90px] pt-20 text-gray-500 ">Fill new tenant details.</h1>
{{-- <div class="bg-purple-300 rounded-full h-[110px] w-[170px] content-center " >  </div> --}}
{{--<i class="fa-solid fa-pen"></i>--}}
<a href="{{route('viewtenant')}}"><h1 class="bg-white border border-gray-200 ml-[1300px] h-10 w-28 mt-9 rounded-lg pl-6 pt-2" > <i class="fa-solid fa-arrow-left me-2"></i>  Back  </h1></a>
</div>

<div class=" flex  bg-white rounded-[6px] h-auto  w-[1600px]  border border-gray-200 pt-8 mt-7 ml-9  text-gray-500">
 <form action="{{route('storetenantdata')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex justify-center -mt-[58px]  mb-3 ">
        <div class="bg-purple-300 rounded-full h-[120px] w-[120px]  " ><button class=""> <i class="fa-solid fa-pen ml-14 mt-24"></i> </button> </div>
    </div>
    <hr class="ml-8 ">
    <div class="flex mt-4">
        <div>

            <h1 class=" pl-8">Name</h1>
            <input type="text" name="name" placeholder="Enter name"  value="{{old('name')}}"  class="border border-gray-200 w-[650px] ml-9 mt-4">
             <div class="mt-1 ml-10"> @error('title')
                 <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
        </div>



        <div>
            <h1 class=" pl-10">Contact No</h1>
            <input type="text" name="contactno" placeholder="Enter contact number" value="{{old('contactno')}}"  class="border border-gray-200 w-[650px] ml-10 mt-4">
            <div class="mt-1 ml-10">
                 @error('address1')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>

        </div>
    </div>


    <div>
         <h1 class=" pl-8 mt-3">Contact Email</h1>
            <input type="text" name="contactemail" placeholder="Enter your email" value="{{old('contactemail')}}"   class="border border-gray-200 w-[650px] ml-9 mt-2">
            <div class="mt-1 ml-10">
                @error('address2')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
    </div>



    <div class="mt-5">
        <h1 class=" pl-10">Address </h1>
        <textarea id="address" name="address" rows="3"   class=" ml-8 pl-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            {{old('description')}}  </textarea>

    </div>

    <div class=" w-[1500px]  h-28 mt-7 ml-9 border-b-[1px] border-t-[1px]" >
            <h1 class="ml-6 pt-3">Add member <i class="fa-solid fa-plus ml-[1300px] mt-6 bg-purple-800 h-8 w-10 text-center pt-2 text-white rounded-[6px]"></i></h1>

    </div>
    <div class="border-b-[1px]  w-[1500px] ml-9 h-24">
        <div class="mt-6 pl-7">
            <label for="">File Upload (ID Proof - Aadhaar card, Pan card, Voter Id, License...)</label>
                <div class="mt-2">
                  <input type="file" name="image" >
                </div>
        </div>
    </div>

    <div>
        @if (session()->has('success'))
        <span class="text-green-500">
          {{session('success')}}
        </span>
        @endif
    </div>

    <div class="text-center bg-purple-600 w-24 h-12 ml-16 mt-5 mb-4 text-white border rounded-lg pt-2 ">
        <i class="fa-solid fa-check -ml-3"></i><input type="submit" value="save" class="ml-3">
    </div>
 </form>

</div>

@endsection

</body>
</html>
