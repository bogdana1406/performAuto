<!--Header-part-->
<div id="header">
    <h1><a href="{{ url('/admin/settings') }}">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li><a title="" href="{{ url('/admin/settings') }}"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
        <li>
            <form method="post" action="{{url('/logout')}}">
                {{csrf_field()}}
                <button type="submit" class="admin-header-btn">
                    <i class="icon icon-share-alt"></i> <span class="text">Logout</span>
                </button>
            </form>
        </li>
    </ul>
</div>
