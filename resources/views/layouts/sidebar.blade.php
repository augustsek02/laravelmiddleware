<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">

            <ul class="pcoded-item pcoded-left-item">

                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Students</span>
                    </a>

                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route("student.insertform") }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Register students</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route("student.list") }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">List of students</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Teachers</span>
                    </a>

                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Register Teachers</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">List of Teachers</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

    </div>
    </div>
</nav>
