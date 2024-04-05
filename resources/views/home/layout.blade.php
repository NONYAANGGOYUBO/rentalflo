

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</head>
<body>
<div class="bg-white h-20 w-[1677px]   top-0 fixed border border-gray-300  ml-60">
    <form action="{{route('logout')}}" method="post">
        @csrf
    <ul class="flex">

        <li class=" absolute top-2 right-40 text-blue-600">{{Auth::User()->fname}} {{Auth::User()->lname}}</li>
        <li class=" absolute top-2 right-12 text-red-600"> <input type="submit" name="submit" value="logout"></li>
    </ul>
    </form>
</div >

<div class=" bg-white w-60 h-[997px]  -mt-80px border border-gray-300 top-0 left-0 fixed ">
    <div class=" border border-gray-300  left-0 top-0 fixed h-20 w-60">
    <img src="images/login.png" class="h-9  ml-3 mt-4 "  alt="">
</div>
    <ul class="pl-4 pt-44 ">

        <a href="{{route('dashboard')}}"><li class="mt-10 font-aab text-lg pl-6 text-gray-600 hover:text-blue-600"><i class="fa-solid fa-table-columns text-gray-600 pr-2 hover:text-blue-600"></i>Dashboard </li></a>
        <a href="{{route('viewproperties')}}"><li class="mt-5 font-aab text-lg pl-6 text-gray-600 hover:text-blue-600"><i class="fa-solid fa-city text-gray-600 pr-2 hover:text-blue-600"></i>Properties</li></a>
        <a href="{{route('viewtenant')}}"><li class="mt-5 font-aab text-lg pl-6 text-gray-600 hover:text-blue-600"><i class="fa-solid fa-person-walking-luggage text-gray-600 pr-2 hover:text-blue-600"></i>Tenant</li></a>
        <a href="{{route('rent')}}"><li class="mt-5 font-aab text-lg pl-6 text-gray-600 hover:text-blue-600"><i class="fa-solid fa-dollar-sign text-gray-600 pr-2 hover:text-blue-600"> </i>Rent</li></a>
        <a href="{{route('expenses')}}"><li class="mt-5 font-aab text-lg pl-6 text-gray-600 hover:text-blue-600"><i class="fa-regular fa-chart-bar text-gray-600 pr-2 hover:text-blue-600"></i>Expenses</li></a>
        <a href="{{route('setting')}}"><li class="mt-5 font-aab text-lg pl-6 text-gray-600 hover:text-blue-600"><i class="fa-solid fa-sliders text-gray-600 pr-2 hover:text-blue-600"></i>Setting</li></a>
    </ul>

</div>
<div class="bg-slate-50 h-full w-[1660px]  mt-[82px] ml-[245px] ">
@yield('content')

</div>

{{-- <div class="bg-white h-20 w-[1677px] sticky bottom-0   border border-gray-300  ml-60">

    <ul class="flex">
        <li class=" absolute top-2 left-8 text-gray-500 text-sm">© 2024 Cuztomise Softech Pvt. Ltd.</li>
        <li class=" absolute top-2 right-44 text-blue-600 text-sm">Term</li>
        <li class=" absolute top-2 right-24 text-blue-600 text-sm">Privacy</li>
        <li class=" absolute top-2 right-10 text-blue-600 text-sm">Help</li>
    </ul> --}}
</form>
</div >



</body>
</html>



