
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>view_property_details</title>
</head>
<body>
    @extends('home.layout')

    @section('content')


    <div class="flex">

        <h1 class="text-3xl font-bold font-aab ml-11 pt-7 text-gray-700">Properties</h1>
        <h1 class=" text-sm  font-aab -ml-36 pt-20 text-gray-500 ">All details of property provided by owner.</h1>
        <a href="{{route('viewproperties')}}"><h1 class="bg-white border border-gray-200 ml-[1300px] h-10 w-28 mt-9 rounded-lg pl-6 pt-2" > <i class="fa-solid fa-arrow-left me-2"></i>  Back  </h1></a>

    </div>

    <div class="h-auto bg-white border border-gray-300 w-[1500px] ml-10 mt-12">
        <div class="flex space-x-8 ml-4 bg-white  border-b-[1px] h-9">
            <h1 class=""><i class="fa-solid fa-user mt-1"> </i> Personal</h1>
            <h1 class=""><i class="fa-regular fa-file mt-1 "></i>Attachments</h1>
            <h1> <i class="fa-solid fa-location-crosshairs"></i> Location</h1>
        </div>
        <div>
            <table class=" border border-slate-400 mt-3 ml-4 w-[1475px]">

                <tbody class="">
                  <tr>
                    <td class="border border-slate-300 ">Property ID</td>
                    <td class="border border-slate-300 "> {{$viewdetails->id}} </td>
                  </tr>
                  <tr>
                    <td class="border border-slate-300 ">Property Name</td>
                    <td class="border border-slate-300 "> {{$viewdetails->title}} </td>
                  </tr>
                  <tr>
                    <td class="border border-slate-300 ">Address</td>
                    <td class="border border-slate-300 "> {{$viewdetails->address_1}},{{$viewdetails->address_2}} </td>
                  </tr>
                  <tr>
                    <td class="border border-slate-300 ">Description</td>
                    <td class="border border-slate-300 ">{{$viewdetails->description}}</td>
                  </tr>
                  <tr>
                    <td class="border border-slate-300 ">Rent</td>
                    <td class="border border-slate-300 ">{{$viewdetails->rent}}</td>
                  </tr>
                  <tr>
                    <td class="border border-slate-300 ">Care Taker Name</td>
                    <td class="border border-slate-300 "></td>
                  </tr>
                  <tr>
                    <td class="border border-slate-300 ">Care Taker Contact</td>
                    <td class="border border-slate-300 "></td>
                  </tr>
                  <tr>
                    <td class="border border-slate-300 ">Care Taker Email</td>
                    <td class="border border-slate-300 "></td>
                  </tr>
                  <tr>
                    <td class="border border-slate-300 ">Property Tenant</td>
                    <td class="border border-slate-300 "></td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>
</html>


