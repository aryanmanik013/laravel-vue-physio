@component('mail::message')
<h2>Hello {{$body['name']}}, your Role in Physio [{{$body['role']}}] </h2>

<p>Here is your login Details</p>
<p><b>Role in Physio</b> : {{$body['role']}},</p>
<p><b>Username</b> : {{$body['email']}},</p>
<p><b>Password</b> : {{$body['password']}},</p>
<p>The email is a sample email for Laravel Tutorial: How to Send an Email using Laravel 8 from @component('mail::button', ['url' => $body['url_a']])
Bacancy Technology
@endcomponent</p>
 

 
Happy coding!<br>
 
Thanks From,<br>
Physio Team.
@endcomponent