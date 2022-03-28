<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Ration;
use App\Models\Item;

use Livewire\WithPagination;
use WireUi\Traits\Actions;
class ManageRation extends Component
{
    use WithPagination, Actions;
    public $action='showList';
    public $set_id;
    public $itemTypes=[
        'Food',
        'Medicine',
        'Hygiene',
    ];
    public $product_type='';
    public $name;
     public $new_product_type='';
    public $new_name;

    public $stocks;
    public function showList()
    {
        $this->action='showList';
        $this->set_id=null;
    }

    public function getRationProperty()
    {
        return Ration::where('id',$this->set_id)->with('item')->first();
    }
    public function getItemProperty()
    {
        return Item::where('id',$this->set_id)->with('ration')->first();
    }
    
    public function render()
    {
        return view('livewire.admin.manage-ration',[
            'rations'=>Ration::with('item')->latest()->paginate(10),
            'items'=>Item::with('ration')->latest()->paginate(10)
        ])
        ->layout('layouts.admin');
    }
    public function sessionRemove()
    {
        session()->forget('item_type');
    }
    public function saveItemWithRation()
    {
        $this->validate([
            'product_type'=>'required',
            'name'=>'required'
        ]);
        $item=Item::create([
            'item_type'=>$this->product_type,
            'name'=>$this->name
        ]);
        Ration::create([
            'item_id'=>$item->id,
            'stocks'=>0,
        ]);
        $this->reset([
            'product_type',
            'name'
        ]);
        $this->showList();
        $this->notification()->notify([
            'title'=>'Success!',
            'description'=>'Product has been added successfully!',
            'icon'=>'success',
        ]);
    
    }

    public function addStock($id)
    {
        $this->set_id=$id;
        $this->validate([
            'stocks'=>'required|numeric'
        ]);
        $this->ration->update([
            'stocks'=>$this->ration->stocks+$this->stocks,
        ]);
        $this->reset([
            'stocks'
        ]);
    }

    public function minusStock($id)
    {
        $this->set_id=$id;
        $this->validate([
            'stocks'=>'required|numeric'
        ]);
        $this->ration->update([
            'stocks'=>$this->ration->stocks-$this->stocks,
        ]);
        $this->reset([
            'stocks'
        ]);
    }

    public function edit($id)
    {
        $this->set_id=$id;
        $this->new_product_type=$this->item->item_type;
        $this->new_name=$this->item->name;
        $this->action='edit-item';
    }

    public function updateItem()
    {
        $this->validate([
            'new_product_type'=>'required',
            'new_name'=>'required'
        ]);
        $this->item->update([
            'item_type'=>$this->new_product_type,
            'name'=>$this->new_name
        ]);
        $this->reset([
            'new_product_type',
            'new_name'
        ]);
        $this->showList();
        $this->notification()->notify([
            'title'=>'Success!',
            'description'=>'Product has been updated successfully!',
            'icon'=>'success',
        ]);
    }

}