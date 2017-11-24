From StudyLife website<br>
There is one person who would like to join your awesome organization.<br>
The name of the person is {{$user['first_name'].' '.$user['surname']}}<br>
His email is {{$user['email']}}<br>
he/she wishes to be {{$user['member_type']}}<br>
@if($user['user_message'])
    his/hers message is {{$user['user_message']}}<br>
@endif
<br>Please contact the person as soon as possible
<br>StudyLife
