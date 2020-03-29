<div class="left-sidebar-scroll">
    <div class="left-sidebar-content">
        <ul class="sidebar-elements">
            @foreach(\HDModule::getMenus() as $moduleName=>$groups)
            <li class="divider">{{$moduleName}}</li>
            <li class="parent">
                @foreach($groups as $group)
                <a href="#"><i class="icon mdi mdi-face"></i><span>{{$group['title']}}</span></a>
                <ul class="sub-menu">
                    @foreach($group['menus'] as $menu)
                    <li>
                        <a href="u{{$menu['url']}}">{{$menu['title']}}</a>
                    </li>
                    @endforeach
                </ul>
                @endforeach
            </li>
            @endforeach

            <li class="divider">技术支持</li>
            <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>支持</span></a>
                <ul class="sub-menu">
                    <li>
                        <a href="layouts-primary-header.html">视频教程</a>
                    </li>
                    <li>
                        <a href="layouts-success-header.html">访问官网</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>