<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class DataUser extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';
    protected $updatesQueryString = ['search'];



    public function render()
    {
        return view('livewire.data-user', [
            'users' => $this->search === null ?
                User::with(['level', 'city'])->latest()->paginate(10) :
                User::With(['level', 'city'])->latest()
                ->where('name', 'like', '%' . $this->search . '%')
                ->Orwhere('email', 'like', '%' . $this->search . '%')
                ->paginate(10),
        ]);
    }

    public function destroy($id)
    {
        if ($id && $id != 1) {
            $data = User::find($id);
            $data->delete();
            session()->flash('message', 'Data ' . $data->name . ' telah terhapus!');
        } else {

            session()->flash('message', 'Maaf anda tidak dapat menghapus Superadmin!');
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
