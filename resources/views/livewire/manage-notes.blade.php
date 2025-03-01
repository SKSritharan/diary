<?php

use function Livewire\Volt\{state, mount, with, usesPagination};
use App\Models\User;
use App\Models\Note;

usesPagination();
state(['user', 'title' => '', 'content' => '']);

$createNote = function () {
    Note::create([
        'title' => $this->title,
        'content' => $this->content,
        'user_id' => Auth::user()->id,
    ]);

    $this->title = '';
    $this->content = '';
};

$deleteNote = function (Note $note) {
    $note->delete();
};


with(function () {
    $notes = Note::latest()->paginate(15);
    return ['notes' => $notes];
});
?>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="mb-8">
                <h2 class="mb-4 text-xl font-semibold">Create New note</h2>
                <form wire:submit='createNote' class="p-6 space-y-4 bg-white shadow sm:rounded-lg">
                    <div>
                        <x-input-label for='title' :value="__('Title')"/>
                        <x-text-input wire:model='title' id='title' class='block mt-1 w-full' type='text'
                                      name='title' required autofocus/>
                        <x-input-error :messages="$errors->get('title')" class='mt-2'/>
                    </div>

                    <div>
                        <x-input-label for='content' :value="__('Content')"/>
                        <textarea wire:model='content' id='content'
                                  class='block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                                  name='content' rows="4" required></textarea>
                        <x-input-error :messages="$errors->get('content')" class='mt-2'/>
                    </div>

                    <x-primary-button>{{ __('Create note') }}</x-primary-button>
                </form>
            </div>

            <div>
                <h2 class="mb-4 text-xl font-semibold">Notes</h2>
                @forelse ($notes as $note)
                    <div class="overflow-hidden mb-4 bg-white shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $note->title }}</h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $note->user->name }} ·
                                        {{ $note->created_at->format('M d, Y') }}</p>
                                </div>
                                <div class="flex items-center">
                                    <span
                                        class="inline-flex px-2 mr-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                        {{ $note->created_at->diffForHumans() }}
                                    </span>
                                    <button wire:click="deleteNote({{ $note->id }})"
                                            class="text-red-600 hover:text-red-900"
                                            wire:confirm="Are you sure you want to delete this note?">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                            <div class="sm:px-6 sm:py-5">
                                <p class="text-sm text-gray-900">{{ $note->content }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500">No notes yet.</p>
                @endforelse

                {{ $notes->links() }}
            </div>
        </div>
    </div>
</div>

