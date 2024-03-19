<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Table</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  {{-- Table --}}
  <section class="max-w-5xl mx-auto min-h-screen mt-5">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">#</th>
            <th scope="col" class="px-6 py-3">Id</th>
            <th scope="col" class="px-6 py-3">Username</th>
            <th scope="col" class="px-6 py-3">Email</th>
            <th scope="col" class="px-6 py-3">Category</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
              id="tr">
              <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex items-center mb-4">
                  <input id="default-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                    aria-controls="dropdown-example{{ $user->id }}"
                    data-collapse-toggle="dropdown-example{{ $user->id }}">
                </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $user->id }}</th>
              <td class="px-6 py-4">
                <div class="flex gap-2 flex-col">{{ $user->name }}</div>
              </td>

              <td class="px-6 py-4">{{ $user->email }}</td>
              <td class="px-6 py-4 text-right">

                @include('partials.modal')
              </td>
            </tr>

            <tr class="">
              <td colspan="4">
                @include('partials.subtable')
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>





      <div class="p-5">
        {{ $users->links() }}
      </div>

    </div>


  </section>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
