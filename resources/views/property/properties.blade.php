<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>properties</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body >
    @extends('home.layout')

    @section('content')

    <div class="flex">
    <h1 class="text-3xl font-bold font-aab ml-11 pt-7 text-gray-700">Properties</h1>
    <h1 class=" text-sm  font-aab -ml-36 pt-20 text-gray-500">
        You have total  {{$propertiesgetvariable->count('id')}}  properties.
        {{-- {{Auth::User()->count('id')}} --}}
        {{-- {{Auth::Property()->title()}} --}}
        {{-- @foreach($propertiesgetvariable as $propertytabledata)
        {{$propertytabledata->count('id')}}  @endforeach --}}
    </h1>

    <h1 class="bg-white border border-gray-200 ml-[1050px] h-10 w-36 mt-9 rounded-lg pl-6 pt-2" ><i class="fa-solid fa-download"></i> Export</h1>
    <a href="{{route('newproperty')}}"><h1 class="bg-purple-700 h-10 w-48 ml-3 border border-round   mt-9 rounded-lg pl-6 pt-2 font-aab text-white"><i class="fa-solid fa-plus"></i> New Property</h1></a>

   </div>


    <div class="mt-5">
        <table class="table-auto bg-white w-[1580px]  text-center border border-gray-200  ">

                <th class="-ml-[25px]">profile</th>
                <th class="">id</th>
                <th class="">Name</th>
                <th class="">Address</th>
                <th class="">Status</th>
                <th class="">Occupacy</th>
                <th>action</th>

                @foreach($propertiesgetvariable as $propertytabledata)
                <tr class="border-b-[1px] border-t-[1px] h-16">


                    <td > <img src="property_image/{{$propertytabledata->image}}" alt="" class="rounded-full h-10  w-10 ml-3"> </td>
                    <td>{{$propertytabledata->id}}</td>
                    <td>{{ $propertytabledata->title }}  </td>
                    <td>{{ $propertytabledata->address_1 }},{{ $propertytabledata->address_2 }}</td>
                    <td class="text-green-500 text-bold text-lg">active </td>
                    <td class="text-green-500 text-bold text-lg">vacant</td>
                    <td>
                         <!-- Dropdown menu -->
                        <div class="basis-1/12 flex items-center justify-end pr-10">
                             <button id="dropdownMenuIconButton" data-dropdown-toggle="{{$propertytabledata->id}}" class="inline-flex justify-center items-center p-2 text-sm font-medium text-center w-10 h-10 text-gray-900 bg-white rounded-full hover:bg-gray-300 focus:outline-none" type="button">
                             <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <div id="{{$propertytabledata->id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 font-roboto">
                                  <ul class="py-2 text-sm text-gray-500" aria-labelledby="dropdownMenuIconButton">
                                <li>
                                 <a href="{{route('show', $propertytabledata->id)}}" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-[12px] font-medium">
                                <i class="fa-solid fa-eye px-3"></i> View Details
                                </a>
                                </li>
                                <li>
                                <a href="{{route('edit',$propertytabledata->id)}}" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-xs font-medium">
                                <i class="fa-solid fa-user-pen px-3"></i> Edit
                                </a>
                                </li>
                                <li>
                                <a href="" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-[12px] font-medium">
                                <i class="fa-solid fa-user-plus"></i> Assign Care Taker
                                </a>
                                </li>
                                <li>
                                <a href="" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-[12px] font-medium">
                                <i class="fa-solid fa-user-plus"></i> Assign Tenant
                                 </a>
                                </li>

                                <li>
                                <a href="" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-[12px] font-medium">
                                <i class="fa-solid fa-notes-medical"></i> Deactivate
                                </a>
                                </li>
                            </div>
                       </div>

                        {{-- <a class="border border-gray-400 bg-purple-400 text-white" href="{{route('show',$propertytabledata->id)}} ">View Detail</a>
                        <button class="border border-gray-400 bg-purple-400 text-white ml-3">Edit Details</button> --}}
                    </td>

                </tr>

                @endforeach

          </table>

    </div>


    @endsection

</body>
</html>
