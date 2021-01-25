<div>
        <table class="min-w-full table-auto">
          <thead class="justify-between">
            <tr class="bg-gray-800">
              <th class="px-16 py-2">
                <span class="text-gray-300">No..</span>
              </th>
              <th class="px-16 py-2">
                <span class="text-gray-300">Name</span>
              </th>
              <th class="px-16 py-2">
                <span class="text-gray-300">Email</span>
              </th>
              <th class="px-16 py-2">
                <span class="text-gray-300">Date</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-gray-200">
              @php
                  $count = 1
              @endphp
            @foreach ($users as $key => $value)
            <tr class="bg-white border-4 border-gray-200">
                <td class="px-16 py-2 flex flex-row items-center">
                    <span class="text-center ml-2 font-semibold">
                        {{$count++}}
                    </span>
                </td>
                <td>
                    <span class="text-center ml-2 font-semibold">
                        {{$value->name}}
                    </span>
                </td>
                <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold">
                        {{$value->email}}
                    </span>
                </td>
                <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold">
                        {{$value->created_at->diffForHumans()}}
                    </span>
                </td>
            </tr>

            @endforeach
          </tbody>
        </table>
</div>
