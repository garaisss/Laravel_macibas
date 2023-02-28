<x-layout>
    <x-setting heading="Manage Posts">
        <!-- component -->
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-10 py-4 font-medium text-gray-900">Post Name</th>
          <th scope="col" class="px-10 py-4 font-medium text-gray-900">Status</th>
          <th scope="col" class="px-8 py-4 font-medium text-gray-900">Edit</th>
        </tr>
      </thead>


    @foreach ($posts as $post)

        <tr class="hover:bg-gray-50">
          <th class="flex gap-2 py-4 font-normal text-gray-900">
            <div class="relative h-10 w-10">
              
            </div>
            <div class="text-sm">
              <div class="font-medium text-gray-700 py-3">
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
              </div>
            </div>
          </th>
          <td class="px-6 py-4">
            <span
              class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-sm font-semibold text-green-400"
            >
              <span class="h-1.5 w-1.5 rounded-full bg-green-200"></span>
              Published
            </span>
          </td>
        <a href="#">
          <td class="text-blue-500 :hover text-blue-600">Edit Post</td>
        </a>
          </td>
          
         
            <div class="flex justify-end gap-2">
              <a x-data="{ tooltip: 'Delete' }" href="#">
               
              </a>
              <a x-data="{ tooltip: 'Edite' }" href="#">
                
              </a>
            </div>
          </td>
        </tr>
        @endforeach
                
              </a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
    </x-setting>
</x-layout>