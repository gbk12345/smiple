<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container ">
        <a class="navbar-brand" href="{{ route('help') }}">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
            @if (Auth::check())
                <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li>
                <li class="nav-item"><a class="nav-link" href="#">编辑资料</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('users.show',Auth::user())}}">个人中心</a></li>
                <li class="nav-item">
                    <a class="" id="" href="#">
                        <form action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                        </form>
                    </a>
                </li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
                <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">登录</a></li>
            @endif
        </ul>
    </div>
</nav>