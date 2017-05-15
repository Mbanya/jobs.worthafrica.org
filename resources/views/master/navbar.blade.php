<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">{{ siteSettings('siteName') }}</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('posts.list') }}"><i class="fa fa-bolt fa-fw"></i> {{ t('Latest Jobs') }}</a></li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-th-large fa-fw"></i> {{ t('Categories') }}<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                         @foreach(siteCategories() as $category)
                             <li><a href="{{ route('posts.list',['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                         @endforeach
                     </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-ul fa-fw"></i> {{ t('Job Types') }}<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                         @foreach(sitePostTypes() as $type)
                             <li><a href="{{ route('posts.list',['type' => $type->slug]) }}">{{ $type->name }}</a></li>
                         @endforeach
                     </ul>
                </li>
                <li><a href="{{ route('users.list') }}"><i class="fa fa-binoculars fa-fw"></i> {{ t('Hire People') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(auth()->check() == false)
                    <li><a href="{{ route('login') }}"><i class="fa fa-sign-in fa-fw"></i> {{ t('Login') }}</a></li>
                    <li><a href="{{ route('registration') }}"><i class="fa fa-plus fa-fw"></i> {{ t('Register') }}</a></li>
                @else
                    <li><a href="{{ route('posts.create') }}"><i class="fa fa-plus fa-fw"></i> {{ t('Post A Job') }}</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user fa-fw"></i> {{ \Illuminate\Support\Str::words(auth()->user()->fullname, 1, '') }} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('users.profile', ['username' => auth()->user()->username]) }}"><i class="fa fa-user fa-fw"></i> {{ t('Profile') }}</a></li>
                                <li><a href="{{ route('users.settings', [auth()->user()->username]) }}"><i class="fa fa-cog fa-fw"></i> {{ t('Settings') }}</a></li>
                                @if(auth()->user()->permission == 'admin')
                                    <li><a href="{{ url('admin') }}"><i class="fa fa-wrench fa-fw"></i> Admin Panel</a></li>
                                @endif
                                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> {{ t('Logout') }}</a></li>
                            </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>