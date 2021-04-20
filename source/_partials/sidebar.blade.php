<div class="flex-1 flex flex-col w-full max-w-xs flex-grow">
  <nav class="flex-1 w-64 p-6">
    <h2 class="text-xs font-semibold text-gray-600 uppercase tracking-wide">Mailboxes</h2>
    <div class="mt-3">
      <a href="#"
        class="-mx-3 px-3 py-1 flex items-center justify-between text-sm font-medium bg-gray-200 rounded-lg">
        <span class="inline-flex">
          <svg 
            class="h-6 w-6 text-gray-700"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">
            <path 
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
          </svg>
          <span class="ml-2 text-gray-900">Inbox</span>
        </span>

        <span class="inline-block w-9 text-center py-1 leading-none text-xs font-semibold bg-gray-300 rounded-full">6</span>
      </a>


      <a href="#"
        class="-mx-3 mt-2 px-3 py-2 flex items-center justify-between text-sm font-medium rounded-lg">
        <span class="inline-flex">
          <svg 
            class="h-6 w-6 text-gray-500"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"
            />
          </svg>
          <span class="ml-2 text-gray-700">Flagged</span>
        </span>
      </a>


      <a href="#"
        class="-mx-3 mt-2 px-3 py-2 flex items-center justify-between text-sm font-medium rounded-lg">
        <span class="inline-flex">
          <svg 
            class="h-6 w-6 text-gray-500"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">
            <path 
              stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2" 
              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
            />
          </svg>
          <span class="ml-2 text-gray-700">Drafts</span>
        </span>

        <span class="inline-block w-9 text-center py-1 leading-none text-xs font-semibold bg-gray-300 rounded-full">2</span>
      </a>


      <a href="#"
        class="-mx-3 mt-2 px-3 py-2 flex items-center justify-between text-sm font-medium rounded-lg">
        <span class="inline-flex">
          <svg 
            class="h-6 w-6 text-gray-500"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">
            <path 
              stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2" 
              d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"
            />
          </svg>
          <span class="ml-2 text-gray-700">Assigned</span>
        </span>

        <span class="inline-block w-9 text-center py-1 leading-none text-xs font-semibold bg-gray-300 rounded-full">1</span>
      </a>


      <a href="#"
        class="-mx-3 mt-2 px-3 py-2 flex items-center justify-between text-sm font-medium rounded-lg">
        <span class="inline-flex">
          <svg 
            class="h-6 w-6 text-gray-500"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"
            />
          </svg>
          <span class="ml-2 text-gray-700">Junk</span>
        </span>
      </a>
    </div>

    <h2 class="mt-6 text-xs font-semibold text-gray-600 uppercase tracking-wide">Extra Pages</h2>
    <div class="mt-3">
      <a href="{{ $page->baseUrl }}/" class="block text-sm font-medium text-gray-700">Dashboard</a>
      <a href="{{ $page->baseUrl }}/inbox" class="mt-4 block text-sm font-medium text-gray-700">Inbox</a>
      <a href="{{ $page->baseUrl }}/blank" class="mt-4 block text-sm font-medium text-gray-700">Blank</a>
      <a href="{{ $page->baseUrl }}/login" class="mt-4 block text-sm font-medium text-gray-700">Login</a>
    </div>
  </nav>
  <div class="flex-shrink-0 w-full flex items-center justify-between border-t p-2 gap-x-0.5">
    <button class="flex-1 flex items-center rounded hover:bg-gray-300 hover:text-gray-900 focus:bg-gray-300 focus:bg-text-900 focus:outline-none focus:ring-1 focus:ring-gray-200 focus:ring-offset-2 focus:ring-offset-gray-800">
      <div class="relative ml-1 mr-2">
        <img
          class="h-8 w-8 rounded-full object-cover"
          src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=4&w=144&q=80"
          alt="" />
        <div class="absolute -top-0 -right-1.5 h-3 w-3 border-2 border-white rounded-full bg-green-600 z-2"></div>
      </div>

      <div class="flex flex-col text-left">
        <div class="block truncate text-sm font-semibold text-gray-700">Monica White</div> 
        <div class="block truncate text-xs font-medium text-gray-400">Chief Departament</div> 
      </div>
    </button>

    <button class="mx-0.5 p-1 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-300 hover:text-gray-900 focus:outline-none focus:ring-1 focus:ring-gray-200 focus:ring-offset-2 focus:text-gray-900 focus:bg-gray-300 focus:ring-offset-gray-800">
      <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
      </svg>
    </button>
    
    <button class="mx-0.5 p-1 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-300 hover:text-gray-900 focus:outline-none focus:ring-1 focus:ring-gray-200 focus:ring-offset-2 focus:text-gray-900 focus:bg-gray-300 focus:ring-offset-gray-800">
      <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
      </svg>
    </button>
  </div>
</div>
