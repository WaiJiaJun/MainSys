@extends('layouts.myown')

@section('content')
<head>
    <style>
 
        .prevbutton {
            top:-40%;
            left:0%;
            width:100px;
            height:40px;
            position: absolute;
            z-index: 2;
            background: rgb(65, 137, 201);
            color: gold;
        }

        .nextbutton {
            top:-40%;
            left:88%;
            width:100px;
            height:40px;
            position: absolute;
            z-index: 2;
            background: rgb(65, 137, 201); 
            color: gold;
        }

        .greenTd {
            background-color: rgb(76, 255, 76);
        }
 
        .redTd {
            background-color: rgb(253, 42, 31);
        }

    </style>
{{-- <link rel="stylesheet" type="text/css" href="C:\Users\jiaju\Desktop\LiannFYP\MainSys\resources\css\button.css"> --}}
</head>
<body style="background-color:khaki">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3" align="center">Available DateTime</h1>

            <button type="button" class="prevbutton"><-Prev</button>
            <button type="button" class="nextbutton">Next-></button>

        </div>
    </div>
    
    <table border="5" cellspacing="0" align="left">
        <!--<caption>Timetable</caption>-->
        <tr>
            <td align="center" height="60" width="120"><br>
                <b>Date/Time</b></br>
            </td>
            <td align="center" height="50" width="100">
                <b>00:00-01:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>01:00-02:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>02:00-03:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>03:00-04:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>04:00-05:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>05:00-06:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>06:00-07:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>07:00-08:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>08:00-09:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>09:00-10:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>10:00-11:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>11:00-12:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>12:00-13:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>13:00-14:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>14:00-15:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>15:00-16:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>16:00-17:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>17:00-18:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>18:00-19:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>19:00-20:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>20:00-21:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>21:00-22:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>22:00-23:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b>23:00-00:00</b>
            </td>
        </tr>

        @foreach($arrays as $key => $array)
        <tr>
        
            <td align="center" height="50">
                <b>{{ $key }}</b>
            </td>

            @foreach($array as $i)
                @if ($i == "O")
                    <td align="center" height="50" class="greenTd"></td>
                @else
                    <td align="center" height="50" class="redTd"></td>
                @endif
            @endforeach
        </tr>
        @endforeach
        
    </table>

    <div>
        <button type="button" class="redTd">Booked</button>
        <button type="button" class="greenTd">Available</button>
    </div>
</body>
@endsection