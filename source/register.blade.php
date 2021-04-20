---
title: "Register - Tailwind and Jigsaw"
---

@extends('_layouts.main')

@section('body')
<div class="pattern px-6 py-8 min-h-screen flex items-stretch">
  <section class="container mx-auto rounded-md flex flex-col md:px-10 lg:px-16 px-0 py-10 items-stretch text-gray-700 bg-gray-200">
    <h1 class="text-4xl tracking-wide font-bold text-left sm:w-2/3 w-full px-4 md:px-0 mx-auto">Custom App Title</h1>
    <h3 class="mb-4 text-2xl tracking-wide font-bold text-left sm:w-2/3 w-full px-4 md:px-0 mx-auto">Request your account</h3>

    <form action="/" class="mt-5 md:mt-0 md:col-span-2 md:px-0 md:mx-auto mx-4 sm:w-2/3 overflow-hidden rounded-md bg-gray-50 border border-gray-300">
      <div class="px-4 py-5 sm:p-6">
        <div class="grid grid-cols-6 gap-4">

          <div class="col-span-6 sm:col-span-3">
            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
            <input type="text" id="first_name" autocomplete="given-name" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
            <input type="text" id="last_name" autocomplete="family-name" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
            <input type="text" id="email_address" autocomplete="email" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="email_address" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" id="email_address" autocomplete="email" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
          </div>

          <div class="col-span-6 sm:col-span-4">
            <label for="street_address" class="block text-sm font-medium text-gray-700">Street address</label>
            <input type="text" id="street_address" autocomplete="street-address" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
          </div>
          
          <div class="col-span-6 sm:col-span-2">
            <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
            <select id="country" autocomplete="country" class="rounded p-2 block w-full border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
              <option>United States</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>

          <div class="col-span-6 sm:col-span-2">
            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
            <input type="text" id="city" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
          </div>

          <div class="col-span-6 sm:col-span-2">
            <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
            <input type="text" id="state" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
          </div>

          <div class="col-span-6 sm:col-span-2">
            <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
            <input type="text" id="postal_code" autocomplete="postal-code" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
          </div>
        </div>
      </div>

      <div class="flex justify-end space-x-2 px-4 sm:px-6 pb-4">
        <a href="/login/" class="px-6 py-2 rounded text-sm font-medium border-transparent bg-gray-200 text-gray-700 hover:bg-gray-200 focus:bg-gray-300 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
          Go to login
        </a href="">

        <a href="/login/" class="px-6 py-2 rounded text-sm font-medium border-transparent bg-gray-900 text-white hover:bg-gray-600 focus:bg-gray-600 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600">
          Request registration
        </a href="">
      </div>
    </form>
  </section>
</div>
@endsection