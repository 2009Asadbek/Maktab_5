<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href=""> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">{{auth()->user()->name}}</span>
        </a>
      </div>     
      <ul class="sidebar-menu">
        <li class="menu-header">Asosiy</li>

        <li class="dropdown active">
          <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.students.index')}}" class="menu-toggle nav-link">
             <span>Students</span></a>
        </li>

        <li class="dropdown">
          <a href="{{route('admin.teachers.index')}}" class="menu-toggle nav-link">
             <span>Teachers</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.lessons.index')}}" class="menu-toggle nav-link">
             <span>Lessons</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.contact.index')}}" class="menu-toggle nav-link">
             <span>Contact</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.sports.index')}}" class="menu-toggle nav-link">
             <span>Sport</span></a>
        </li>

        <li class="dropdown">
          <a href="{{route('admin.news.index')}}" class="menu-toggle nav-link">
             <span>News</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.galleries.index')}}" class="menu-toggle nav-link">
             <span>Gallery</span></a>
        </li>

        <li class="dropdown">
          <a href="{{route('admin.leaders.index')}}" class="menu-toggle nav-link">
             <span>Leader</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.projects.index')}}" class="menu-toggle nav-link">
             <span>Projects</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.smena1.index')}}" class="menu-toggle nav-link">
             <span>smena1</span></a>
        </li>

        <li class="dropdown">
          <a href="{{route('admin.smena2.index')}}" class="menu-toggle nav-link">
             <span>Smena2</span></a>
        </li>

      </ul>
    </aside>
  </div>