@vite('resources/css/team-admin.css')
@vite('resources/css/nav-admin.css')

@include('_head-admin')
@include('_nav-admin')

<div class="table-widget">
    <table>
        <caption>
            Utilisateurs sur le site
            <span class="table-row-count">{{ $users->count() }}</span>
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
            @foreach($users as $user)
                <tr>
                    <td>
                        @if($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="User Avatar" style="width: 100px;">
                        @else
                            <img src="{{ asset('images/default-avatar.png') }}" alt="Default Avatar">
                        @endif
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        {{ $user->address }}<br>
                        {{ $user->address2 }}<br>
                        {{ $user->city }}<br>
                        {{ $user->postalcode }}<br>
                        {{ $user->country }}
                    </td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
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
