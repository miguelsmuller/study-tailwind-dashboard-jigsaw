---
title: "Components - Tailwind and Jigsaw"
---

@extends('_layouts.main')

@section('body')
<div class="h-screen flex flex-col">
  @include('_partials.header')
  <div class="flex-1 flex overflow-hidden">

    <div class="flex bg-gray-100 overflow-y-auto"> 
      @include('_partials.sidebar')  
    </div>

    <main class="flex-1 flex flex-col space-y-6 overflow-y-auto px-6 py-4 bg-gray-200">
        <div>
            <h3 class="text-2xl font-bold text-gray-700 mb-2">Card</h3>
            <div class="flex flex-row flex-wrap items-start gap-4">
            @include('_components.card-1')  
            @include('_components.card-2')  
            @include('_components.card-3')  
            @include('_components.card-4')  
            </div>
        </div>

        <div>
            <h3 class="text-2xl font-bold text-gray-700 mb-2">List</h3>
            <div class="flex flex-row flex-wrap items-start gap-4">
            @include('_components.list-1')  
            @include('_components.list-2')  
            @include('_components.list-3')  
            @include('_components.list-4')  
            
            </div>
        </div>
        
    </main>

  </div>  
</div>
@endsection