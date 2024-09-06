@vite('resources/css/analytics-admin.css')
@vite('resources/css/nav-admin.css')

@include('_head-admin')
@include('_nav-admin')

<div class="table-widget">
    <table>
        <caption>
            Analytics
            <span class="table-row-count"></span>
        </caption>
        <thead>
            <tr>
                <th colspan="2">Statistiques Générales</th>
            </tr>
        </thead>
        <tbody id="analytics-rows">
            <tr>
                <th>Nombre total d'utilisateurs actifs (24h)</th>
                <td>{{ $activeUsers }}</td>
            </tr>
            <tr>
                <th>Nombre total de visiteurs uniques</th>
                <td>{{ $uniqueVisitors }}</td>
            </tr>
            <tr>
                <th colspan="2">Pages les plus visitées</th>
            </tr>
            @foreach($mostVisitedPages as $page)
                <tr>
                    <th>Page : {{ $page->page }}</th>
                    <td>{{ $page->visits }} visites</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <ul class="pagination"></ul>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
