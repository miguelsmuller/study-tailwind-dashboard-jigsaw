@extends('main')

@section('body')
<div class="h-screen flex flex-col">
  @include('_partials.header')
  <div class="flex-1 flex overflow-hidden">

    <div class="flex bg-gray-100 overflow-y-auto"> 
      @include('_partials.sidebar')  
    </div>

    @yield('body')

  </div>  
</div>
@endsection