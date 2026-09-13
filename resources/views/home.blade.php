<form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none">
    @csrf
</form>
<a
    href="{{ route('logout') }}"
    class="dropdown-item user-info-item"
    onclick="
        event.preventDefault();
        document.getElementById('logout-form').submit();
    "
    ><i class="fa-right-from-bracket fa-solid"></i> Logout</a
>
