@extends('layouts.app')
@section('content')
<h2>Danh sách sinh viên và các môn học đã đăng ký</h2>
<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Môn học</th>
        </tr>
    </thead>

    <tbody>
        @foreach($students as $s)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->email }}</td>
            
            <!-- cách 1 lấy tên khóa học -->
             <td>
                @foreach($s->courses as $c)
                <span>{{ $c -> title }}</span>@if(!$loop->last),@endif
                @endforeach
            </td>

            <!-- cách 2: lấy tên khóa học -->
            <!-- <td>{{ $s->courses->pluck('title')->join(', ') }}</td> -->
        </tr>
        @endforeach
    </tbody>
</table>

@endsection