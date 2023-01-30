<form action="save" method="POST">
    @csrf
    <label for="student_name">Student name</label>
    <select name="student_id" id="student_id">
        @foreach ($students as $student)
            <option value="{{ $student->id }}">{{ $student->name }}</option>
        @endforeach
    </select>
    <label for="subject">Subject name</label>
    <select name="subject_id" id="subject_id">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
        @endforeach
    </select>
    Mark: <input type="number" name="mark">
    class: <input type="number" name="class">
    Rollno: <input type="number" name="rollno">
    Address: <input type="text" name="address">
    <br><br>
    <button class="btn btn-primary">submit</button>
</form>
