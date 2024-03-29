<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project\Category;
use App\Models\Project\Property;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ShowProjects extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $state, $selStates, $city, $type;
    public $cities = [];
    public $projects = [];
    public $aux_state, $aux_city, $aux_type;

    public $location;

    public $searchtxt, $checkType, $checkBedrooms, $inpPriceMin, $inpPriceMax;

    public function mount($type, $location){
        $this->selStates = DB::table('info_states')->orderBy('name', 'asc')->get();

        $this->type = $type;
        $this->searchtxt = $location;
    }

    public function search(){

    }

    public function render()
    {

        //dd($this->properties);

        // if($this->searchtxt || $this->checkType || $this->checkBedrooms){
        //     dd($this->searchtxt . " | " . $this->checkType . " | " . $this->checkBedrooms);
        // }
        //if($this->searchtxt) dd($this->searchtxt);
        //if($this->checkType) dd($this->checkType);
        //if($this->checkBedrooms) dd($this->checkBedrooms);
        
        $projects_filter = Category::orderBy('category_id', 'asc');
        $properties_filter = Property::where('status', 1);
        
        
        if($this->checkBedrooms){
            $properties_filter->where('bedrooms', $this->checkBedrooms);
            $properties = $properties_filter->get();
            if(count($properties) > 0){
                for ($i=0; $i < count($properties); $i++) {
                    if($i < 1){
                        $projects_filter->where('category_id', $properties[$i]->category_id);
                    } else {
                        $projects_filter->orWhere('category_id', $properties[$i]->category_id);
                    }
                }
            } else {
                $projects_filter->where('category_id', 100000);
            }
        }
        
        if($this->inpPriceMin || $this->inpPriceMax){
            $properties_filter->whereBetween('price', [$this->inpPriceMin, $this->inpPriceMax]);
            $properties = $properties_filter->get();
            if(count($properties) > 0){
                for ($i=0; $i < count($properties); $i++) { 
                    if($i < 1){
                        $projects_filter->where('category_id', $properties[$i]->category_id)->where('status', 1);
                    } else {
                        $projects_filter->orWhere('category_id', $properties[$i]->category_id)->where('status', 1);
                    }
                }
            } else {
                $projects_filter->where('category_id', 100000);
            }
        }
        
        if($this->searchtxt){
            $properties_filter->where('state', 'LIKE', '%'.$this->searchtxt.'%')->orWhere('city', 'LIKE', '%'.$this->searchtxt.'%')->orWhere('address', 'LIKE', '%'.$this->searchtxt.'%');
        }

        if($this->checkType){
            $projects_filter->where('type', $this->checkType);
        }

        $this->selStates = DB::table('info_states')->orderBy('name', 'asc')->get();

        // if($this->state) {
        //     $this->cities = [];
        //     $this->aux_state = $this->state;
        //     $aux_state = DB::table('info_states')->where('name', 'LIKE', '%'.$this->state.'%')->first();
        //     $this->cities = DB::table('info_cities')->where('state_id', $aux_state->id)->get();
        //     //dd($this->cities);
        //     $projects_filter->where('state', 'LIKE', "%".$this->state."%");
        // } else {
        //     $this->cities = [];
        // };

        // if($this->city){
        //     $projects_filter->where('city', 'LIKE', "%".$this->city."%");
        // }

        // if($this->type){
        //     $projects_filter->where('type', 'LIKE', "%".$this->type."%");
        // }

        $projects_filter->where('status', 1);

        // if($this->searchtxt || $this->checkType || $this->checkBedrooms){
        //     dd($projects_filter);
        // }
        // dd($projects_filter);

        $this->projects = $projects_filter->get();

        $properties = $properties_filter->paginate(10);

        return view('livewire.show-projects', [
            'projects' => $this->projects,
            'states' => $this->selStates,
            'cities' =>$this->cities,
            'properties' => $properties
        ]);
    }
}
