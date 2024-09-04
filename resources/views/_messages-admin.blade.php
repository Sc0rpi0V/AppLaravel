@vite('resources/css/team-admin.css')

<div class="table-widget">
    <table>
        <caption>
            Messages
            <span class="table-row-count"></span>
        </caption>
        <thead>
            <tr>
                <th>Listing de vos messages</th>
            </tr>
        </thead>
        <tbody id="team-member-rows">
            @foreach(auth()->user()->messages as $message)
                <tr>
                    <th>Message {{ $loop->iteration }}</th>
                    <th>{{ $message->message }}</th>
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