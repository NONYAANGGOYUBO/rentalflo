
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tenant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body >
    @extends('home.layout')

    @section('content')

    <div class="flex">
        <h1 class="text-3xl font-bold font-aab ml-11 pt-7 text-gray-700">Tenant</h1>
        <h1 class=" text-sm  font-aab -ml-24 pt-20 text-gray-500 ">You have total {{$tenantvariable->count('id')}} Tenant.</h1>

         <h1 class="bg-white border border-gray-200 ml-[1050px] h-10 w-36 mt-9 rounded-lg pl-6 pt-2" ><i class="fa-solid fa-download"></i> Export</h1>
         <a href="{{route('newtenant')}}"><h1 class="bg-purple-700 h-10 w-48 ml-3 border border-round   mt-9 rounded-lg pl-6 pt-2 font-aab text-white"><i class="fa-solid fa-plus"></i> New Tenant</h1></a>

   </div>

    <div class="mt-8">
        <table class="table-auto bg-white w-[1500px] ml-11 mt-3  text-center border border-gray-200  ">

                {{-- <th class=""></th> --}}
                <th class="">Name</th>
                <th class="">Property</th>
                <th class="">Contanct No</th>
                <th class="">Payment Rent</th>
                <th class="">Status</th>
                <th class="text-white">action</th>

                @foreach($tenantvariable as $tenants)
                <tr class="border-b-[1px] border-t-[1px] p-2 h-16">
                    <td class=""> {{ $tenants->name }} </td>
                    <td class=""> </td>  {{--{{ $tenants->address }} --}}
                    <td class="">{{ $tenants->contactno }} </td>
                    <td class="text-green-500 text-bold text-lg">vacant</td>
                    <td></td>
                    <td><i class="fa-solid fa-ellipsis"></i></td>
                </tr>
                @endforeach
        </table>

    </div>

    @endsection

</body>
</html>

