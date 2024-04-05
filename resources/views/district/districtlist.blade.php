<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>district_list</title>
</head>
<body >
<div class="ml-[600px] bg-slate-200 h-96 pl-4 mt-5 w-96 ">
    <h1>hello arunachal</h1>
    <a href="{{route('login')}}"><h1 >Back  </h1></a>
    <form action="{{route('storedist')}}" method="POST">
        @csrf
        <input type="text" placeholder="enter district name" name="districtname" class="">

        @error('districtname')
        <span class="text-red-500">{{$message}}</span>
      @enderror
        <input type="submit" value="Register" name="register">

        @if (session()->has('success'))
        <span class="text-green-500">
          {{session('success')}}
        </span>
      @endif

    </form>
<br><br><br><br>
 <h1>list of  cities for rent in arunachal</h1>

    <select name="" id="">
        @foreach($dist as $dist)
        <option value="">{{$dist->district_name}}</option>
        @endforeach

    </select>

</div>

</body>
</html>
