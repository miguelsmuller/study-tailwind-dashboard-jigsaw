---
title: "Lists - Tailwind and Jigsaw"
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
      <div class="pb-16">
        <h3 class="text-2xl font-bold text-gray-700 mb-2">List - Basic</h3>
        <div class="flex flex-row flex-wrap items-center justify-center gap-4 rounded-lg border border-gray-300 bg-white p-16">
          @include('_components.list.list-basic')
          @include('_components.list.list-striped')
        </div>
      </div>

      <div class="pb-16">
        <h3 class="text-2xl font-bold text-gray-700 mb-2">List - Examples</h3>
        <div class="grid grid-cols-2 gap-20 items-center justify-center rounded-lg border border-gray-300 bg-white p-16">
          @include('_components.list.list-examples.list-1')
          @include('_components.list.list-examples.list-2')
          @include('_components.list.list-examples.list-3')
        </div>
      </div>
    </main>
  </div>
</div>
@endsection
