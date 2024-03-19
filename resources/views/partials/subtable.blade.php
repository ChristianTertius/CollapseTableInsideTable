{{-- <button type="button"
  class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
  <svg
    class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
    <path
      d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
  </svg>
  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">E-commerce</span>
  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
  </svg>
</button> --}}

<div class="relative overflow-x-auto hidden p-5 space-y-2" id="dropdown-example{{ $user->id }}">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        <th colspan="3"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center bg-slate-100">Pacar
        </th>
        <th colspan="2" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
          Family</th>
      </tr>
      <tr>
        <th scope="col" class="px-6 py-3">
          Girl Friend
        </th>
        <th scope="col" class="px-6 py-3">
          Age
        </th>
        <th scope="col" class="px-6 py-3">
          Education
        </th>
        <th scope="col" class="px-6 py-3">
          Address
        </th>
        <th>
          Action
        </th>
      </tr>
    </thead>
    <tbody>
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
          {{ $user->sport->name }}
        </th>
        <td class="px-6 py-4">
          {{ $user->sport->age }}
        </td>
        <td class="px-6 py-4">
          {{ $user->sport->education }}
        </td>
        <td class="px-6 py-4">
          {{ $user->sport->address }}
        </td>
        <td>
          <button><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 17h6l3 3v-3h2V9h-2M4 4h11v8H9l-3 3v-3H4V4Z" />
            </svg>
          </button>
        </td>
      </tr>

    </tbody>
  </table>
</div>
