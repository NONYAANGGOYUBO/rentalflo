<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body class="bg-slate-100">
    @extends('home.layout')

    @section('content')
    <h1 class="text-2xl font-bold text-gray-600 ml-6 pt-8">Dashboard</h1>
    <h1 class="  text-gray-600 ml-6 mt-2 ">Monthly statistic</h1>

    <div class=" flex justify-between h-36 mt-4">
        <div class="bg-white border border-gray-200 ml-20 w-[750px]  pl-4 pt-4 font-aab text-gray-800 text-lg">Active Properties</div>
        <div class="bg-white border border-gray-200 mr-11 w-[750px]  pl-4 pt-4 font-aab text-gray-800 text-lg">Active Tenants</div>

    </div>


    @endsection
</body>
</html>
