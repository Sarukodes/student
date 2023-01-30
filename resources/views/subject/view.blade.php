<table>
    <tr>
        <th> Subject name </th>
    </tr>
    @foreach ($subjects as $subject)
    <tr>
        <td> {{$subject->subject}}
        </td>
    @endforeach


</table>
