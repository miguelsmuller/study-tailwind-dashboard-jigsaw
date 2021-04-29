---
title: "Dashboard - Tailwind and Jigsaw"
---

@extends('_layouts.main')

@section('body')
<div class="h-screen flex flex-col">
  @include('_partials.header')
  <div class="flex-1 flex overflow-hidden">

    <div class="flex bg-gray-100 overflow-y-auto"> 
      @include('_partials.sidebar')  
    </div>

    <main class="flex-1 flex flex-col overflow-y-auto px-6 py-4 bg-gray-200">
      
      <div class="flex flex-col h-full">
        <h3 class="text-2xl font-bold mb-2 text-gray-700">Overview</h3>
        <div class="flex-1 rounded-lg border-4 border-dashed border-gray-300"></div>
      </div>

    </main>

  </div>  
</div>
@endsection