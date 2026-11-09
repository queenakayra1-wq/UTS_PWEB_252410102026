
<nav style="background-color: #754C38; padding: 18px 0;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">

        <h2 style="color: #FFF9F2; font-size: 25px;">
            SweetBite<span style="color: #F3D5C0;">.</span>
        </h2>

        <div style="display: flex; gap: 22px; flex-wrap: wrap;">
    <a href="{{ route('login') }}" style="color: white; text-decoration: none;">Login</a>
    <a href="{{ route('dashboard', ['username' => request('username')]) }}" style="color: white; text-decoration: none;">Dashboard</a>
    <a href="{{ route('profile', ['username' => request('username')]) }}" style="color: white; text-decoration: none;">Profile</a>
    <a href="{{ route('pengelolaan', ['username' => request('username')]) }}" style="color: white; text-decoration: none;">Pengelolaan</a>
        </div>

    </div>
</nav>
