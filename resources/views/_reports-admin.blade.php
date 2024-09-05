@vite('resources/css/reports-admin.css')
@vite('resources/css/nav-admin.css')
@vite('resources/js/app.js')
@vite('resources/js/reports.js')

@include('_head-admin')
@include('_nav-admin')

<div class="table-widget">
    <table>
        <caption>
            Reports
            <span class="table-row-count"></span>
        </caption>
        <thead>
            <tr>
                <th>Type de rapport</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody id="team-member-rows">
            <tr>
                <td><strong>Espace total disque:</strong></td>
                <td>{{ number_format($diskTotalSpace / (1024 * 1024 * 1024), 2) }} Go</td>
            </tr>
            <tr>
                <td><strong>Espace disque libre:</strong></td>
                <td>{{ number_format($diskFreeSpace / (1024 * 1024 * 1024), 2) }} Go</td>
            </tr>
            <tr>
                <td><strong>Utilisation mémoire:</strong></td>
                <td>{{ number_format($memoryUsage / (1024 * 1024), 2) }} Mo</td>
            </tr>
            <tr>
                <td><strong>Taille du répertoire storage:</strong></td>
                <td>{{ number_format($directorySize / (1024 * 1024), 2) }} Mo</td>
            </tr>
        </tbody>
    </table>
    <br>

    <h3>Évolution de l'espace disque</h3>
    <canvas id="diskUsageChart"></canvas>
    <br>
    <h3>Évolution de la mémoire</h3>
    <canvas id="memoryUsageChart"></canvas>
    <br>
    <h3>Évolution de la taille du répertoire</h3>
    <canvas id="memoryDirectorySize"></canvas>
</div>

<script>
    var diskUsageLabels = [
        @foreach($diskUsages as $usage)
            "{{ $usage->created_at }}",
        @endforeach
    ];

    var diskUsageTotalSpace = [
        @foreach($diskUsages as $usage)
            {{ number_format($usage->total_space / (1024 * 1024 * 1024), 2) }},
        @endforeach
    ];

    var diskUsageFreeSpace = [
        @foreach($diskUsages as $usage)
            {{ number_format($usage->free_space / (1024 * 1024 * 1024), 2) }},
        @endforeach
    ];

    var memoryUsageData = [
        @foreach($diskUsages as $usage)
            {{ number_format($usage->memory_usage / (1024 * 1024), 2) }},
        @endforeach
    ];

    var directorySize = {{ number_format($directorySize / (1024 * 1024), 2) }};
</script>
