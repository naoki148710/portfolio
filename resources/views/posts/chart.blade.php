<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            小テスト点数推移
        </h2>
    </x-slot>

    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h4 mb-4">
                    生徒ID: {{ $post->students_id }} の小テスト点数推移
                </h1>

                <canvas id="scoreChart" height="120"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const labels = @json($labels);
        const scores = @json($scores);

        const ctx = document.getElementById('scoreChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: '小テスト点数',
                    data: scores,
                    tension: 0.3,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        suggestedMax: 10,
                        title: {
                            display: true,
                            text: '点数'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: '日にち'
                        }
                    }
                }
            }
        });
    </script>
</x-app-layout>