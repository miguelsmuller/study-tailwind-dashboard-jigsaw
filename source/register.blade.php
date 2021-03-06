---
title: "Register - Tailwind and Jigsaw"
---

@extends('_layouts.main')

@section('body')
<div class="flex items-center min-h-screen p-6 pattern">
  <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden rounded-lg bg-gray-50">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
      <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
          <img aria-hidden="true" class="object-cover w-full h-full" alt="" src="https://images.unsplash.com/photo-1542435503-956c469947f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80">
        </div>

        <div class="flex items-center justify-center px-6 py-4 sm:p-8 md:w-1/2">
          <div class="w-full">
            <div class="py-2">
              <h1 class="text-4xl tracking-wide font-bold text-left">Custom App Title</h1>
              <h3 class="text-xl tracking-wide font-bold text-left">Request your account</h3>
            </div>
      
            <form action="/">
              <div class="grid grid-cols-6 gap-4 py-2">
                <div class="col-span-6">
                  <label for="first_name" class="block text-sm font-medium text-gray-700">Full name</label>
                  <input type="text" id="first_name" autocomplete="given-name" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="street_address" class="block text-sm font-medium text-gray-700">Email address</label>
                  <input type="text" id="street_address" autocomplete="street-address" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
                </div>

                <div class="col-span-6 sm:col-span-2">
                  <label for="country" class="block text-sm font-medium text-gray-700">State</label>
                  <select id="country" autocomplete="country" class="rounded p-2 block w-full border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
                    <option>RJ</option>
                    <option>SP</option>
                    <option>ES</option>
                  </select>
                </div>

                <div class="col-span-6 sm:col-span-2">
                  <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                  <input type="text" id="city" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
                </div>

                <div class="col-span-6 sm:col-span-2">
                  <label for="state" class="block text-sm font-medium text-gray-700">Province</label>
                  <input type="text" id="state" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
                </div>

                <div class="col-span-6 sm:col-span-2">
                  <label for="postal_code" class="block text-sm font-medium text-gray-700">Postal</label>
                  <input type="text" id="postal_code" autocomplete="postal-code" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
                </div>
                </div>

              <div class="flex justify-end space-x-2 py-2">
                <a href="{{ $page->baseUrl }}/login/" class="px-6 py-2 rounded text-sm font-medium border-transparent bg-gray-200 text-gray-700 hover:bg-gray-200 focus:bg-gray-300 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                  Go to login
                </a href="">

                <a href="{{ $page->baseUrl }}/login/" class="px-6 py-2 rounded text-sm font-medium border-transparent bg-gray-900 text-white hover:bg-gray-600 focus:bg-gray-600 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600">
                  Request registration
                </a href="">
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection