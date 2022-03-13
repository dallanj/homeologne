<div class="p-6">
    <div class="flex items-center justify-end text-right">
        <x-jet-button wire:click="createShowModal">
            {{ __('Create') }}
        </x-jet-button>
    </div>

    <!-- Data table -->
    <div class="flex flex-col py-3">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Created at</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Cover</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Link</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Artist</th>
                                <th scope="col" class="relative px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @if ($data->count())
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                            {{ date('F d, Y', strtotime($item->created_at)) }}
                                        </td>
                                        <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                            <img src="/storage/galleries/{{ $item->cover }}" alt="cover"/>
                                        </td>
                                        <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                            {{$item->title}}
                                        </td>
                                        <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                            <a 
                                                class="text-indigo-600 hover:text-indigo-900"
                                                target="_blank"
                                                href="{{ URL::to('/albums/'.$item->slug)}}"
                                            >
                                                {{$item->slug}}
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 text-sm whitespace-no-wrap">{{ $item->artist }}</td>
                                        <td class="px-6 py-4 text-right text-sm whitespace-no-wrap">
                                            <x-jet-secondary-button wire:click="updateShowModal({{$item->id}})">
                                                {{ __('Edit') }}
                                            </x-jet-secondary-button>
                                            <x-jet-danger-button wire:click="deleteShowModal({{$item->id}})">
                                                {{ __('Delete') }}
                                            </x-jet-danger-button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="px-6 py-4 text-sm whitespace-no-wrap" colspan="4">No results found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{ $data->links() }}

    <!-- Modal Form -->
    <x-jet-dialog-modal wire:submit.prevent="save" wire:model="modalFormVisible">
        <x-slot name="title">
            @if ($modelId)
                {{ __('Update Album') }}
            @else
            {{ __('Create New Album') }}
            @endif
        </x-slot>

        <x-slot name="content">

            <div class="mt-4">
                <x-jet-label for="title" value="{{ __('Album Title') }}" />
                <x-jet-input id="title" type="text" class="mt-1 block w-full" wire:model.debounce.100ms="title" autofocus />
                <!-- @error('title') <span class="error">{{ $message }}</span> @enderror -->
                <x-jet-input-error for="title" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="slug" class="block text-sm font-medium text-gray-700" value="{{ __('Slug') }}"/>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                        http://localhost:8000/posts/
                    </span>
                    <input type="text" name="slug" id="slug" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" wire:model.debounce.100ms="slug" placeholder="url-slug">
                </div>
                <!-- @error('slug') <span class="error">{{ $message }}</span> @enderror -->
                <x-jet-input-error for="slug" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="artist" value="{{ __('Album Artist') }}" />
                <x-jet-input id="artist" type="text" class="mt-1 block w-full" wire:model.debounce.100ms="artist" autofocus />
                <!-- @error('title') <span class="error">{{ $message }}</span> @enderror -->
                <x-jet-input-error for="artist" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="cover" value="{{ __('Album Cover') }}" />
                <x-jet-input id="cover" type="text" class="mt-1 block w-full" wire:model.debounce.100ms="cover" autofocus />
                <!-- @error('title') <span class="error">{{ $message }}</span> @enderror -->
                <x-jet-input-error for="cover" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="tracklist" value="{{ __('Album Title') }}" />
                <textarea id="tracklist" class="mt-1 block w-full" wire:model.debounce.100ms="tracklist" autofocus></textarea>
                <!-- @error('title') <span class="error">{{ $message }}</span> @enderror -->
                <x-jet-input-error for="tracklist" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="platforms" value="{{ __('Available Platforms') }}" />
                <textarea id="platforms" class="mt-1 block w-full" wire:model.debounce.100ms="platforms" autofocus></textarea>
                <!-- @error('title') <span class="error">{{ $message }}</span> @enderror -->
                <x-jet-input-error for="platforms" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="releasedate" value="{{ __('Album Release Date') }}" />
                <x-jet-input id="releasedate" type="text" class="mt-1 block w-full" wire:model.debounce.100ms="releasedate" autofocus />
                <!-- @error('title') <span class="error">{{ $message }}</span> @enderror -->
                <x-jet-input-error for="releasedate" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            @if ($modelId)
                <x-jet-button class="ml-3" wire:click="update" wire:loading.attr="disabled">
                    {{ __('Update Album') }}
                </x-jet-button>
            @else
                <x-jet-button class="ml-3" wire:click="create" wire:loading.attr="disabled">
                    {{ __('Create Album') }}
                </x-jet-button>
            @endif
        </x-slot>
    </x-jet-dialog-modal>

    <!-- Delete page modal -->
    <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">
        <x-slot name="title">
            {{ __('Delete Album') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete this album? Once this page is deleted, all of its resources and data will be permanently deleted.') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-3" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Delete Album') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>