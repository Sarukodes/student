<table>
    <tr>
        <th> Name </th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td> {{ $student->name }}
            </td>
    @endforeach
</table>
