@extends('template.default')
@section('content')
    <h1>สูตรแม่ {{ $mynum }}</h1>
    <ul>
        <?php for( $i = 1; $i <= 12; $i++ ){?>
            <li>{{ $mynum }}*{{ $i }} = {{ $mynum * $i }}</li>
        <?php }?>

    </ul>
@endsection
