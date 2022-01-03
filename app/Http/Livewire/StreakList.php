<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StreakList extends Component
{
    public $streak;
    public $longest_streak;
    public $success_rate;
    public $last_miss;

    protected $listeners = [
        'streak_updated' => 'updateStreak',
    ];

    public function mount()
    {
        $this->updateStreak();
    }

    public function render()
    {
        return view('livewire.streak-list');
    }

    public function updateStreak()
    {
        $first_day = auth()->user()->goals()->orderBy('created_at')->first()?->created_at;

        $this->longest_streak = 0;
        $this->last_miss = 'Never';
        $this->success_rate = 0;

        $this->streak = '';

        if ($first_day) {
            $number_of_days = $first_day->diffInDays(now());
            $current_streak = 0;

            foreach (range($number_of_days, 0, -1) as $days) {
                // Check if all goals that were created $day ago are completed
                $goals = auth()->user()->goals()->where('created_at', '<=', now()->subDays($days))->get();
                $is_completed = true;
                foreach ($goals as $goal) {
                    if (!$goal->isCheckedSubDays($days)) {
                        $is_completed = false;
                        break;
                    }
                }
                if ($is_completed) {
                    $this->streak .= '✅';
                    $current_streak++;
                } else {
                    $this->streak .= '❌';
                    $current_streak = 0;
                    $this->last_miss = $days . ($days == 1 ? ' day ago' : ' days ago');
                }
                if ($current_streak > $this->longest_streak) {
                    $this->longest_streak = $current_streak;
                }
            }
            $this->success_rate = round((substr_count($this->streak, '✅') / mb_strlen($this->streak, 'UTF-8')) * 100);
        }
    }
}
