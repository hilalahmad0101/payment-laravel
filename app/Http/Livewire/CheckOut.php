<?php

namespace App\Http\Livewire;

use App\Models\GamePlan;
use Livewire\Component;

class CheckOut extends Component
{

    public $edit_id;

    public $date_time, $buyin, $total_buyins, $pnl, $tip_amount, $amount_owned, $total_amount, $image;
    public $win_loss;
    public $cut_amount=0;
    public $next = false;

    public function mount($id)
    {
        $this->edit_id = $id;
        $games = GamePlan::findOrFail($id);
        $this->date_time = $games->date_time;
        $this->buyin = $games->buyin;
        $this->total_buyins = $games->total_buyin;
        $this->pnl = $games->pnl;
        $this->amount_owned = $games->amount_owned;
        $this->total_amount = $games->total_amount;
        $this->tip_amount = $games->tip_amount;
        $this->win_loss = $games->win_loss;
        $this->image = $games->image;
    }
    public function render()
    {
        return view('livewire.check-out')->layout('layout.app');
    }

    public function nextTab()
    {
        $this->next = true;
    }

    public function prevTab()
    {
        $this->next = false;
    }

    public function increseByfifteen()
    {
        $this->validate([
            'win_loss'=> 'required',
        ]);
        $total = ($this->win_loss * 15) / 100;
        $this->tip_amount = $total;
        $this->total_amount = $this->win_loss - $total;
        $games = GamePlan::findOrFail($this->edit_id);
        $games->total_amount = $this->total_amount;
        $games->tip_amount = $total;
        $games->win_loss = $this->win_loss;
        $games->save();
    }
    public function increseByTen()
    {
        $this->validate([
            'win_loss'=> 'required',
        ]);
        $total = ($this->win_loss * 10) / 100;
        $this->tip_amount = $total;
        $this->total_amount = $this->win_loss - $total;
        $games = GamePlan::findOrFail($this->edit_id);
        $games->total_amount = $this->total_amount;
        $games->tip_amount = $total;
        $games->win_loss = $this->win_loss;
        $games->save();
    }
    public function save()
    {
        $this->validate([
            'win_loss'=> 'required',
        ]);
        $games = GamePlan::findOrFail($this->edit_id);
        $games->total_amount = $this->total_amount;
        $games->save();
        session()->flash('success', 'Update Successfully');
        return redirect(route('game-plan'));
    }

    public function cutAmountText()
    {
        $this->validate([
            'win_loss'=> 'required',
        ]);
        $this->tip_amount = $this->cut_amount;
        $this->total_amount = $this->win_loss - $this->cut_amount;
        $games = GamePlan::findOrFail($this->edit_id);
        $games->total_amount = $this->total_amount;
        $games->tip_amount = $this->tip_amount;
        $games->win_loss = $this->win_loss;
        $games->save();
    }

    public function changeData()
    {
        $this->validate([
            'win_loss'=> 'required',
        ]);
        $this->tip_amount = $this->cut_amount;
        $this->total_amount = $this->win_loss - intval($this->cut_amount ?$this->cut_amount :0 );
        $games = GamePlan::findOrFail($this->edit_id);
        $games->total_amount = $this->total_amount;
        $games->tip_amount = $this->tip_amount ? $this->cut_amount : 0;
        $games->win_loss = $this->win_loss;
        $games->save();
    }
}
