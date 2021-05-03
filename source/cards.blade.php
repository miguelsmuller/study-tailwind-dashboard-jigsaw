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
      <div class="pb-16">
        <h3 class="text-2xl font-bold text-gray-700 mb-2">Card - Basic</h3>
        <div class="flex flex-row flex-wrap items-center justify-center gap-4 rounded-lg border border-gray-300 bg-white p-16">
          @include('_components.card.card-basic')
          @include('_components.card.card-colored')
        </div>
      </div>

      <div class="pb-16">
        <h3 class="text-2xl font-bold text-gray-700 mb-2">Card - Header and Footer</h3>
        <div class="flex flex-row flex-wrap items-center justify-center gap-4 rounded-lg border border-gray-300 bg-white p-16">
          @include('_components.card.card-title')
          @include('_components.card.card-footer')
          @include('_components.card.card-title-footer')
        </div>
      </div>

      <div class="pb-16">
        <h3 class="text-2xl font-bold text-gray-700 mb-2">Card - Examples</h3>
        <div class="grid grid-cols-2 gap-20 items-center justify-center rounded-lg border border-gray-300 bg-white p-16">
          @include('_components.card.card-examples.card-1')
          @include('_components.card.card-examples.card-2')
          @include('_components.card.card-examples.card-3')
          @include('_components.card.card-examples.card-4')
        </div>
      </div>
    </main>
  </div>
</div>
@endsection
