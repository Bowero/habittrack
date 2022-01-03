<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GoalList extends Component
{
    public $goals;
    public $newGoal;

    public function mount()
    {
        $this->goals = auth()->user()->goals;
    }

    public function render()
    {
        return view('livewire.goal-list');
    }

    public function storeGoal()
    {
        $this->validate([
            'newGoal' => 'required|min:3',
        ]);

        $goal = auth()->user()->goals()->create([
            'title' => $this->newGoal,
        ]);

        $this->newGoal = '';

        $this->goals->push($goal);
    }

    public function toggleGoal($id)
    {
        $goal = $this->goals->find($id);
        if ($goal->isCheckedToday())
        {
            $goal->results()->whereDate('completed_at', today())->first()->delete();
        }
        else
        {
            $goal->results()->create([
                'goal_id' => $goal->id,
                'user_id' => auth()->user()->id,
                'is_complete' => true,
                'completed_at' => today(),
            ]);
        }

        // Emit streak_updated
        $this->emit('streak_updated');
    }
}
