This is my dashboard

<a class="dropdown-item text-danger" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="#"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
<form action="{{route('logout')}}" method="post" id="logoutForm">
    @csrf
</form>
