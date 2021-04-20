---
title: "Inbox - Tailwind and Jigsaw"
---

@extends('_layouts.main')

@section('body')
<div class="h-screen flex flex-col">
  @include('_partials.header')
  <div class="flex-1 flex overflow-hidden">

    <div class="flex bg-gray-100 overflow-y-auto"> 
      @include('_partials.sidebar')  
    </div>

    <main class="flex-1 flex bg-gray-200">
      <div class="relative flex flex-col w-full max-w-xs flex-grow border-l border-r bg-gray-200"> 
        @include('_partials.message-list')
      </div>

      <div class="flex-1 flex flex-col w-0">
      @include('_partials.message-header')
      @include('_partials.message-card')
      </div>
    </main>

  </div>  
</div>
@endsection