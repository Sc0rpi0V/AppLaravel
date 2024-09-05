@vite('resources/css/team-admin.css')
@vite('resources/css/nav-admin.css')

@include('_head-admin')
@include('_nav-admin')

<div class="table-widget">
    <table>
        <caption>
            Utilisateurs sur le site
            <span class="table-row-count"></span>
        </caption>
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Adresse E-mail</th>
                <th>Numéro de Téléphone</th>
                <th>Adresse</th>
                <th>Date de création</th>
            </tr>
        </thead>
        <tbody id="team-member-rows">
            <tr>
                <th>
                    @if(Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="User Avatar" style="width: 100px;">
                    @else
                        <img src="{{ asset('images/default-avatar.png') }}" alt="Default Avatar">
                    @endif
                </th>
                <th>{{ auth()->user()->name}}</th>
                <th>{{ auth()->user()->firstname}}</th>
                <th>{{ auth()->user()->gender}}</th>
                <th>{{ auth()->user()->email}}</th>
                <th>{{ auth()->user()->phone}}</th>
                <th>
                    {{ auth()->user()->address}}
                    {{ auth()->user()->address2}}
                    {{ auth()->user()->city}}
                    {{ auth()->user()->postalcode}}
                    {{ auth()->user()->country}}
                </th>
                <th>{{ auth()->user()->created_at}}</th>
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