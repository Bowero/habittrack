<div>
    <div class="mb-16">
        <h3 class="text-3xl leading-6 font-bold text-gray-900 mb-8">
            Your Progress
        </h3>
        <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                <dt class="text-lg font-medium text-gray-500 truncate">
                    Longest Streak
                </dt>
                <dd class="mt-1 text-3xl font-semibold text-gray-900">
                    {{ $longest_streak }} days
                </dd>
            </div>

            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                <dt class="text-lg font-medium text-gray-500 truncate">
                    Average Success Rate
                </dt>
                <dd class="mt-1 text-3xl font-semibold text-gray-900">
                    {{ $success_rate }}%
                </dd>
            </div>

            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                <dt class="text-lg font-medium text-gray-500 truncate">
                    Last Missed Day
                </dt>
                <dd class="mt-1 text-3xl font-semibold text-gray-900">
                    {{ $last_miss }}
                </dd>
            </div>
        </dl>
    </div>
    <div class="mb-16">
        <h3 class="text-3xl leading-6 font-bold text-gray-900 mb-8">
            Your Streak
        </h3>
        <div class="text-3xl break-all">
            {{ $streak }}
        </div>
    </div>
</div>
