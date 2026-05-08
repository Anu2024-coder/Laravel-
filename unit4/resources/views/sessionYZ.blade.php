@if(session()->has('name'))
<p>Welcome, {{session('name')}}</p>
<a href="/logout">Logout</a>
@else
<p>Welcome...Please relogin</p>
<a href="/loginform">Login</a>
@endif