@vite('resources/css/formations-admin.css')
@vite('resources/css/nav-admin.css')

@include('_head-admin')
@include('_nav-admin')

<div class="table-widget">
    <table>
        <caption>
            Formations
            <span class="table-row-count"></span>
        </caption>
        <thead>
            <tr>
                <th>Nom Formation</th>
                <th>Résumé</th>
                <th>Catégorie</th>
                <th>Prix</th>
            </tr>
        </thead>
        @if(isset($formations) && count($formations) > 0)
            <tbody>
                @foreach($formations as $formation)
                <tr>
                    <th>{{ $formation->title }}</th>
                    <th>{{ $formation->excerpt }}</th>
                    <th>{{ $formation->category }}</th>
                    <th>{{ $formation->price }}</th>
                </tr>
                @endforeach
            </tbody>
        @else
            <tr>
                <td colspan="4">Aucune formation trouvée</td>
            </tr>
        @endif
        <tfoot>
            <tr>
                <td colspan="4">
                    <ul class="pagination">
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
</div>