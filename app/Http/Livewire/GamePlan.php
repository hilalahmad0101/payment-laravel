<?php

namespace App\Http\Livewire;

use App\Exports\GameExport;
use App\Models\GamePlan as ModelsGamePlan;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Excel;
use Illuminate\Support\Facades\File;
use Mail;
use Livewire\WithPagination;
use Pdf;

class GamePlan extends Component
{
    protected $paginationTheme = 'bootstrap';

    public $name, $email, $user_id, $date_time, $buyin, $total_buyin, $cashout, $win_loss, $amount_owned, $initial;

    public $edit_name, $edit_email, $edit_date_time, $edit_buyin, $edit_total_buyin, $edit_cashout, $edit_pnl, $edit_amount_owned, $edit_initial;

    public $show_name, $show_email, $show_date_time, $show_buyin, $show_total_buyin, $show_cashout, $show_pnl, $show_amount_owned, $show_initial, $show_total_amount, $show_image;

    public $removeGamePlan;
    public $edit_id;

    public $edit_total_amount;

    use WithPagination;
    public $search;

    public $total_b;
    public $total_boyout;
    public $total_tip;

    public $showgames;

    public $by_date;
    public function render()
    {
        $searchdata = '%' . $this->search . '%';
        if ($this->search) {
            $users = User::all();
            $games = ModelsGamePlan::latest()->where('inital', 'LIKE', $searchdata)->get();
            return view('livewire.game-plan', compact(['games', 'users']))->layout('layout.app');
        }
        if ($this->by_date) {
            $users = User::all();
            $games = ModelsGamePlan::latest()->whereDate('created_at', '=', $this->by_date)->get();
            return view('livewire.game-plan', compact(['games', 'users']))->layout('layout.app');
        }
        $users = User::all();
        $games = ModelsGamePlan::latest()->paginate(6);
        $this->total_b = ModelsGamePlan::sum('buyin');
        $this->total_boyout = ModelsGamePlan::sum('total_buyin');
        $this->total_tip = ModelsGamePlan::sum('tip_amount');
        return view('livewire.game-plan', compact(['games', 'users']))->layout('layout.app');
    }


    public function save()
    {
        $gameplan = new ModelsGamePlan();
        $this->validate([
            'buyin' => 'required',
            'total_buyin' => 'required',
            'cashout' => 'required',
            'initial' => 'required',
            'user_id' => 'required',
        ], [
            'required' => [
                'user_id' => 'The name field is required',
            ]
        ]);

        $gameplan->name = $this->user_id;
        $gameplan->buyin = $this->buyin;
        $gameplan->total_buyin = $this->total_buyin;
        $gameplan->cashout = $this->cashout;
        $gameplan->amount_owned = 0;
        $gameplan->inital = $this->initial;
        $gameplan->total_amount = 0;
        $gameplan->tip_amount = 0;
        $gameplan->image = '';
        $result = $gameplan->save();
        if ($result) {
            session()->flash('success', 'Game Add Successfully');
            $this->name = "";
            $this->email = "";
            $this->date_time = "";
            $this->buyin = "";
            $this->total_buyin = "";
            $this->cashout = "";
            $this->pnl = "";
            $this->amount_owned = "";
            $this->initial = "";

            $this->dispatchBrowserEvent('hide-game-plan-model');
        }
    }

    public function delete($id)
    {
        $this->removeGamePlan = $id;
        $this->dispatchBrowserEvent('show-delete-game-modal');
    }

    public function deleteGame()
    {
        $result = ModelsGamePlan::findOrFail($this->removeGamePlan);
        $destinaiton = public_path('/' . $result->image);
        if (File::exists($destinaiton)) {
            File::delete($destinaiton);
        }
        $result->delete();
        $this->dispatchBrowserEvent('hide-delete-game-modal');
        session()->flash('success', 'Delete Game Successfully');
    }

    public function edit($id)
    {
        $this->edit_id = $id;
        $games = ModelsGamePlan::findOrFail($this->edit_id);
        $this->edit_name = $games->users->name;
        $this->edit_email = $games->users->email;
        $this->edit_buyin = $games->buyin;
        $this->edit_total_buyin = $games->total_buyin;
        $this->edit_cashout = $games->cashout;
        $this->edit_win_loss = $games->win_loss;
        $this->edit_total_amount = $games->amount_owned;
        $this->edit_initial = $games->inital;
    }

    public function showGames($id)
    {
        $this->edit_id = $id;
        $games = ModelsGamePlan::findOrFail($this->edit_id);
        $this->show_name = $games->users->name;
        $this->show_email = $games->users->email;
        $this->show_date_time = $games->created_at;
        $this->show_buyin = $games->buyin;
        $this->show_total_buyin = $games->total_buyin;
        $this->show_cashout = $games->cashout;
        $this->show_pnl = $games->pnl;
        $this->show_amount_owned = $games->tip_amount;
        $this->show_initial = $games->inital;
        $this->show_total_amount = $games->total_amount;
        $this->show_image = $games->image;
    }

    public function update()
    {

        $gameplan = ModelsGamePlan::findOrFail($this->edit_id);

        $this->validate([
            'edit_buyin' => 'required',
            'edit_total_buyin' => 'required',
            'edit_cashout' => 'required',
            'edit_win_loss' => 'required',
            'edit_total_amount' => 'required',
            'edit_initial' => 'required',
        ]);

        $gameplan->buyin = $this->edit_buyin;
        $gameplan->total_buyin = $this->edit_total_buyin;
        $gameplan->cashout = $this->edit_cashout;
        $gameplan->win_loss = $this->edit_win_loss;
        $gameplan->total_amount = $this->edit_total_amount;
        $gameplan->inital = $this->edit_initial;
        $result = $gameplan->save();
        if ($result) {
            session()->flash('success', 'Game Update Successfully');
            $this->edit_buyin = "";
            $this->edit_total_buyin = "";
            $this->edit_cashout = "";
            $this->edit_win_loss = "";
            $this->edit_total_amount = "";
            $this->edit_initial = "";
            $this->dispatchBrowserEvent('hideupdate-game-plan-model');
        }
    }

    public function export()
    {
        return  (new GameExport())->download('game-' . date('Y-m-d') . '.xlsx');
        
    }

    public function sendMail($id)
    {
        $data['games'] = ModelsGamePlan::findOrFail($id);
        $games = ModelsGamePlan::findOrFail($id);
        $data["email"] = $games->users->email;
        $data["title"] = "From the client";
        $data["body"] = "this is your data";
        $pdf = Pdf::loadView('create_pdf', $data);

        Mail::send('semdmail', $data, function ($message) use ($data, $pdf) {
            $message->to($data["email"], $data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), "games" . date('Y-m-d') . ".pdf");
        });
        session()->flash('success', 'Mail Send Successfully');
    }

    public function saveUser()
    {
        $validate = $this->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $result = User::create($validate);
        if ($result) {
            session()->flash('success', 'User Create Successfully');
            $this->name = "";
            $this->email = "";
            $this->dispatchBrowserEvent('hideupdate-game-user-model');
        }
    }
}
