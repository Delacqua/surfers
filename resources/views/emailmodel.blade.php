Hello <i>{{ $obj->receiver }}</i>,  

<div>
<p><b>Name:</b>&nbsp;{{ $obj->name }}</p>
<p><b>Email:</b>&nbsp;{{ $obj->email }}</p>
<p><b>Place:</b>&nbsp;{{ $obj->place }}</p>
<p><b>Birthday:</b>&nbsp;{{ $obj->birthday }}</p>
<p><b>Phone:</b>&nbsp;{{ $obj->phone }}</p>
<p><b>Message:</b>&nbsp;{{ $obj->message }}</p>
</div>
 
 
Thank You,
<br/>
<i>{{ $obj->sender }}</i>