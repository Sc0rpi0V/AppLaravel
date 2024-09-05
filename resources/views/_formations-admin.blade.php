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
        <tbody id="team-member-rows">
            <tr>
                <th>{{ auth()->user()->name}}</th>
                <th>{{ auth()->user()->firstname}}</th>
                <th>{{ auth()->user()->gender}}</th>
                <th>{{ auth()->user()->email}}</th>
            </tr>
        </tbody>
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