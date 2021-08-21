<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upazillas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <table class="w-full border-r border-b">
                       @if(Session::get('massege'))
                       <div class="p-2 bg-green-200 mb-2">
                          {{Session::get('massege')}}
                       </div>
                       @endif
                       <tr>
                           <th class="border-l border-t px-2 py-1 text-left">Name</th>
                           <th class="border-l border-t px-2 py-1 text-center">Actions</th>
                       </tr>
                       @foreach($upazilas as $upazila)
                           <tr>
                               <td class="border-l border-t px-2 py-1 text-left">
                                   @if($upazila->enable == false)<del>@endif
                                   {{$upazila->name}}
                                   @if($upazila->enable == false)</del>@endif
                               </td>
                               <td class="border-l border-t px-2 py-1 text-center">
                                   <a href="">Edit</a>
                                   <form action="{{route('upazila_ed',$upazila->id)}}" style="display: inline-block" method="POST">
                                       @csrf
                                       <button class="pl-1" type="submit">{{$upazila->enable == true ?"Archive" : "Restore"}}</button>
                                   </form>
                               </td>
                           </tr>
                       @endforeach
                       {{$upazilas->links()}}
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
