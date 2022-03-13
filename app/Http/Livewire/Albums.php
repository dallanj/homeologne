<?php

namespace App\Http\Livewire;

use App\Models\Album;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use Illuminate\Support\Str;  // Laravels built in slug generator

class Albums extends Component
{
    use WithPagination;
    public $modalFormVisible = false;
    public $modalConfirmDelete = false;
    public $modalConfirmDeleteVisible = false;
    public $artist = 'Ologne';
    public $slug, $title, $tracklist, $platforms, $cover, $releasedate;
    public $modelId;

    /**
     * Check if the required inputs contains data
     *
     * @return void
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => ['required', Rule::unique('albums','slug')->ignore($this->modelId)],
            'artist' => 'required',
            'tracklist' => 'required',
            'platforms' => 'required',
            'cover' => 'required',
            'releasedate' => 'required'
        ];
    }

    /**
     * Mount live wire component
     *
     * @return void
     */
    public function mount()
    {
        // Reset pagination on page load
        $this->resetPage();
    }

    public function read()
    {
        return Album::paginate(10);
    }

    /**
     * Updates slug each key stroke
     * Removes unnecessary white space
     * Changes whitespace to dash
     * Turns all characters to lowercase
     *
     * @param  mixed $value
     * @return void
     */
    public function updatedTitle($value)
    {
        $this->slug = Str::slug($value);
    }

    /**
     * Update records in database
     *
     * @return void
     */
    public function update()
    {
        $this->validate();
        Album::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
        $this->reset();
    }

    /**
     * Delete record from database
     *
     * @return void
     */
    public function delete()
    {
        Album::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
    }

    /**
     * Create page function
     * Saves to database in pages table
     * 
     * @return void
     */
    public function create()
    {
        $this->validate();
        Album::create($this->modelData());
        $this->modalFormVisible = false;
        $this->reset();
    }

    /**
     * Shows the form modal
     * of the create function
     *
     * @return void
     */
    public function createShowModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->modalFormVisible = true;
    }

    /**
     * Show update modal
     * Call loadModal function to retrieve data based on id
     * 
     * @param  mixed $id
     * @return void
     */
    public function updateShowModal($id)
    {
        $this->resetValidation();
        $this->modelId = $id;
        $this->modalFormVisible = true;
        $this->loadModal();
    }

    /**
     * Show delete page confirmation modal
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteShowModal($id)
    {
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    /**
     * Loads data based on id
     * Updates variables to the data retrieved
     *
     * @return void
     */
    private function loadModal()
    {
        $data = Album::find($this->modelId);
        $this->title = $data->title;
        $this->slug = $data->slug;
        $this->artist = $data->artist;
        $this->tracklist = $data->tracklist;
        $this->platforms = $data->platforms;
        $this->cover = $data->cover;
        $this->releasedate = $data->releasedate;
    }

    /**
     * Data for the model
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'artist' => $this->artist,
            'tracklist' => $this->tracklist,
            'platforms' => $this->platforms,
            'cover' => $this->cover,
            'releasedate' => $this->releasedate
        ];
    }

    /**
     * Clear the the modal form data
     *
     * @return void
     */
    public function clearInputs()
    {
        $this->title = null;
        $this->artist = null;
        $this->slug = null;
        $this->tracklist = null;
        $this->platforms = null;
        $this->cover = null;
        $this->releasedate = null;
        $this->modelId = null;
    }

    /**
     * The livewire render function
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.albums', [
            'data' => $this->read()
        ]);
    }
}
