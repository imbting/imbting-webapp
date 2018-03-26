<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ asset('/dashboard-assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>{{ admin()->firstname }} {{ admin()->lastname }}</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">

			<li @if (currentRouteName() === 'dashboard.index') class="active" @endif>
				<a href="{{ route('dashboard.index') }}">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>

			<li class="treeview @if (strpos(currentRouteName(), 'dashboard.games.') !== false) active menu-open @endif">
				<a href="#">
					<i class="fa fa-gamepad"></i>
					<span>Games</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li @if (currentRouteName() === 'dashboard.games.index') class="active" @endif>
						<a href="{{ route('dashboard.games.index') }}"><i class="fa fa-circle-o"></i> All Games</a>
					</li>
					<li @if (currentRouteName() === 'dashboard.game.create') class="active" @endif>
						<a href="{{ route('dashboard.games.create') }}"><i class="fa fa-circle-o"></i> Create New Game</a>
					</li>
				</ul>
			</li>

			<li class="treeview @if (strpos(currentRouteName(), 'dashboard.athletes.') !== false) active menu-open @endif">
				<a href="#">
					<i class="fa fa-id-badge"></i>
					<span>Athletes</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li @if (currentRouteName() === 'dashboard.athletes.index') class="active" @endif>
						<a href="{{ route('dashboard.athletes.index') }}"><i class="fa fa-circle-o"></i> All Athletes</a>
					</li>
					<li @if (currentRouteName() === 'dashboard.athlete.create') class="active" @endif>
						<a href="{{ route('dashboard.athletes.create') }}"><i class="fa fa-circle-o"></i> Create New Athlete</a>
					</li>
				</ul>
			</li>

			<li class="treeview @if (strpos(currentRouteName(), 'dashboard.teams.') !== false) active menu-open @endif">
				<a href="#">
					<i class="fa fa-users"></i>
					<span>Teams</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li @if (currentRouteName() === 'dashboard.teams.index') class="active" @endif>
						<a href="{{ route('dashboard.teams.index') }}"><i class="fa fa-circle-o"></i> All Teams</a>
					</li>
					<li @if (currentRouteName() === 'dashboard.team.create') class="active" @endif>
						<a href="{{ route('dashboard.teams.create') }}"><i class="fa fa-circle-o"></i> Create New Team</a>
					</li>
				</ul>
			</li>

			<li class="treeview @if (strpos(currentRouteName(), 'dashboard.events.') !== false) active menu-open @endif">
				<a href="#">
					<i class="fa fa-hourglass"></i>
					<span>Events</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li @if (currentRouteName() === 'dashboard.events.index') class="active" @endif>
						<a href="{{ route('dashboard.events.index') }}"><i class="fa fa-circle-o"></i> All Events</a>
					</li>
					<li @if (currentRouteName() === 'dashboard.event.create') class="active" @endif>
						<a href="{{ route('dashboard.events.create') }}"><i class="fa fa-circle-o"></i> Create New Event</a>
					</li>
				</ul>
			</li>

			{{-- <li @if (currentRouteName() === 'dashboard.members.index') class="active" @endif>
				<a href="{{ route('dashboard.members.index') }}"><i class="fa fa-users"></i> <span>Members</span></a>
			</li> --}}

			{{-- <li class="treeview @if (strpos(currentRouteName(), 'dashboard.members.') !== false) active menu-open @endif">
				<a href="#">
					<i class="fa fa-users"></i>
					<span>Members</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li @if (currentRouteName() === 'dashboard.members.index') class="active" @endif>
						<a href="{{ route('dashboard.members.index') }}"><i class="fa fa-circle-o"></i> All Members</a>
					</li>
					<li @if (currentRouteName() === 'dashboard.members.banned') class="active" @endif>
						<a href="{{ route('dashboard.members.banned') }}"><i class="fa fa-circle-o"></i> Banned Members</a>
					</li>
				</ul>
			</li> --}}

			{{-- <li @if (currentRouteName() === 'dashboard.events.index') class="active" @endif>
				<a href="{{ route('dashboard.events.index') }}"><i class="fa fa-clone"></i> <span>Events</span></a>
			</li> --}}

			{{-- <li @if (currentRouteName() === 'dashboard.bets.index') class="active" @endif>
				<a href="{{ route('dashboard.bets.index') }}"><i class="fa fa-usd"></i> <span>Bets</span></a>
			</li> --}}

			<li class="treeview @if (strpos(currentRouteName(), 'dashboard.admins.') !== false) active menu-open @endif">
				<a href="#">
					<i class="fa fa-users"></i>
					<span>Admins</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li @if (currentRouteName() === 'dashboard.admins.index') class="active" @endif>
						<a href="{{ route('dashboard.admins.index') }}"><i class="fa fa-circle-o"></i> All Admins</a>
					</li>
					<li @if (currentRouteName() === 'dashboard.admins.create') class="active" @endif>
						<a href="{{ route('dashboard.admins.create') }}"><i class="fa fa-circle-o"></i> Create New Admin</a>
					</li>
					<li>
						<a href="{{ route('dashboard.admins.trash.index') }}"><i class="fa fa-circle-o"></i> Trash</a>
					</li>
				</ul>
			</li>

			<li class="treeview @if (strpos(currentRouteName(), 'dashboard.roles.') !== false) active menu-open @endif">
				<a href="#">
					<i class="fa fa-universal-access"></i>
					<span>Roles</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li @if (currentRouteName() === 'dashboard.roles.index') class="active" @endif>
						<a href="{{ route('dashboard.roles.index') }}"><i class="fa fa-circle-o"></i> All Roles</a>
					</li>
					<li @if (currentRouteName() === 'dashboard.roles.create') class="active" @endif>
						<a href="{{ route('dashboard.roles.create') }}"><i class="fa fa-circle-o"></i> Create New Role</a>
					</li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>