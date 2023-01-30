<table border="1px">
    <tr>
        <th> Name </th>
        <th> Subject </th>
        <th> Mark </th>
        <th> class </th>
        <th> Rollno </th>
        <th> Address</th>
    </tr>
    @foreach ($Results as $result )
    <tr>
        <td> {{$result->student->name}}</td>
        <td> {{$result->subject->subject}}</td>
        <td> {{$result->mark}} </td>
        <td> {{$result->class}}</td>
        <td> {{$result->rollno}}</td>
        <td> {{$result->address}}</td>
    </tr>
    @endforeach
</table>
