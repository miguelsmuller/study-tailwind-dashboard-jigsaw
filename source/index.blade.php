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
      
      <div class="w-full pb-6">
        <h3 class="text-2xl font-bold mb-2 text-gray-700">Overview</h3>

        <div class="flex flex-row items-center justify-between gap-4">

          <div class="w-full rounded-md shadow-sm overflow-hidden bg-white border border-gray-300 ">
              <div class="px-4 py-6 flex items-center">
              <div class="flex items-center justify-center w-12 h-12 text-gray-400 rounded-xl mr-2">
                  <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                  </svg>
              </div>

              <div class="flex-1 flex flex-col justify-center">
                  <span class="text-sm font-semibold text-gray-400 ">Account balance</span>
                  <div class="text-2xl font-bold tracking-tight text-gray-600">R$ 17.400,22</div>
              </div>

              <div class="flex flex-row items-center text-sm font-semibold text-green-800 bg-green-100 rounded-full leading-none px-2 py-1">
                  <svg class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                  <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="leading-1">12.7%</span>
              </div>
              </div>
              <div class="flex items-center px-4 py-3 bg-gray-50 border-t">
              <a href="#" class="text-xs font-bold text-gray-500">View All</a>
              </div>
          </div>

          <div class="w-full rounded-md shadow-sm overflow-hidden bg-white border border-gray-300 ">
              <div class="px-4 py-6 flex items-center">
              <div class="flex items-center justify-center w-12 h-12 text-gray-400 rounded-xl mr-2">
                  <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                  </svg>
              </div>

              <div class="flex-1 flex flex-col justify-center">
                  <span class="text-sm font-semibold text-gray-400 ">Pending</span>
                  <div class="text-2xl font-bold tracking-tight text-gray-600">R$ 30.559,81</div>
              </div>

              <div class="flex flex-row items-center text-sm font-semibold text-yellow-800 bg-yellow-100 rounded-full leading-none px-2 py-1">
                  <svg class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                  <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="leading-1">2.02%</span>
              </div>
              </div>
              <div class="flex items-center px-4 py-3 bg-gray-50 border-t">
              <a href="#" class="text-xs font-bold text-gray-500">View All</a>
              </div>
          </div>

          <div class="w-full rounded-md shadow-sm overflow-hidden bg-white border border-gray-300 ">
              <div class="px-4 py-6 flex items-center">
              <div class="flex items-center justify-center w-12 h-12 text-gray-400 rounded-xl mr-2">
                  <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
              </div>

              <div class="flex-1 flex flex-col justify-center">
                  <span class="text-sm font-semibold text-gray-400 ">Processed (30 Days)</span>
                  <div class="text-2xl font-bold tracking-tight text-gray-600">R$ 20.394,61</div>
              </div>

              <div class="flex flex-row items-center text-sm font-semibold text-red-800 bg-red-100 rounded-full leading-none px-2 py-1">
                  <svg class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                  <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="leading-1">4.05%</span>
              </div>
              </div>
              <div class="flex items-center px-4 py-3 bg-gray-50 border-t">
              <a href="#" class="text-xs font-bold text-gray-500">View All</a>
              </div>
          </div>
        </div>
      </div>

      <div class="w-full flex-1 flex flex-row items-center justify-between gap-6">
        <div class="h-full w-5/12 rounded-md shadow-sm overflow-hidden bg-white border border-gray-300">
          <div class="flex flex-col ">

            <div class="p-4 flex items-center">
              <div class="flex items-center justify-center w-12 h-12 text-gray-400 rounded-xl mr-2">
                <img
                    class="h-12 w-12 rounded-full object-cover"
                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=4&w=144&q=80"
                    alt="" />
              </div>

              <div class="flex-1 flex flex-col justify-center">
                  <span class="text-base font-semibold text-gray-800">Payment to Molly Sanders</span>
                  <div class="text-sm font-semibold text-gray-600">R$ 30.400,00</div>
              </div>

              <div class="flex flex-row items-center text-base font-semibold text-green-800 bg-green-100 rounded-full leading-none px-2 py-1">
                  <span class="leading-1">Success</span>
              </div>
            </div>

            <div class="p-4 flex items-center">
              <div class="flex items-center justify-center w-12 h-12 text-gray-400 rounded-xl mr-2">
                <img
                    class="h-12 w-12 rounded-full object-cover"
                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=4&w=144&q=80"
                    alt="" />
              </div>

              <div class="flex-1 flex flex-col justify-center">
                  <span class="text-base font-semibold text-gray-800">Payment to Molly Sanders</span>
                  <div class="text-sm font-semibold text-gray-600">R$ 30.400,00</div>
              </div>

              <div class="flex flex-row items-center text-base font-semibold text-green-800 bg-green-100 rounded-full leading-none px-2 py-1">
                  <span class="leading-1">Success</span>
              </div>
            </div>

          </div>
        </div>

        <div class="h-full w-7/12 rounded-md shadow-sm overflow-hidden bg-white border border-gray-300"></div>
      </div>

    </main>

  </div>  
</div>
@endsection