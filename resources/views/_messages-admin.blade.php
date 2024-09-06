@vite('resources/css/messages-admin.css')
@vite('resources/css/nav-admin.css')

@include('_head-admin')
@include('_nav-admin')

<div class="table-widget">
    <table>
        <caption>
            Messages
            <span class="table-row-count">{{ $messages->count() }}</span>
        </caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Utilisateur</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody id="team-member-rows">
            @foreach($messages as $message)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $message->user->name }} {{ $message->user->firstname }}</td>
                    <td>{{ $message->user->email }}</td>
                    <td>{{ $message->message }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <ul class="pagination">
                        {{ $messages->links() }}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
